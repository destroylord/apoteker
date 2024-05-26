<?php

use App\Http\Controllers\Admin\ApotekerController;
use App\Http\Controllers\DrugController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', fn() => view('admin.dashboard'))->name('dashboard');

// Tambah Akun Apoteker
Route::get('/apoteker', [ApotekerController::class, 'index']);
Route::get('/apoteker/create', [ApotekerController::class, 'create'])->name('apoteker.create');
Route::post('/apoteker', [ApotekerController::class, 'store'])->name('apoteker.store');