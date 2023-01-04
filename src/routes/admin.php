<?php

use Illuminate\Support\Facades\Route;

Route::get('admin', function() {
    return view('admin::layout');
});

Route::livewire('/home', 'counter');