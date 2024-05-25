<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [\App\Http\Controllers\Apoteker\DashboardController::class, 'index'])->name('dashboard');