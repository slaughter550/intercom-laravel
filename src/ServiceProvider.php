<?php

namespace Shadow\IntercomLaravel;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider
{
    public function register()
    {
        $this->app->bind('intercom', function () {
            $token = Config::get('services.intercom.token');

            return new IntercomLaravel($token);
        });
    }
}
