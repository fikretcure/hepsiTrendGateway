<?php

use App\Http\Controllers\AuthController;
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

Route::post('auth/login', [AuthController::class, 'login'])->name('login');
Route::post('auth/check-token', [AuthController::class, 'checkToken'])->name('checkToken');


Route::middleware(AuthMiddleware::class)->group(function () {
    Route::post('auth/logout', [AuthController::class, 'logout'])->name('logout');
});
