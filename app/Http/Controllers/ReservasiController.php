<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    // Simpan reservasi baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
            'jumlah_orang' => 'required|integer|min:1',
            'tanggal' => 'required|date',
            'jam' => 'required',
            'pilihan_meja' => 'nullable|string|max:50',
        ]);

        Reservasi::create($request->all());

        return redirect()->back()->with('success', 'Reservasi berhasil dikirim!');
    }

    // Tampilkan daftar reservasi (untuk admin)
    public function index()
    {
        $reservasi = Reservasi::orderBy('tanggal', 'desc')->get();
        return view('admin.reservasi', compact('reservasi'));
    }

    // Hapus reservasi
    public function destroy($id)
    {
        $reservasi = Reservasi::find($id);

        if($reservasi){
            $reservasi->delete();
            return redirect()->back()->with('success', 'Reservasi berhasil dihapus');
        }

        return redirect()->back()->with('error', 'Reservasi tidak ditemukan');
    }
}
