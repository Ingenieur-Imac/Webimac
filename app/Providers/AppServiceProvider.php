<?php

namespace Imac\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $jsontimer = public_path().'/json/timer.json';
        $json = json_decode(file_get_contents($jsontimer),TRUE);
        View::share("displayjpo",$json["timer"]["display"]);
        View::share("datejpo",$json["timer"]["date"]);
    }


    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
