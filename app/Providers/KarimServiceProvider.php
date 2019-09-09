<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class KarimServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        require_once app_path() . '/Helpers/Karim/Image.php';
        require_once app_path() . '/Helpers/Karim/Checkout.php';
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
