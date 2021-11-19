<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Libraries\CategoryComposer;
use App\Libraries\ProductHotComposer;
use App\Libraries\CartComposer;

class ViewShareServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            'home.*',
            CategoryComposer::class
        );
        View::composer(
            'home.*',
            ProductHotComposer::class
        );
        View::composer(
            'home.*',
            CartComposer::class
        );
    }
}
