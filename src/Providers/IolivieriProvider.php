<?php

namespace Iolivieri\Iopackage\Providers;

use Illuminate\Support\ServiceProvider;

class IolivieriProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //register route
         $this->loadRoutesFrom(__DIR__.'/../routes/routes.php');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}