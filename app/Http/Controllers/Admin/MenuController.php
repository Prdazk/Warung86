<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    // Tampilkan daftar menu
    public function index()
    {
        $menu = Menu::all();
        return view('admin.menu.index', compact('menu'));
    }

    // Form tambah menu
    public function create()
    {
        return view('admin.menu.create');
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

        $menu = new Menu();
        $menu->nama = $request->nama;
        $menu->kategori = $request->kategori;
        $menu->harga = $request->harga;
        $menu->status = $request->status;

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $path = $file->store('menu', 'public');
            $menu->gambar = $path;
        }

        $menu->save();

        return redirect()->route('admin.menu.index')->with('success', 'Menu berhasil ditambahkan!');
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

        $menu->update($request->only('nama', 'kategori', 'harga', 'status'));

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $path = $file->store('menu', 'public');
            $menu->gambar = $path;
            $menu->save();
        }

        return redirect()->route('admin.menu.index')->with('success', 'Menu berhasil diperbarui!');
    }

    // Hapus menu
    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('admin.menu.index')->with('success', 'Menu berhasil dihapus!');
    }
}
