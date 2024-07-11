<?php

namespace App\Providers;

use Illuminate\Support\Facades\Context;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        DB ::listen(function($event){
            Context::push('queries',[$event->sql]);
        });    }
}
