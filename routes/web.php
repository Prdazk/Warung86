<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| ADMIN ROUTES (Preview Tanpa Login)
|--------------------------------------------------------------------------
*/

// Halaman login admin (tetap ada, tapi tidak dipaksa)
Route::get('/admin/login', function () {
    return view('admin/login');
})->name('admin.login');

// Proses login admin (bisa dilewati sementara untuk preview)
Route::post('/admin/login', function(Request $request){
    $credentials = $request->only('email', 'password');

    // Simulasi login
    if($credentials['email'] === 'admin@example.com' && $credentials['password'] === 'password123'){
        session(['admin_logged_in' => true]);
        return redirect()->route('admin.beranda')->with('success', 'Login berhasil!');
    }

    return redirect()->route('admin.login')->with('error', 'Email atau password salah!');
})->name('admin.login.submit');

// Halaman dashboard admin (menu + reservasi)
// **Sementara preview tanpa login**
Route::get('/admin/dashboard', function () {
    // Jika mau pakai login, uncomment ini:
    // if(!session('admin_logged_in')) {
    //     return redirect()->route('admin.login')->with('error','Anda harus login terlebih dahulu!');
    // }
    return view('admin/dashboard'); // view berisi menu & reservasi
})->name('admin.beranda');

// Halaman tambah menu admin (bisa dilewati untuk preview)
Route::get('/admin/tambah_menu', function () {
    // Sementara, kita tidak paksa login:
    return view('admin/tambah_menu');
})->name('admin.tambah.menu');

// Menyimpan menu baru (untuk preview, tidak akan benar-benar menyimpan)
Route::post('/admin/menu/store', function (Request $request) {
    // Sementara tidak paksa login:
    $data = $request->all();
    return redirect()->route('admin.beranda')->with('success', 'Menu berhasil ditambahkan! (Preview)');
})->name('admin.menu.store');

// Halaman daftar reservasi (preview)
Route::get('/admin/reservasi', function () {
    // Sementara tidak paksa login:
    return view('admin/reservasi'); // view reservasi contoh
})->name('admin.reservasi');

// Logout admin
Route::get('/admin/logout', function() {
    session()->forget('admin_logged_in');
    return redirect()->route('admin.login')->with('success','Anda berhasil logout');
})->name('admin.logout');
