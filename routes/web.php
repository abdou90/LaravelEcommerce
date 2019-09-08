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

Route::get('valider','ProductController@valider');
Route::get('/checkout','checKoutController@index')->name('cart.checkout');
Route::post('charge-payment','checKoutController@chargepayment')->name('charge.payment');






Route::group(['prefix' => ''], function(){

    //APPLICATION

    Route::get('/','IndexController@index')->name('store.index');

    //Products
    Route::get('/product','ProductController@index')->name('products.index');
    Route::post('/search','ProductController@search')->name('posts.search');
    Route::get('product/{id}','ProductController@show');

    //Categories
    Route::get('category/{id}','CategoryController@show')->name('categories.show');

    //CART

    Route::get('add-to-cart/{id}', 'ProductController@addToCart');
    //To Test
    Route::post('add-to-cart/{id}', 'ProductController@addToCart2');

    Route::post('delete-from-cart/{id}', 'checKoutController@deleteFromCart')->name('products.deleteFromCart');

    
    Route::get('/cart/incrementer/{id}','checKoutController@incrementer')->name('cart.incrementer');
    Route::get('/cart/decrementer/{id}','checKoutController@decrementer')->name('cart.decrementer');


});

Route::group(['prefix' => '',  'middleware' => 'auth'], function(){

    Route::get('/home', 'HomeController@index')->name('home');

});




Auth::routes();

Route::group(['prefix' => 'dashboard',  'middleware' => 'auth'], function(){


    //CATEGORIES
    Route::get('categories/add','CategoryDashboardController@add')->name('dashboard.categories.add');
    Route::post('categories/store','CategoryDashboardController@store')->name('dashboard.categories.store');
    Route::get('categories','CategoryDashboardController@index')->name('dashboard.categories.index');
    Route::get('categories/{category}','CategoryDashboardController@show')->name('dashboard.categories.show');
    Route::get('categories/{category}/edit','CategoryDashboardController@edit')->name('dashboard.categories.edit');
    Route::post('categories/{category}/update','CategoryDashboardController@update')->name('dashboard.categories.udpate');
    Route::post('categories/{category}/delete','CategoryDashboardController@delete')->name('dashboard.categories.delete');

    //PRODUCTS

    Route::get('products/add','DashboardProductController@add')->name('dashboard.products.add');
    Route::post('products/store','DashboardProductController@store')->name('dashboard.products.store');
    Route::get('products','DashboardProductController@index')->name('dashboard.products.index');
    Route::get('products/{product}','DashboardProductController@show')->name('dashboard.products.show');
    Route::get('products/{product}/edit','DashboardProductController@edit')->name('dashboard.products.edit');
    Route::post('products/{product}/update','DashboardProductController@update')->name('dashboard.products.udpate');
    Route::post('products/{product}/delete','DashboardProductController@delete')->name('dashboard.products.delete');


});


Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function(){

    //Products
    Route::get('product/create','ProductController@create')->name('products.create');
    Route::post('product','ProductController@store')->name('products.store');
    Route::delete('product/{id}','ProductController@destroy')->name('products.destroy');
    Route::get('product/{id}/edit','ProductController@edit')->name('products.edit');
    Route::put('product/{id}','ProductController@update')->name('products.update');

    //Categories
    Route::get('showadmin','ProductController@showAdmin')->name('admin.showadmin');
    
    Route::get('adminPage','ProductController@adminPage');
});














