<?php

use Illuminate\Support\Facades\Route;
use Steven1303\AdminPanel\Controllers\Components\Admin;
use Steven1303\AdminPanel\Controllers\Components\Dashboard;

Route::get('dashboard', Dashboard::class)->name('dashboard');
Route::group(['middleware'=> ['web'], 'prefix' => 'admins'], function(){
    Route::get('/', Admin::class)->name('admin.index');
});


