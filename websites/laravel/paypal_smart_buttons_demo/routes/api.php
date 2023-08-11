<?php
use App\Http\Controllers\PaypalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix','paypal'], function() {
    Route::post('/paypal/order/create/', [PaypalController::class, 'create']);
    Route::post('/paypal/order/capture/', [PaypalController::class, 'capture']);
    Route::post('/paypal/order/test', [PaypalController::class, 'test']);
});