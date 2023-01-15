<?php

namespace Steven1303\AdminPanel;

use Livewire\Livewire;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Steven1303\AdminPanel\Controllers\Layouts\App;
use Steven1303\AdminPanel\Controllers\Layouts\Auth;
use Steven1303\AdminPanel\Controllers\Layouts\Base;
use Steven1303\AdminPanel\Controllers\Components\Dashboard;

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
        Blade::componentNamespace('\\Steven1303\\AdminPanel\\Controllers\\Layouts', 'admin-panel');
        // $this->loadViewComponentsAs('admin', [
        //     App::class,
        //     Auth::class,
        //     Base::class
        //   ]);

        
        
        Livewire::component('dashboard', Dashboard::class);
    }
}