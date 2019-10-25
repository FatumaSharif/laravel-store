<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('landingpage', 'LandingPageController@index')->name('landingpage.index');
Route::get('shop', 'ShopController@index')->name('shop.index');
Route::get('shop/{slug}', 'ShopController@show')->name('shop.show');
Route::get('cart', 'CartController@index')->name('cart.index');
