<?php

namespace iksaku\Blade\OpenGraph;

use Illuminate\Support\ServiceProvider;

class BladeOpenGraphServiceProvider extends ServiceProvider
{
    /*
     * Bootstrap OpenGraph services.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'og');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/views' => resources_path('views/vendor/og')
            ], 'opengraph-components');
        }
    }
}