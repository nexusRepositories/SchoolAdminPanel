<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

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
        view()->composer([
            'partials.header',
            'pages.settings'
        ], function($view) {
            if(Auth::user()) {
                $user = Auth::user();
                $view->with(compact('user'));
            }
        });
    }
}
