<?php

use Illuminate\Support\Facades\Route;
use Steven1303\AdminPanel\Controllers\Components\Admin;
use Steven1303\AdminPanel\Controllers\Components\Dashboard;

Route::get('dashboard', Dashboard::class)->name('steven.dashboard');
Route::get('admin', Admin::class)->name('steven.admin');
