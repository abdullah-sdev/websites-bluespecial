<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class OrderReportController extends Controller
{
    //
    public function index()
    {
        return view('frontend/get-report');
    }

    public function home()
    {
        return redirect('/index');
    }

    public function proceedtopaypal(Request $request)
    {

        $request->validate(
            [
                'name' => 'required|min:1',
                'email' => 'required|email',
                'phone' => 'required|numeric|min:8',
                'vin' => 'required|min:17|max:17',
                'country' => 'required',
                'city' => 'required'
            ]
        );


        // echo "<pre>";
        // print_r($request->all());
        // echo "</pre>";

        return view('frontend/customer-checkout');
    }

    public function register(Request $request)
    {

        
        $request->validate(
            [
                'vin' => 'required|min:17|max:17'
            ]
        );
        
        $canadian_states = array( 
            "BC" => "British Columbia", 
            "ON" => "Ontario", 
            "NL" => "Newfoundland and Labrador", 
            "NS" => "Nova Scotia", 
            "PE" => "Prince Edward Island", 
            "NB" => "New Brunswick", 
            "QC" => "Quebec", 
            "MB" => "Manitoba", 
            "SK" => "Saskatchewan", 
            "AB" => "Alberta", 
            "NT" => "Northwest Territories", 
            "NU" => "Nunavut",
            "YT" => "Yukon Territory"
        );

        $american_states = array(
            'AL' => 'Alabama',
            'AK' => 'Alaska',
            'AZ' => 'Arizona',
            'AR' => 'Arkansas',
            'CA' => 'California',
            'CO' => 'Colorado',
            'CT' => 'Connecticut',
            'DE' => 'Delaware',
            'DC' => 'District Of Columbia',
            'FL' => 'Florida',
            'GA' => 'Georgia',
            'HI' => 'Hawaii',
            'ID' => 'Idaho',
            'IL' => 'Illinois',
            'IN' => 'Indiana',
            'IA' => 'Iowa',
            'KS' => 'Kansas',
            'KY' => 'Kentucky',
            'LA' => 'Louisiana',
            'ME' => 'Maine',
            'MD' => 'Maryland',
            'MA' => 'Massachusetts',
            'MI' => 'Michigan',
            'MN' => 'Minnesota',
            'MS' => 'Mississippi',
            'MO' => 'Missouri',
            'MT' => 'Montana',
            'NE' => 'Nebraska',
            'NV' => 'Nevada',
            'NH' => 'New Hampshire',
            'NJ' => 'New Jersey',
            'NM' => 'New Mexico',
            'NY' => 'New York',
            'NC' => 'North Carolina',
            'ND' => 'North Dakota',
            'OH' => 'Ohio',
            'OK' => 'Oklahoma',
            'OR' => 'Oregon',
            'PA' => 'Pennsylvania',
            'RI' => 'Rhode Island',
            'SC' => 'South Carolina',
            'SD' => 'South Dakota',
            'TN' => 'Tennessee',
            'TX' => 'Texas',
            'UT' => 'Utah',
            'VT' => 'Vermont',
            'VA' => 'Virginia',
            'WA' => 'Washington',
            'WV' => 'West Virginia',
            'WI' => 'Wisconsin',
            'WY' => 'Wyoming',
        ); 
    

        // echo "<pre>";
        // print_r($request->all());
        // echo "</pre>";

        $data = compact('request', 'american_states', 'canadian_states');


        if($request['vin']){
            return view('frontend/get-report')->with($data);
        }else{
            return view('frontend/index');
        }

        

    }
}