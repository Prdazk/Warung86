<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class AdminMenuController extends Controller
{
    // Menampilkan halaman form tambah menu
    public function create()
    {
        return view('admin.menu.create');
    }

    // Menyimpan menu baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'nullable|string|max:100',
            'harga' => 'required|numeric',
            'status' => 'required|in:tersedia,habis',
        ]);

        Menu::create([
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.menu.index')->with('success', 'Menu berhasil ditambahkan!');
    }

    // Menampilkan daftar menu (opsional, untuk halaman index admin)
    public function index()
    {
        $menu = Menu::all();
        return view('admin.menu.index', compact('menu'));
    }
}
