<?php

namespace XLaravel\ValidationColorExtend\Rules;

use Illuminate\Contracts\Validation\Rule;

class ColorRule implements Rule
{
    public function passes($attribute, $value): bool
    {
        $pattern = '/^(#(?:[0-9a-f]{2}){2,4}|#[0-9a-f]{3}|(?:rgba?|hsla?)\((?:\d+%?(?:deg|rad|grad|turn)?(?:,|\s)+){2,3}[\s\/]*[\d\.]+%?\))$/i';

        return preg_match($pattern, $value);
    }

    public function message(): string
    {
        return trans('X-Laravel::validationColorExtend.error');
    }
}
