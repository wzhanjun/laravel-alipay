<?php

namespace Wzhanjun\LaravelAlipay\Facades;

use Illuminate\Support\Facades\Facade;

class Alipay extends Facade
{

    public static function getFacadeAccessor()
    {
        return \Wzhanjun\Alipay\Alipay::class;
    }

}