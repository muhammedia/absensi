<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', [DashboardController::class, 'index']);
Route::resource('absensi', AbsensiController::class);
