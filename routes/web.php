<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


Route::controller(LoginController::class)->group(function () {
    Route::get('halamanLogin', 'index');
    Route::post('login', 'fungsiLogin');
    Route::get('halamanDaftar', 'halamanDaftar');
    Route::post('daftar', 'fungsiDaftar');
});

Route::get('dashboard', [DashboardController::class, 'index']);
Route::resource('absensi', AbsensiController::class);