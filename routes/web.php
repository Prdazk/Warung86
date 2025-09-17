<?php

use Illuminate\Support\Facades\Route;

// Route untuk halaman beranda (single-page)
Route::get('/', function () {
    return view('admin/beranda'); // Semua section di sini
})->name('dashboard');
