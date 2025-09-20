<?php

use Illuminate\Support\Facades\Route;

// Route untuk halaman user dashboard
Route::get('/', function () {
    return view('user/dashboard'); // Semua section di sini
})->name('dashboard');

// Route untuk halaman admin dashboard
Route::get('/admin/beranda', function () {
    return view('admin/beranda'); // Tampilan halaman admin
})->name('admin.beranda');
