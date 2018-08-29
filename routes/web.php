<?php

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

Route::get('/', [
    'uses' => 'HomeController@getIndex',
    'as' => 'home'
]);

Route::get('/cart', [
    'uses' => 'HomeController@getCart',
    'as' => 'cart'
]);

Route::get('/checkout', [
    'uses' => 'HomeController@getCheckout',
    'as' => 'checkout'
]);

Route::get('/beers', [
    'uses' => 'HomeController@getBeers',
    'as' => 'beers'
]);

Route::get('/wines', [
    'uses' => 'HomeController@getWines',
    'as' => 'wines'
]);

Route::get('/spirits', [
    'uses' => 'HomeController@getSpirits',
    'as' => 'spirits'
]);

Route::get('/beers', [
    'uses' => 'HomeController@getBeers',
    'as' => 'beers'
]);

Route::get('/product', [
    'uses' => 'HomeController@getProduct',
    'as' => 'product'
]);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
