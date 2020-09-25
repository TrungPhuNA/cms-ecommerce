<?php
namespace Frontend\Estate;

use Illuminate\Support\ServiceProvider;

class EstateServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/Resources/views', 'estate');
    }
}
