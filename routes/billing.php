<?php

use Illuminate\Support\Facades\Route;
Route::get('/billing', function () {
    return view('billing');
})->name('billing');