<?php

namespace Boolfalse\ClearCaches;

use Illuminate\Support\ServiceProvider;

class ClearCachesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'clearcaches'); // second param is package_name

        // publishing the view
        $this->publishes([
            __DIR__ . '/views' => resource_path('views/vendor/clearcaches'),
        ]);
    }

    public function register()
    {}
}