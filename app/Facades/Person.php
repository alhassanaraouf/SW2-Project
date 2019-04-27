<?php

namespace App\Facades;

class Person extends \Illuminate\Support\Facades\Facade
{
    public static function getFacadeAccessor()
    {
        return 'name';
    }
}