<?php

use App\Http\Controllers\OrderController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware(AuthMiddleware::class)->group(function () {
    Route::post('payment', [OrderController::class,'iyzicoPayment']);
});
