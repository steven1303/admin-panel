<?php

use Illuminate\Support\Facades\Route;

Route::get('admin', function() {
    return view('admin::contents.dashboard');
});

// Route::livewire('/home', 'counter');