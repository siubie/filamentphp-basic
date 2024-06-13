<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\LandingPageController::class, 'index'])->name('landing-page');

Route::resource('guest-book', 'App\Http\Controllers\GuestBookController')
    ->only(['index', 'create', 'store']);
