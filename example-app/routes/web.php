<?php

use App\Http\Controllers\FakultasController;
use App\Http\Controllers\ProdiController;
use App\Models\Fakultas;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return "About";
});

Route::get('Profile', function () {
    return view('profile');
});

Route::resource('fakultas', FakultasController::class);
Route::resource('prodi', ProdiController::class);