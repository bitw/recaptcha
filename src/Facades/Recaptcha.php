<?php

namespace Bitw\Recaptcha\Facades;

use Illuminate\Support\Facades\Facade;

class Recaptcha extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'recaptcha';
    }
}