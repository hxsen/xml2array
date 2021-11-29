<?php

namespace Hxsen\Xml2Array;

use Illuminate\Support\ServiceProvider;

class Xml2ArrayServiceProvider extends ServiceProvider
{
    /**
     * 启动服务
     *
     * @return void
     */
    public function boot()
    {

    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // 注册服务
        $this->app->singleton('xmlTransform', XmlTransform::class);
    }
}
