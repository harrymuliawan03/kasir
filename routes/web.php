<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;

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

Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/', [AuthController::class, 'index'])->name('login_page');

Route::middleware(AuthMiddleware::class)->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/order', [OrderController::class, 'index'])->name('order');
    Route::post('/make-order', [OrderController::class, 'createOrder'])->name('createOrder');
});