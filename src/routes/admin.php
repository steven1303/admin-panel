<?php

use Illuminate\Support\Facades\Route;
use Steven1303\AdminPanel\Controllers\Components\Dashboard;

Route::get('admin', Dashboard::class);

// Route::livewire('/home', 'counter');