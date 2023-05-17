<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WaliController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', [DashboardController::class, 'index']);
Route::get('home', [WaliController::class, 'index']);
Route::get('absen', [WaliController::class, 'absenView']);
Route::resource('absensi', AbsensiController::class);
