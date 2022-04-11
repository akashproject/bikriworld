<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use View;

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
        Paginator::useBootstrap();
 
        View::composer('*', function($view)
        {
            $navbars = array(
                '/' => 'HOME',
                '/selling-categories' => 'SELL',
                'contact' => "CONTACT"
            );
            $view->with('navbars', $navbars);
        });
    }
}
