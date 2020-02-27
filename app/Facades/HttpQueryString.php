<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class HttpQueryString extends Facade
{

    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \App\Libraries\HttpQueryString::class;
    }
}
