<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;



Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/create', [DashboardController::class, 'create'])->name('dashboard.create');
Route::post('/dashboard/store', [DashboardController::class, 'store'])->name('dashboard.store');
Route::get('/dashboard/{item}/edit', [DashboardController::class, 'edit'])->name('dashboard.edit');
Route::put('/dashboard/{item}', [DashboardController::class, 'update'])->name('dashboard.update');
Route::delete('/dashboard/{item}', [DashboardController::class, 'destroy'])->name('dashboard.destroy');
