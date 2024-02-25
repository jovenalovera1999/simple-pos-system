<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function() {
    return view('dashboard.dashboard');
});

Route::get('/products', function () {
    return view('product.index');
});

Route::get('/product/add', function() {
    return view('product.create');
});

Route::get('/payment/transactions', function () {
    return view('payment.index');
});

Route::get('/payment/transaction/new', function() {
    return view('payment.create');
});

Route::get('/payment/methods', function() {
    return view('payment_method.index');
});

Route::get('/payment/method/add', function() {
    return view('payment_method.create');
});

