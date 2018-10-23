<?php

namespace Hasan\LaravelFqdnValidator;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class ValidatorServiceProvider extends ServiceProvider
{
    /**
     * Boot the provider.
     */
    public function boot()
    {
        Validator::extend('fqdn', function ($attribute, $value, $parameters, $validator) {
            
            /** @var \Illuminate\Validation\Validator $validator */
            $validator->setCustomMessages(['fqdn' => 'The :attribute must be fqdn.']);
           
            return preg_match('/^(?!:\/\/)(?=.{1,255}$)((.{1,63}\.){1,127}(?![0-9]*$)[a-z0-9-]+\.?)$/i', $value);
        });
    }

    /**
     * Register the provider.
     */
    public function register()
    {
        //
    }

}
