<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminReservasiController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\UserReservasiController;
use App\Http\Controllers\UserMenuController;
use App\Http\Controllers\UserDashboardController; // <- Tambahkan ini
use Illuminate\Support\Facades\Route;

// ====================== DEFAULT ======================
Route::redirect('/', '/user/dashboard');

// ====================== USER ======================
Route::prefix('user')->group(function () {
    Route::get('dashboard', [UserMenuController::class, 'popular'])->name('user.dashboard');
    Route::post('reservasi', [UserReservasiController::class, 'store'])->name('user.reservasi.store');
});

// ====================== USER MENU POPULER ======================
// Jika ingin akses menu populer terpisah
Route::get('/menu-populer', [UserMenuController::class, 'popular'])->name('menu.populer');

// ====================== ADMIN ======================
Route::prefix('admin')->group(function () {

    // LOGIN
    Route::get('login', [AdminController::class, 'showLogin'])->name('admin.login');
    Route::post('login', [AdminController::class, 'login'])->name('admin.login.post');
    Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');

    // LOGIN GOOGLE
    Route::get('login/google', [GoogleController::class, 'redirectToGoogle'])->name('admin.login.google');
    Route::get('login/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('admin.login.google.callback');

    // BERANDA
    Route::get('beranda', function() {
        return session('admin_logged_in') 
            ? view('admin.beranda', [
                'reservasi'=>\App\Models\Reservasi::latest()->get(),
                'menu'=>\App\Models\Menu::latest()->get()
            ])
            : redirect()->route('admin.login');
    })->name('admin.beranda');

    // RESERVASI
    Route::get('reservasi', [AdminReservasiController::class, 'index'])->name('admin.reservasi');
    Route::get('reservasi/data', [AdminReservasiController::class, 'data'])->name('admin.reservasi.data');
    Route::delete('reservasi/{id}', [AdminReservasiController::class, 'destroy'])->name('admin.reservasi.hapus');

    // MENU ADMIN
    Route::prefix('menu')->group(function () {
        Route::get('/', [MenuController::class, 'index'])->name('admin.menu.index');
        Route::get('/tambah', [MenuController::class, 'create'])->name('admin.menu.tambah');
        Route::post('/tambah', [MenuController::class, 'store'])->name('admin.menu.store');
        Route::get('/edit/{menu}', [MenuController::class, 'edit'])->name('admin.menu.edit');
        Route::put('/edit/{menu}', [MenuController::class, 'update'])->name('admin.menu.update');
        Route::delete('/{menu}', [MenuController::class, 'destroy'])->name('admin.menu.hapus');
        Route::get('/edit_all', [MenuController::class, 'editAll'])->name('admin.menu.edit_all');
    });

});
