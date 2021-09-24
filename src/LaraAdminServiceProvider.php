<?php

namespace LaraAdmin;

use Illuminate\Support\ServiceProvider;

class LaraAdminServiceProvider extends ServiceProvider
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
        if ($this->app->runningInConsole()) {
            $this->commands([
                phpMyAdminCommand::class,
            ]);
        }
    }
}
