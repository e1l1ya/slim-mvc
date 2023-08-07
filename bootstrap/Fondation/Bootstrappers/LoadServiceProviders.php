<?php

namespace Boot\Fondation\Bootstrappers;

use App\Providers\ServiceProvider;

class LoadServiceProviders extends Bootstrapper
{
    public function boot()
    {
        ServiceProvider::setup($this->app, config('app.providers'));
    }
}