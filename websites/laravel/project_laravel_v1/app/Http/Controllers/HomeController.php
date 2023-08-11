<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //index
    public function index()
    {
        return view('frontend.index');
    }

    // public function vinnumber(Request $request_vin)
    // {
    //     $request_vin->validate(
    //         [

    //         ]
    //     );
    //     return view('frontend.index');
    // }
}
