<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [\App\Http\Controllers\Apoteker\DashboardController::class, 'index'])->name('dashboard');
Route::delete('/apoteker/delete-account/{id}', [\App\Http\Controllers\Apoteker\DashboardController::class, 'destroy'])->name('apoteker.delete-account');