<?php

namespace Wzhanjun\LaravelAlipay;

use Wzhanjun\Alipay\Alipay;
use Illuminate\Support\ServiceProvider;


class AlipayServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->mergeConfigFrom(dirname(__DIR__).'/config/payers.php', 'payers');

        $this->app->singleton(Alipay::class, function() {
            return new Alipay(config('payers.alipay'));
        });
    }

}