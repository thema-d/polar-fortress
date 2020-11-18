<?php

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

Route::get('/', function () {
    return view('product.list');
});

Route::get('single-product', function() {
    return view('product.single');
});

Route::get('checkout', function () {
    return view('product.checkout');
});

Route::get('my-cart', function() {
    return view('product.cart');
});
