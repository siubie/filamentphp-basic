<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('guest-books', 'App\Http\Controllers\GuestBookController')
    ->only(['index', 'create', 'store']);
