<?php

namespace Byteweld\ValidationRules\Rules\PhoneValidation;

use Illuminate\Contracts\Validation\Rule;

class PhoneNumber implements Rule
{
    protected $country;

    public function __construct($country)
    {
        $this->country = strtolower($country);
    }

    public function passes($attribute, $value)
    {
        if ($this->country === 'india') {
            return preg_match('/^[6789]\d{9}$/', $value);
        }
        return false;
    }

    public function message()
    {
        return __('validation.phone_number_invalid', ['country' => ucfirst($this->country)]);
    }
}
