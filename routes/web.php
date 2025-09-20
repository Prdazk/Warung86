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

    // Halaman reservasi
    Route::get('reservasi', function() {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $reservasi = Reservasi::latest()->get();
        return view('admin.reservasi', compact('reservasi'));
    })->name('admin.reservasi');

    // Hapus reservasi
    Route::delete('reservasi/{id}', function($id){
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $r = Reservasi::findOrFail($id);
        $r->delete();
        return back()->with('success', 'Reservasi berhasil dihapus');
    })->name('admin.reservasi.hapus');

    // Logout admin
    Route::get('logout', function() {
        session()->forget('admin_logged_in');
        session()->forget('admin_id');
        return redirect()->route('admin.login');
    })->name('admin.logout');

});