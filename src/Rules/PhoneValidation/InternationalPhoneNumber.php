<?php

namespace Byteweld\ValidationRules\Rules\PhoneValidation;

use Illuminate\Contracts\Validation\Rule;

class InternationalPhoneNumber implements Rule
{
    protected $country;

    public function __construct($country)
    {
        $this->country = strtolower($country);
    }

    public function passes($attribute, $value)
    {
        if ($this->country === 'india') {
            return preg_match('/^\+91[6789]\d{9}$/', $value);
        }
        return false;
    }

    public function message()
    {
        return __('validation.international_phone_number_invalid', ['country' => ucfirst($this->country)]);
    }
}
