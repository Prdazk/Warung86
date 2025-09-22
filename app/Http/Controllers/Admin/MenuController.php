<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    // Tampilkan daftar menu (opsional, bisa redirect ke beranda juga)
    public function index()
    {
        $menu = Menu::all();
        $reservasi = \App\Models\Reservasi::latest()->get(); // ambil data reservasi juga
        return redirect()->route('admin.beranda')->with('success', 'Menu berhasil ditambahkan!');

    }

    // Form tambah menu
    public function create()
    {
        return view('admin.tambah_menu');
    }

    // Simpan menu baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'nullable|string|max:255',
            'harga' => 'required|numeric',
            'status' => 'required|in:tersedia,habis',
            'gambar' => 'nullable|image|max:2048',
        ]);

        $menu = new Menu($request->only('nama','kategori','harga','status'));

        if ($request->hasFile('gambar')) {
            $menu->gambar = $request->file('gambar')->store('menu', 'public');
        }

        $menu->save();

        // Redirect ke beranda admin, bukan admin.menu.index
        return redirect()->route('admin.beranda')->with('success', 'Menu berhasil ditambahkan!');
    }

    // Form edit menu
    public function edit(Menu $menu)
    {
        return view('admin.menu.edit', compact('menu'));
    }

    // Update menu
    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'nullable|string|max:255',
            'harga' => 'required|numeric',
            'status' => 'required|in:tersedia,habis',
            'gambar' => 'nullable|image|max:2048',
        ]);

        $menu->update($request->only('nama','kategori','harga','status'));

        if ($request->hasFile('gambar')) {
            $menu->gambar = $request->file('gambar')->store('menu', 'public');
            $menu->save();
        }

        return redirect()->route('admin.beranda')->with('success', 'Menu berhasil diperbarui!');
    }

    // Hapus menu
    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('admin.beranda')->with('success', 'Menu berhasil dihapus!');
    }

    // Edit semua menu (baru)
    public function editAll()
    {
        $menu = Menu::latest()->get();
        return view('admin.menu.edit_all', compact('menu'));
    }
}
