<?php

use Illuminate\Support\ServiceProvider;
class StyleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/css' => base_path('resources/css'),
        ], 'public');
    }



}