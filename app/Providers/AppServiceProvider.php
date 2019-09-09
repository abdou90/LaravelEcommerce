<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use Session;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categories = Category::all();

        $shoping_cart = [];

        $shoping_cart['products'] = [];
        $shoping_cart['total'] = 0;

        Session::put('shopping_cart', $shoping_cart);

        view()->share('categories', $categories );

    }
}
