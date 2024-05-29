<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('template');
});

Route::resource('guest-book', 'App\Http\Controllers\GuestBookController')
    ->only(['index', 'create', 'store']);
