<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\C_Home;

Route::get('/', function () {
    return view('home.home');
});

 Route::get('/VR', [C_Home::class, 'VR'])->name('showVR');
