<?php

namespace Steven1303\AdminPanel;

use Livewire\Livewire;
use Illuminate\Support\ServiceProvider;
use Steven1303\AdminPanel\Controllers\Components\Dashboard;
use Steven1303\AdminPanel\Controllers\Layouts\App;
use Steven1303\AdminPanel\Controllers\Layouts\Auth;
use Steven1303\AdminPanel\Controllers\Layouts\Base;

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
        $this->loadViewsFrom(__DIR__.'/views','admin-panel');
        $this->loadViewComponentsAs('admin-panel', [
            App::class,
            Auth::class,
            Base::class
          ]);
        
        Livewire::component('dashboard', Dashboard::class);
    }
}