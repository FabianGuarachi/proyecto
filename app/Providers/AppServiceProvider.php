<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//Agregar esta linea...use Illuminate\Support\Facades\Schema;

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
        //Agregar esta linea...Schema::defaultStringLength(191);
    }
}
