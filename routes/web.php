<?php

use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\DrugController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [WelcomeController::class, 'index']);

Route::middleware('auth')->group(function () {

    // Users

    Route::get('/user/dashboard', [DashboardController::class, 'index'])->name('user.dashboard');

    Route::resource('obat', DrugController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
