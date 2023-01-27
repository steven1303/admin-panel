<?php

namespace Steven1303\AdminPanel;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    

    public function register()
    {
        // Config Merging Standard
        $this->mergeConfigFrom(__DIR__.'/config/config.php', 'admin-panel');
    }
    
    public function boot()
    {
        // Assets
        $this->publishes([
            __DIR__.'/resource' => public_path('assets'),
        ], 'admin-steven');

        // Migration
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        
        // Route
        $this->loadRoutesFrom(__DIR__.'/routes/admin.php');

        // View
        $this->loadViewsFrom(__DIR__.'/views','admin');
    }
}