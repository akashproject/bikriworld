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

            $serviceLocation = array(
                'Howrah','Kolkata','Bihar'
            );
            $view->with('serviceLocation', $serviceLocation);
            // Header Menu
            $navbars = array(
                '/selling-categories' => 'SELL',
                '/contact-us' => "CONTACT"
            );
            $view->with('navbars', $navbars);

            // Category Menu
            $footerCategories = Categories::where('status', '1')->orderBy('name', 'asc')->get();;
            $view->with('footerCategories', $footerCategories);


            //info Menu
            $moreinfo = array(
                '/about-us' => 'About Us',
                '/privacy-policy' => 'Privacy Policy',
                '/terms-conditions' => "Terms & Conditions",
                '/contact-us' => "Contact Us",

            );
            $view->with('moreinfo', $moreinfo);
        });


    }
}
