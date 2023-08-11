<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Srmklive\PayPal\Services\PayPal as PayPalClient;
use App\Models\Order;
use DB;

class PayPalController extends Controller
{
    //

    public function test(Request $request)
    {
        $data = json_decode($request->getContent(), true);
    }



    public function create(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        //Init Paypal
        // $provider = new PayPalClient;
        $provider = \PayPal::setProvider();
        $provider->setApiCredentials(config('paypal'));
        $token = $provider->getAccessToken();
        $provider->setAccessToken($token);

        $price = Order::getProductPrice($data['value']);
        
        $taxRate = 0.10; // Example tax rate of 10%
    
        // Calculate tax amount
        $taxAmount = $price * $taxRate;


        $description = Order::getProductDescription($data['value']);
        
        // $pporder = [
        //     "intent" => "CAPTURE",
        //     "purchase_units" => [
        //         [
        //             "amount" => [
        //                 "currency_code" => "USD",
        //                 "value" => $price
        //             ],
        //             "description" => $description
        //         ]
        //     ]
        //         ];

        $pporder = [
            "intent" => "CAPTURE",
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $price + $taxAmount, // Include tax in the total
                        "breakdown" => [
                            "item_total" => [
                                "currency_code" => "USD",
                                "value" => $price,
                            ],
                            "tax_total" => [
                                "currency_code" => "USD",
                                "value" => $taxAmount,
                            ],
                        ],
                    ],
                    "description" => $description
                ]
            ]
        ];

        $order = $provider->createOrder($pporder);

        //save created Order to database
        Order::create([
            'price' => $price,
            'description' => $description,
            'status' => $order['status'],
            'reference_number' => $order['id']
        ]);

        return response()->json($order);  
    }


    public function capture(Request $request){
        $data = json_decode($request->getContent(), true);
        $orderId = $data['orderId'];

        //Init Paypal
        $provider = \PayPal::setProvider();
        $provider->setApiCredentials(config('paypal'));
        $token = $provider->getAccessToken();
        $provider->setAccessToken($token);

        $result = $provider->capturePaymentOrder($orderId);

        //update the database
        if ($result['status'] == 'COMPLETED') {
            DB::table('orders')
                ->where('reference_number', $result['id'])
                ->update(['status'=>'COMPLETED', 'updated_at'=>\Carbon\Carbon::now()]);
        }

        // return $data['orderId'];

        return response()->json($result);


    }

}
