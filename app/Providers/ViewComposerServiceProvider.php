<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{

    public function boot()
    {
        // App ViewComposers
        view::composer('*', \App\Http\Viewcomposers\LocaleViewComposer::class);
        view::composer('*', \App\Http\Viewcomposers\LocalizationViewComposer::class);
        view::composer('*', \App\Http\Viewcomposers\NameSpaceViewComposer::class);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }
}
