<?php

use App\Http\Controllers\Admin\ReservasiController;
use App\Http\Controllers\Admin\MenuController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Menu;
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

    // ====================== LOGIN ======================
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

        $reservasi = Reservasi::latest()->get();
        return view('admin.reservasi', compact('reservasi'));
    })->name('admin.reservasi');

    // Data reservasi untuk AJAX (realtime)
    Route::get('reservasi/data', function() {
        if (!session('admin_logged_in')) {
            return response()->json([], 401);
        }

        $reservasi = Reservasi::latest()->get([
            'id','nama','jumlah_orang','meja','tanggal','jam','status'
        ]);
        return response()->json($reservasi);
    })->name('admin.reservasi.data');

    // Hapus reservasi
    Route::delete('reservasi/{id}', function($id){
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $r = Reservasi::findOrFail($id);
        $r->delete();
        return back()->with('success', 'Reservasi berhasil dihapus');
    })->name('admin.reservasi.hapus');

    // ====================== MENU ======================
    // Halaman menu admin
    Route::get('menu', function() {
        if(!session('admin_logged_in')) return redirect()->route('admin.login');
        $menu = Menu::latest()->get();
        return view('admin.menu', compact('menu'));
    })->name('admin.menu');

    Route::get('menu/tambah', function() {
        if(!session('admin_logged_in')) return redirect()->route('admin.login');
        return view('admin.menu_tambah');
    })->name('admin.menu.tambah');

    Route::post('menu/tambah', function(Request $request) {
        if(!session('admin_logged_in')) return redirect()->route('admin.login');

        $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'kategori' => 'required|string|max:255',
            'status' => 'required|in:tersedia,habis',
            'gambar' => 'nullable|image|max:2048',
        ]);

        $data = $request->all();

        if($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $path = $file->store('menu', 'public');
            $data['gambar'] = $path;
        }

        Menu::create($data);

        return redirect()->route('admin.menu')->with('success','Menu berhasil ditambahkan!');
    })->name('admin.menu.store');

    Route::get('menu/edit/{id}', function($id) {
        if(!session('admin_logged_in')) return redirect()->route('admin.login');
        $menu = Menu::findOrFail($id);
        return view('admin.menu_edit', compact('menu'));
    })->name('admin.menu.edit');

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

        $data = $request->all();

        if($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $path = $file->store('menu', 'public');
            $data['gambar'] = $path;
        }

        $menu->update($data);

        return redirect()->route('admin.menu')->with('success','Menu berhasil diupdate!');
    })->name('admin.menu.update');

    Route::delete('menu/{id}', function($id) {
        if(!session('admin_logged_in')) return redirect()->route('admin.login');
        $menu = Menu::findOrFail($id);
        $menu->delete();
        return redirect()->route('admin.menu')->with('success','Menu berhasil dihapus!');
    })->name('admin.menu.hapus');

    Route::delete('menu/hapus_semua', function() {
        if(!session('admin_logged_in')) return redirect()->route('admin.login');
        Menu::truncate();
        return redirect()->route('admin.menu')->with('success','Semua menu berhasil dihapus!');
    })->name('admin.menu.hapus_semua');

    Route::get('menu/edit_all', function() {
        if(!session('admin_logged_in')) return redirect()->route('admin.login');
        $menu = Menu::latest()->get();
        return view('admin.menu_edit_all', compact('menu'));
    })->name('admin.menu.edit_all');

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