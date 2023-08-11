<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderReportController;
use App\Http\Controllers\HowToOrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/otd', function(){
    return view('frontend.order-report');
});

Route::get('/HowToOrder', [HowToOrderController::class, 'index']);

Route::get('/order-report', [OrderReportController::class, 'index']);
Route::post('/order-report', [OrderReportController::class, 'register']);

Route::post('/proceedtopaypal', [OrderReportController::class, 'proceedtopaypal']);
Route::get('/proceedtopaypal', [OrderReportController::class, 'home']);



