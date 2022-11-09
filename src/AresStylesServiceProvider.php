<?php

namespace Ares\AresStyles;

use Illuminate\Support\ServiceProvider;

class AresStylesServiceProvider extends ServiceProvider
{

    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');    
        $this->loadViewsFrom(__DIR__.'/views', 'ares-styles');
    }

    public function register(){
        
    }

};