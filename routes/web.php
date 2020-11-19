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

Route::group(['namespace' => '\App\Http\Controllers' ], function () {
    Route::get('/', 'ProductController@index')->name('product.index');

    Route::get('/product/{product}', 'ProductController@show')->name('product.show');

    Route::get('checkout', function () {
        return view('product.checkout');
    })->name('checkout');
});
