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

Route::group(['prefix' => ''], function(){

    Route::get('/product','ProductController@index')->name('products.index');
    Route::get('/','ProductController@index')->name('store.index');

});

Route::group(['prefix' => '',  'middleware' => 'auth'], function(){



});










Route::get('product/{id}','ProductController@show');

Auth::routes();
Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function(){


    Route::get('product/create','ProductController@create');
    Route::get('showadmin','ProductController@showAdmin')->name('admin.showadmin');
    Route::post('product','ProductController@store')->name('products.store');
    Route::delete('product/{id}','ProductController@destroy');
    Route::get('product/{id}/edit','ProductController@edit');
    Route::put('product/{id}','ProductController@update');
    Route::get('adminPage','ProductController@adminPage');
});








Route::get('add-to-cart/{id}', 'ProductController@addToCart');
//To Test
Route::post('add-to-cart/{id}', 'ProductController@addToCart2');

Route::post('delete-from-cart/{id}', 'checKoutController@deleteFromCart')->name('products.deleteFromCart');
Route::get('valider','ProductController@valider');
Route::get('/checkout','checKoutController@index')->name('cart.checkout');
Route::post('charge-payment','checKoutController@chargepayment')->name('charge.payment');
Route::get('/cart/incrementer/{id}','checKoutController@incrementer')->name('cart.incrementer');
Route::get('/cart/decrementer/{id}','checKoutController@decrementer')->name('cart.decrementer');
Route::post('/search','ProductController@search');

Route::get('/home', 'HomeController@index')->name('home');


