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

    //APPLICATION

    Route::get('/','IndexController@index')->name('store.index');

    Route::group(['prefix' => 'products'], function(){

    //Products
    Route::get('/','ProductController@index')->name('products.index');
    Route::post('/search','ProductController@search')->name('products.search');
    Route::get('/{id}','ProductController@show')->name('products.show');

    });

    Route::group(['prefix' => 'categories'], function(){

        //Categories
        Route::get('/{id}','CategoryController@show')->name('categories.show');

    });









    Route::get('add-to-cart/{id}', 'ProductController@addToCart');
    //To Test
    //Route::post('add-to-cart/{id}', 'ProductController@addToCart2');

    Route::post('delete-from-cart/{id}', 'checKoutController@deleteFromCart')->name('products.deleteFromCart');

    
    Route::get('/cart/incrementer/{id}','checKoutController@incrementer')->name('cart.incrementer');
    Route::get('/cart/decrementer/{id}','checKoutController@decrementer')->name('cart.decrementer');


});

Route::group(['prefix' => 'cart'], function(){

    //CART

    Route::post('/add/{product}', 'ShopingCartController@add')->name('shopingcart.add');
    Route::get('/show', 'ShopingCartController@show')->name('shopingcart.show');
    Route::post('/cancel-item/{product}', 'ShopingCartController@cancelItem')->name('shopingcart.cancelitem');
    Route::post('/add-items2items/{product}', 'ShopingCartController@plus')->name('shopingcart.plus');
    Route::post('/substract-items2items/{product}', 'ShopingCartController@minus')->name('shopingcart.minus');
    Route::post('/cancel-all', 'ShopingCartController@cancelAll')->name('shopingcart.cancelAll');
    Route::post('/validate', 'ShopingCartController@validateAll')->name('shopingcart.validate');
    Route::post('/checkout', 'ShopingCartController@checkout')->name('shopingcart.checkout');
    Route::get('/congrlations', 'ShopingCartController@congrlations')->name('shopingcart.congrlations');


});

Route::group(['prefix' => '',  'middleware' => 'auth'], function(){

    Route::get('/home', 'HomeController@index')->name('home');

});




Auth::routes();

Route::group(['prefix' => 'dashboard',  'middleware' => 'auth'], function(){


    Route::group(['prefix' => 'costumers'], function(){

        //COSTUMERS
   
        Route::get('/','ClientDashboardController@index')->name('dashboard.clients.index');
        Route::get('/{client}','ClientDashboardController@show')->name('dashboard.clients.show');
    
    });

    Route::group(['prefix' => 'commands'], function(){

        //COSTUMERS
   
        Route::get('/','CommandDashboardController@index')->name('dashboard.commands.index');
        Route::get('/{command}','CommandDashboardController@show')->name('dashboard.commands.show');

    
    });

    Route::group(['prefix' => 'categories'], function(){

        //CATEGORIES
        Route::get('/add','CategoryDashboardController@add')->name('dashboard.categories.add');
        Route::post('/store','CategoryDashboardController@store')->name('dashboard.categories.store');
        Route::get('/','CategoryDashboardController@index')->name('dashboard.categories.index');
        Route::get('/{category}','CategoryDashboardController@show')->name('dashboard.categories.show');
        Route::get('/{category}/edit','CategoryDashboardController@edit')->name('dashboard.categories.edit');
        Route::post('/{category}/update','CategoryDashboardController@update')->name('dashboard.categories.udpate');
        Route::post('/{category}/delete','CategoryDashboardController@delete')->name('dashboard.categories.delete');


    
    });

    Route::group(['prefix' => 'products'], function(){
    //PRODUCTS

    Route::post('/search','DashboardProductController@search')->name('dashboard.products.search');

    Route::get('/add','DashboardProductController@add')->name('dashboard.products.add');
    Route::post('/store','DashboardProductController@store')->name('dashboard.products.store');
    Route::get('','DashboardProductController@index')->name('dashboard.products.index');
    Route::get('/{product}','DashboardProductController@show')->name('dashboard.products.show');
    Route::get('/{product}/edit','DashboardProductController@edit')->name('dashboard.products.edit');
    Route::post('/{product}/update','DashboardProductController@update')->name('dashboard.products.udpate');
    Route::post('/{product}/delete','DashboardProductController@delete')->name('dashboard.products.delete');

    });




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


Route::get('valider','ProductController@valider');
Route::get('/checkout','checKoutController@index')->name('cart.checkout');
Route::post('charge-payment','checKoutController@chargepayment')->name('charge.payment');
















