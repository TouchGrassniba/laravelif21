<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return"Welcome About";
});

Route::get('profile', function () {
    return view('profile');
});
