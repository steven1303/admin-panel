<?php

namespace Steven1303\AdminPanel;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    

    public function register()
    {
        
    }
    
    public function boot()
    {
        $this->publishes([
            __DIR__.'/resource' => public_path('assets'),
        ], 'admin-steven');

        $this->loadRoutesFrom(__DIR__.'/routes/admin.php');
        $this->loadViewsFrom(__DIR__.'/views','admin');
         
    }
}