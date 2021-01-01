<?php

namespace TeamBravo\WebSitepkg;

use Illuminate\Support\ServiceProvider;

class WebSiteServiceProvider extends ServiceProvider{

    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views',"WebSitepkg");



        //*******************************************************************************************
        $this->publishes([__DIR__.'/assets'=>public_path('websitepackage')],'assets');
        //php artisan vendor:publish --provider="TeamBravo\WebSitepkg\WebSiteServiceProvider" --tag="assets"
        //<script src="{{asset('websitepackage/js/custom.js')}}"></script> we will use "websitepackage"**
        //********************************************************************************************
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');


    }

    public function register(){

    }


}
