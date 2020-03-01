<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

//edited by me, using schema
use Illuminate\Support\Facades\Schema;
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
        //also edited by me
        Schema::defaultStringLength(191);
    }
}
