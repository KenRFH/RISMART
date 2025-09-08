<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\C_Home;
use App\Http\Controllers\VRPageController;

Route::get('/', function () {
    return view('home.home');
});

Route::get('/VR', [C_Home::class, 'VR'])->name('showVR');
Route::get('vr_page/{judul}', [VRPageController::class, 'show'])->name('show');

// Admin
Route::get('admin/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('admin/login', [AuthController::class, 'login'])->name('login.attempt');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::prefix('vr_page')->name('vr_page.')->group(function(){
        // membuka halaman buat artikel baru
        Route::get('/create', [VRPageController::class, 'create'])->name('create');
        // menyimpan artikel baru
        Route::post('/', [VRPageController::class, 'store'])->name('store');
        // membuka halaman mengubah artikel
        Route::get('/{id}/edit', [VRPageController::class, 'edit'])->name('edit');
        // mengupdate artikel
        Route::put('/{id}', [VRPageController::class, 'update'])->name('update');
        // menghapus artikel (soft del)
        Route::delete('/{id}', [VRPageController::class, 'destroy'])->name('destroy');
        // mengembalikan artikel yang dihapus
        Route::put('/{id}/restore', [VRPageController::class, 'restore'])->name('restore');
    });
});
