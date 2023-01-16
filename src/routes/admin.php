<?php

use Illuminate\Support\Facades\Route;
use Steven1303\AdminPanel\Controllers\Components\Admin;
use Steven1303\AdminPanel\Controllers\Components\Dashboard;

Route::get('dashboard', Dashboard::class);
Route::get('admin', Admin::class);

// Route::livewire('/home', 'counter');