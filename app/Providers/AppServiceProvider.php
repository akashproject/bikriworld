<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Categories;
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
            // Header Menu
            $navbars = array(
                '/' => 'HOME',
                '/selling-categories' => 'SELL',
                'contact' => "CONTACT"
            );
            $view->with('navbars', $navbars);

            // Category Menu
            $footerCategories = Categories::all();
            $view->with('footerCategories', $footerCategories);


            //info Menu
            $moreinfo = array(
                '/about' => 'About Us',
                '/privacy-policy' => 'Privacy Policy',
                '/term-conditions' => "Terms & Conditions",
                '/contact-us' => "Contact Us",

            );
            $view->with('moreinfo', $moreinfo);
        });


    }
}
