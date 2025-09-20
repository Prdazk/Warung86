<?php

use App\Http\Controllers\Admin\ReservasiController;
use App\Http\Controllers\Admin\MenuController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Reservasi;
use Illuminate\Support\Facades\Hash;

// ====================== DEFAULT ======================
Route::redirect('/', '/user/dashboard');

// ====================== USER ======================
Route::prefix('user')->group(function () {

    // Dashboard user
    Route::view('dashboard', 'user.dashboard')->name('user.dashboard');

    // Submit reservasi
    Route::post('reservasi', function(Request $req){
        $data = $req->validate([
            'nama'         => 'required|string|max:255',
            'jumlah_orang' => 'required|integer|min:1',
            'pilihan_meja' => 'nullable|string|max:50',
            'tanggal'      => 'required|date',
            'jam'          => 'required',
        ]);

        Reservasi::create($data + ['status' => 'Menunggu']);

        return redirect()->route('user.dashboard')->with('success', 'Reservasi berhasil dikirim!');
    })->name('user.reservasi.store');
});

// ====================== ADMIN ======================
Route::prefix('admin')->group(function () {

    // Halaman login admin
    Route::view('login', 'admin.login')->name('admin.login');

    // Proses login admin
    Route::post('login', function(Request $req){
        $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $admin = Admin::where('email', $req->email)->first();

        if($admin && Hash::check($req->password, $admin->password)){
            session(['admin_logged_in' => true, 'admin_id' => $admin->id]);
            return redirect()->route('admin.beranda');
        }

        return back()->withErrors(['email' => 'Email atau password salah']);
    })->name('admin.login.post');

    // Halaman beranda admin
    Route::get('beranda', function() {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        $reservasi = Reservasi::latest()->get();
        return view('admin.beranda', compact('reservasi'));
    })->name('admin.beranda');

    // ====================== ADMIN FUNCTIONALITY ======================
    Route::middleware('admin_logged_in')->group(function() {

        // ====================== Reservasi ======================
        Route::get('reservasi', [ReservasiController::class, 'index'])->name('admin.reservasi.index');
        Route::delete('reservasi/{id}', [ReservasiController::class, 'destroy'])->name('admin.reservasi.hapus');
        Route::put('reservasi/{id}', [ReservasiController::class, 'update'])->name('admin.reservasi.edit');

        // ====================== Menu ======================
        Route::get('menu', [MenuController::class, 'index'])->name('admin.menu.index');
        Route::get('tambah-menu', [MenuController::class, 'create'])->name('admin.tambah.menu');
        Route::post('menu/store', [MenuController::class, 'store'])->name('admin.menu.store');
        Route::delete('menu/{id}', [MenuController::class, 'destroy'])->name('admin.menu.hapus');
    });

    // Logout admin
    Route::get('logout', function() {
        session()->forget('admin_logged_in');
        session()->forget('admin_id');
        return redirect()->route('admin.login');
    })->name('admin.logout');
});
