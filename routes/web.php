<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AdminController::class, 'index'])->name('dashboard');
Route::get('/artikel/{id}', [AdminController::class, 'show'])->name('artikel.show');
