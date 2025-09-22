<?php

use App\Http\Controllers\Admin\ReservasiController;
use App\Http\Controllers\Admin\MenuController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Menu;
use App\Models\Reservasi;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Auth\GoogleController;


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
            'meja_id'      => 'nullable|exists:mejas,id',  // gunakan meja_id bukan pilihan_meja
            'tanggal'      => 'required|date',
            'jam'          => 'required',
            'catatan'      => 'nullable|string|max:500',   // catatan opsional
        ]);

        // Simpan reservasi
        Reservasi::create($data);

        return redirect()->route('user.dashboard')->with('success', 'Reservasi berhasil dikirim!');
    })->name('user.reservasi.store');
});
// ====================== ADMIN ======================
Route::prefix('admin')->group(function () {

  // ====================== LOGIN ======================

// Halaman login admin (form login biasa)
Route::view('login', 'admin.login')->name('admin.login');

// Proses login admin (menggunakan email dan password)
Route::post('login', function(Request $req){
    $req->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    $admin = Admin::where('email', $req->email)->first();

    if ($admin && Hash::check($req->password, $admin->password)) {
        session(['admin_logged_in' => true, 'admin_id' => $admin->id]);
        return redirect()->route('admin.beranda');
    }

    return back()->withErrors(['email' => 'Email atau password salah']);
})->name('admin.login.post');

// ====================== LOGIN GOOGLE ======================

// Route untuk login menggunakan Google
Route::get('login/google', [GoogleController::class, 'redirectToGoogle'])->name('admin.login.google');

// Callback setelah login dengan Google
Route::get('login/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('admin.login.google.callback');

    // ====================== BERANDA ======================
    Route::get('beranda', function() {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $reservasi = Reservasi::latest()->get();
        $menu = Menu::latest()->get();
        return view('admin.beranda', compact('reservasi','menu'));
    })->name('admin.beranda');

   // ====================== RESERVASI ======================
// Halaman reservasi admin (view)
Route::get('reservasi', function() {
    if (!session('admin_logged_in')) {
        return redirect()->route('admin.login');
    }

    // Ambil semua reservasi terbaru beserta relasi meja
    $reservasi = Reservasi::with('meja')->latest()->get();
    return view('admin.reservasi', compact('reservasi'));
})->name('admin.reservasi');

// Data reservasi untuk AJAX (realtime)
Route::get('reservasi/data', function() {
    if (!session('admin_logged_in')) {
        return response()->json([], 401);
    }

    // Ambil semua reservasi dengan relasi meja
    $reservasi = Reservasi::with('meja')->latest()->get()->map(function($r) {
        return [
            'id' => $r->id,
            'nama' => $r->nama,
            'jumlah_orang' => $r->jumlah_orang,
            'meja' => $r->meja ? $r->meja->nama : '-', // tampilkan nama meja jika ada
            'tanggal' => $r->tanggal,
            'jam' => $r->jam,
            'catatan' => $r->catatan ?? '-', // tampilkan catatan jika ada
        ];
    });

    return response()->json($reservasi);
})->name('admin.reservasi.data');

// Hapus reservasi
Route::delete('reservasi/{id}', function($id){
    if (!session('admin_logged_in')) {
        return response()->json(['error' => 'Unauthorized'], 401);
    }

    $r = Reservasi::findOrFail($id);
    $r->delete();

    return response()->json(['success' => true]);
})->name('admin.reservasi.hapus');



   // ====================== MENU ======================

// Halaman menu admin
Route::get('menu', function() {
    if(!session('admin_logged_in')) return redirect()->route('admin.login');
    $menu = Menu::latest()->get();
    return view('admin.menu', compact('menu'));
})->name('admin.menu');

// Halaman form tambah menu
Route::get('menu/tambah', function() {
    if(!session('admin_logged_in')) return redirect()->route('admin.login');
    return view('admin.tambah_menu'); // <<< ganti ke tambah_menu.blade.php
})->name('admin.menu.tambah');

// Proses simpan menu
Route::post('menu/tambah', function(Request $request) {
    if(!session('admin_logged_in')) return redirect()->route('admin.login');

    $request->validate([
        'nama' => 'required|string|max:255',
        'harga' => 'required|numeric',
        'kategori' => 'required|string|max:255',
        'status' => 'required|in:tersedia,habis',
        'gambar' => 'nullable|image|max:2048',
    ]);

    $data = $request->only(['nama','harga','kategori','status']);

    if($request->hasFile('gambar')) {
        $file = $request->file('gambar');
        $path = $file->store('menu', 'public');
        $data['gambar'] = $path;
    }

    Menu::create($data);

    return redirect()->route('admin.menu')->with('success','Menu berhasil ditambahkan!');
})->name('admin.menu.store');

// Form edit menu
Route::get('menu/edit/{id}', function($id) {
    if(!session('admin_logged_in')) return redirect()->route('admin.login');
    $menu = Menu::findOrFail($id);
    return view('admin.menu_edit', compact('menu'));
})->name('admin.menu.edit');

// Proses update menu
Route::put('menu/edit/{id}', function(Request $request, $id) {
    if(!session('admin_logged_in')) return redirect()->route('admin.login');
    $menu = Menu::findOrFail($id);

    $request->validate([
        'nama' => 'required|string|max:255',
        'harga' => 'required|numeric',
        'kategori' => 'required|string|max:255',
        'status' => 'required|in:tersedia,habis',
        'gambar' => 'nullable|image|max:2048',
    ]);

    $data = $request->only(['nama','harga','kategori','status']);

    if($request->hasFile('gambar')) {
        $file = $request->file('gambar');
        $path = $file->store('menu', 'public');
        $data['gambar'] = $path;
    }

    $menu->update($data);

    return redirect()->route('admin.menu')->with('success','Menu berhasil diupdate!');
})->name('admin.menu.update');

// Hapus satu menu
Route::delete('menu/{id}', function($id) {
    if(!session('admin_logged_in')) return redirect()->route('admin.login');
    $menu = Menu::findOrFail($id);
    $menu->delete();
    return redirect()->route('admin.menu')->with('success','Menu berhasil dihapus!');
})->name('admin.menu.hapus');

// Hapus semua menu
Route::delete('menu/hapus_semua', function() {
    if(!session('admin_logged_in')) return redirect()->route('admin.login');
    Menu::truncate();
    return redirect()->route('admin.menu')->with('success','Semua menu berhasil dihapus!');
})->name('admin.menu.hapus_semua');

// Edit semua menu
Route::get('menu/edit_all', function() {
    if(!session('admin_logged_in')) return redirect()->route('admin.login');
    $menu = Menu::latest()->get();
    return view('admin.menu_edit_all', compact('menu'));
})->name('admin.menu.edit_all');

// Data menu untuk JSON
Route::get('menu/data', function() {
    if(!session('admin_logged_in')) return response()->json([],401);
    $menu = Menu::latest()->get(['id','nama','harga','kategori','status']);
    return response()->json($menu);
})->name('admin.menu.data');
// ====================== LOGOUT ======================
Route::get('logout', function() {
    session()->forget('admin_logged_in');
    session()->forget('admin_id');
    return redirect()->route('admin.login');
})->name('admin.logout');


});