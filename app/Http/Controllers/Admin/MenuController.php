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
        $menus = Menu::orderBy('nama')->get();
        return view('admin.menu', compact('menus'));
    }

    // Tampilkan form tambah menu
    public function create()
    {
        return view('admin.tambah_menu');
    }

    // Simpan menu baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string|max:50',
            'harga' => 'required|numeric',
            'status' => 'required|string|max:20',
            'gambar' => 'nullable|image|max:2048'
        ]);

        $data = $request->all();

        if($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $data['gambar'] = $filename;
        }

        Menu::create($data);

        return redirect()->route('admin.menu.index')->with('success', 'Menu berhasil ditambahkan!');
    }

    // Hapus menu
    public function destroy($id)
    {
        $menu = Menu::find($id);
        if($menu){
            if($menu->gambar && file_exists(public_path('images/'.$menu->gambar))){
                unlink(public_path('images/'.$menu->gambar));
            }
            $menu->delete();
            return redirect()->route('admin.menu.index')->with('success', 'Menu berhasil dihapus');
        }
        return redirect()->route('admin.menu.index')->with('error', 'Menu tidak ditemukan');
    }
}
