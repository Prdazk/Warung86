<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;

class UserReservasiController extends Controller
{
    // Halaman form reservasi + daftar reservasi user
    public function index()
    {
        $reservasi = Reservasi::orderBy('tanggal', 'desc')->get();
        return view('user.reservasi.index', compact('reservasi'));
    }

    // Simpan reservasi
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jumlah_orang' => 'required|integer|min:1',
            'pilihan_meja' => 'required|string|max:50', // string saja
            'tanggal' => 'required|date',
            'jam' => 'required',
            'catatan' => 'nullable|string|max:500'
        ]);

        Reservasi::create($request->only([
            'nama', 'jumlah_orang', 'pilihan_meja', 'tanggal', 'jam', 'catatan'
        ]));

        return redirect()->route('user.reservasi.index')->with('success', 'Reservasi berhasil!');
    }

    // Hapus reservasi user
    public function destroy($id)
    {
        $reservasi = Reservasi::find($id);

        if(!$reservasi) {
            return back()->with('error', 'Reservasi tidak ditemukan.');
        }

        $reservasi->delete();
        return back()->with('success', 'Reservasi berhasil dihapus.');
    }
}
