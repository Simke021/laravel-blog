<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// ispravlja error pri kreiranju tabela
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // ispravlja error pri kreiranju tabela
        Schema::defaultStringLength(191);;
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
