<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::resource('dashboard', DashboardController::class);
