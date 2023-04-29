<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AuthServiceProvider extends ServiceProvider
{
     
    protected $policies = [
        //
    ];
 
    public function boot(): void
    {
 
        Validator::extend('dns', function ($attribute, $value, $parameters, $validator) {
            [$user, $domain] = explode('@', $value);
            return checkdnsrr($domain, 'MX');
        });
    }
}
 