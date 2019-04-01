<?php

namespace Rockbuzz\LaraHttps;

use Illuminate\Support\ServiceProvider as SupportServiceProvider;

class ServiceProvider extends SupportServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/https.php' => config_path('https.php')
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/https.php', 'https');
    }
}
