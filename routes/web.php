<?php

use Illuminate\Support\Facades\Route;

// Route untuk halaman beranda (single-page)
Route::get('/', function () {
    return view('user/dashboard'); // Semua section di sini
})->name('dashboard');
