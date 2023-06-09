<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WaliController;
use Illuminate\Support\Facades\Route;

Route::controller(LoginController::class)->group(function () {
    Route::get('masuk', 'index');
    Route::post('login', 'fungsiLogin');
    Route::get('register', 'halamanDaftar');
    Route::post('daftar', 'fungsiDaftar');
});
route::post('logout', [LoginController::class, 'fungsiLogout'])->middleware('auth');


Route::get('dashboard', [DashboardController::class, 'index']);
Route::get('home', [WaliController::class, 'index']);
Route::get('absen', [WaliController::class, 'absenView']);
Route::resource('absensi', AbsensiController::class);
