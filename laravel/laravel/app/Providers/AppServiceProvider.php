<?php

namespace App\Providers;

//use App\my_folder\myClass;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
//use App\Http\ViewComposers;
//use App\Http\ViewComposers\LayoutComposer;
//use App\Http\ViewComposers\NavigationComposer;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //fix for b key legth issue
        Schema::defaultStringLength(191);

       // $my_object = new myClass;

        //Composer
        View::composer('layouts/basic', function ($view) {
        //
        $navigation = view('navigation');
        //add the navigation into the view
        $view->navigation=$navigation;
    });

        View::creator('layouts/basic', function ($view) {
            //

            $view->displayed_page='home';
        });

        View::creator('layouts/basic', function ($view)
        {
           $view->displayed_page='home';
        });

        //
        View::composer('layout/main', App\Http\ViewComposers\LayoutComposer::class);
        //everytime the view 'layout/main' is being rendered, the method compose of class namespace
        // App\Http\ViewComposers\LayoutComposer will be called
        //As an argument it will be given the View object

    $layout = view('layouts/basic');//creator is called, $layout->displayed_page =='home'
        $layout->displayes_page='detail'; //
    echo $layout; //composer is called and the layout is then rendered

        View::composer(
            'navigation', App\Http\ViewComposers\NavigationComposer::class);
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
