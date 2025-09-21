<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meja;
use App\Models\Reservasi;

class UserReservasiController extends Controller
{
    // Halaman form reservasi
    public function create()
    {
        // Ambil meja yang tersedia (sisa_kursi > 0)
        $meja = Meja::where('sisa_kursi', '>', 0)->get();
        
        // Jika tidak ada meja yang tersedia
        if ($meja->isEmpty()) {
            return view('user.reservasi.create', compact('meja'))->with('error', 'Tidak ada meja tersedia');
        }

        return view('user.reservasi.create', compact('meja'));
    }

    // Simpan reservasi
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jumlah_orang' => 'required|integer|min:1',
            'pilihan_meja' => 'required|exists:mejas,id',
            'tanggal' => 'required|date',
            'jam' => 'required'
        ]);

        // Ambil data meja berdasarkan pilihan
        $meja = Meja::find($request->pilihan_meja);

        // Jika jumlah orang lebih banyak dari kursi yang tersedia
        if ($request->jumlah_orang > $meja->sisa_kursi) {
            return back()->withErrors(['jumlah_orang' => 'Jumlah orang melebihi kursi yang tersedia.']);
        }

        // Simpan data reservasi
        Reservasi::create([
            'nama' => $request->nama,
            'jumlah_orang' => $request->jumlah_orang,
            'meja_id' => $meja->id,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam
        ]);

        // Update sisa kursi meja
        $meja->sisa_kursi -= $request->jumlah_orang;
        $meja->save();

        return redirect()->route('user.reservasi.create')->with('success', 'Reservasi berhasil!');
    }
}
