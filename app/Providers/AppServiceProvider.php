<?php

namespace App\Providers;

use App\Models\About;
use App\Models\Announ;
use App\Models\Info;
use App\Models\Product;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\PostRepositoryInterface;
use App\Repositories\PostRepository;

use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PostRepositoryInterface::class, PostRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.simplePage', function($view){

            $info=Info::first();
            $about=About::first();
            $announ=Announ::latest()->get();

            $products=Product::whereStatus(1)->get();

            $view->with(compact('info','announ','about','products'));
        });

        view()->composer('welcome', function($view){
            $info=Info::first();
            $view->with(compact('info'));
        });



        Paginator::useBootstrap();
    }
}
