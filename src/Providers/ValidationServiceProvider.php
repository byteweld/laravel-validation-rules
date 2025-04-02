<?php

namespace Byteweld\ValidationRules\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use Byteweld\ValidationRules\Rules\PhoneNumber;
use Byteweld\ValidationRules\Rules\InternationalPhoneNumber;

class ValidationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Validator::extend('phone_number', function ($attribute, $value, $parameters, $validator) {
            return (new PhoneNumber($parameters[0] ?? ''))->passes($attribute, $value);
        });

        Validator::extend('international_phone_number', function ($attribute, $value, $parameters, $validator) {
            return (new InternationalPhoneNumber($parameters[0] ?? ''))->passes($attribute, $value);
        });
    }

    public function register()
    {
        //
    }
}
