<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HowToOrderController extends Controller
{
    //
    public function index()
    {
        return view('frontend.how-to-order');
    }
}
