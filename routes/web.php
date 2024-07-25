<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'admin'], function(){
    Route::resource('user', UserController::class);
});

Route::get('/', function () {
   return view('layouts.backend');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('product', App\Http\Controllers\ProductController::class)->middleware('auth');
Route::resource('cashier', App\Http\Controllers\CashierController::class)->middleware('auth');
Route::resource('user', App\Http\Controllers\UserController::class)->middleware('auth');
Route::resource('category', App\Http\Controllers\CategoryController::class)->middleware('auth');
Route::resource('recap', App\Http\Controllers\RecapController::class)->middleware('auth');
Route::resource('booking', App\Http\Controllers\BookingController::class)->middleware('auth');
Route::resource('payment', App\Http\Controllers\PaymentController::class)->middleware('auth');
