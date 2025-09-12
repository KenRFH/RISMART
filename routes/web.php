<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\C_Home;
use App\Http\Controllers\VRPageController;

Route::get('/', function () {
    return view('home.home');
});

// ---------- PUBLIC ----------
Route::get('/vr_page', [VRPageController::class, 'index'])->name('vr_page.public.index');
Route::get('/vr_page/{id}', [VRPageController::class, 'show'])->name('vr_page.public.show');

// ---------- ADMIN ----------
Route::get('admin/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('admin/login', [AuthController::class, 'login'])->name('login.attempt');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::prefix('admin/vr_page')->name('vr_page.')->group(function(){
        Route::get('/', [VRPageController::class, 'adminIndex'])->name('index'); // daftar untuk admin
        Route::get('/create', [VRPageController::class, 'create'])->name('create');
        Route::post('/', [VRPageController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [VRPageController::class, 'edit'])->name('edit');
        Route::put('/{id}', [VRPageController::class, 'update'])->name('update');
        Route::delete('/{id}', [VRPageController::class, 'destroy'])->name('destroy');
        Route::put('/{id}/restore', [VRPageController::class, 'restore'])->name('restore');
    });
});

