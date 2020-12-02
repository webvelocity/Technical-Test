<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\Property;
use Illuminate\Support\Facades\Schema;
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
        // Share to all Routes
        Schema::defaultStringLength(191);

        if (!$this->app->runningInConsole()) {

            /*Properties*/
            $properties = Property::latest()->get();
            view()->share('properties', $properties);


            /*Posts*/
            $posts = Post::latest()->get();
            view()->share('posts', $posts);

        }

    }
}
