<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservasi;

class ReservasiController extends Controller
{
    // Halaman daftar reservasi admin
    public function index()
    {
        // Ambil semua reservasi untuk pertama tampil
        $reservasi = Reservasi::orderBy('created_at', 'desc')->get();
        return view('admin.reservasi.index', compact('reservasi'));
    }

    // Data JSON untuk realtime polling
    public function data()
    {
        $reservasi = Reservasi::orderBy('created_at', 'desc')->get();

        $data = $reservasi->map(function($r){
            return [
                'id' => $r->id,
                'nama' => $r->nama,
                'jumlah_orang' => $r->jumlah_orang,
                'meja' => $r->pilihan_meja ?? '-', // langsung dari kolom pilihan_meja
                'tanggal' => $r->tanggal,
                'jam' => $r->jam,
                'catatan' => $r->catatan ?? ''
            ];
        });

        return response()->json($data);
    }

    // Hapus reservasi
    public function destroy($id)
    {
        $reservasi = Reservasi::findOrFail($id);
        $reservasi->delete();

        return response()->json(['success' => true]);
    }
}
