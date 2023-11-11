<?php

namespace XLaravel\ValidationColorExtend\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class ValidationColorExtendServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'X-Laravel');

        Validator::extend('color', 'XLaravel\ValidationColorExtend\Rules\ColorRule@passes');
    }
}
