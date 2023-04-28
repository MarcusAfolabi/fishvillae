<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Validator::extend('valid_email', function ($attribute, $value, $parameters, $validator) {
            $emailDomain = explode('@', $value)[1];
            
            // Check if the email domain is in a list of known scammer domains
            $scammerDomains = ['example.com', 'fakeemail.com'];
            if (in_array($emailDomain, $scammerDomains)) {
                return false;
            }
            
            // Check if the email domain has a valid MX record
            if (!checkdnsrr($emailDomain, 'MX')) {
                return false;
            }
            
            return true;
        });
    }
}
