<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [\App\Http\Controllers\LandingPageController::class, 'index'])->name('landing-page');

// Route::resource('guest-book', [\App\Http\Controllers\GuestBookController::class])
//     ->only(['index', 'create', 'store']);
