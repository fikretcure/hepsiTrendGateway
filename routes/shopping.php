<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
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
    Route::apiResource('products', ProductController::class);
    Route::apiResource('categories', CategoryController::class);
    Route::prefix('basket')->controller(OrderController::class)->group(function () {
        Route::get('', 'basket')->name('basket');
        Route::put('increasing-quantity-product', 'increasingQuantityProduct')->name('increasingQuantityProduct');
        Route::put('decrement-quantity-product', 'decrementQuantityProduct')->name('decrementQuantityProduct');
        Route::delete('remove-product', 'decrementQuantityProduct')->name('removeProduct');
    });
    Route::apiResource('orders', OrderController::class);
});
