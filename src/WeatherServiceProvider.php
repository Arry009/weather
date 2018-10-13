<?php
/**
 * Created by PhpStorm.
 * User: King
 * Date: 2018/10/13
 * Time: 15:37
 * Email: jackying009@gmail.com
 * Copyright (c) Guangzhou Zhishen Data Service co,. Ltd
 */

namespace Overtrue\Weather;


use Illuminate\Support\ServiceProvider;

class WeatherServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton(Weather::class,function(){
           return new Weather(config('services.weather.key'));
        });

        $this->app->alias(Weather::class,'weather');
    }

    public function provides()
    {
        return [Weather::class,'weather'];
    }
}