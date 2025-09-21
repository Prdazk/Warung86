<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Illuminate\Http\Request;
use Carbon\Carbon;

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

        // Simpan data baru
        $reservasi = Reservasi::create($request->all());

        // Jika request AJAX, kembalikan data baru sebagai JSON
        if ($request->ajax()) {
            return response()->json([
                'id' => $reservasi->id,
                'nama' => $reservasi->nama,
                'jumlah_orang' => $reservasi->jumlah_orang,
                'pilihan_meja' => $reservasi->pilihan_meja ?? '-',
                'tanggal' => $reservasi->tanggal ? Carbon::parse($reservasi->tanggal)->format('d-m-Y') : '-',
                'jam' => $reservasi->jam ? Carbon::parse($reservasi->jam)->format('H:i') : '-',
                'status' => $reservasi->status ?? 'Pending',
            ]);
        }

        return redirect()->back()->with('success', 'Reservasi berhasil dikirim!');
    }

    // Tampilkan daftar reservasi (untuk admin)
    public function index()
    {
        $reservasi = Reservasi::orderBy('tanggal', 'desc')->get()->map(function($r){
            return [
                'id' => $r->id,
                'nama' => $r->nama,
                'jumlah_orang' => $r->jumlah_orang,
                'pilihan_meja' => $r->pilihan_meja ?? '-',
                'tanggal' => $r->tanggal ? Carbon::parse($r->tanggal)->format('d-m-Y') : '-',
                'jam' => $r->jam ? Carbon::parse($r->jam)->format('H:i') : '-',
                'status' => $r->status ?? 'Pending',
            ];
        });

        return view('admin.reservasi', compact('reservasi'));
    }

    // Hapus reservasi
    public function destroy($id)
    {
        $reservasi = Reservasi::find($id);

        if($reservasi){
            $reservasi->delete();

            // Jika AJAX, kembalikan sukses
            if (request()->ajax()) {
                return response()->json(['success' => true]);
            }

            return redirect()->back()->with('success', 'Reservasi berhasil dihapus');
        }

        if (request()->ajax()) {
            return response()->json(['success' => false, 'message' => 'Reservasi tidak ditemukan'], 404);
        }

        return redirect()->back()->with('error', 'Reservasi tidak ditemukan');
    }

    // Endpoint untuk ambil data reservasi terbaru (JSON)
    public function data()
    {
        $reservasi = Reservasi::orderBy('tanggal', 'desc')->get()->map(function($r){
            return [
                'id' => $r->id,
                'nama' => $r->nama,
                'jumlah_orang' => $r->jumlah_orang,
                'pilihan_meja' => $r->pilihan_meja ?? '-',
                'tanggal' => $r->tanggal ? Carbon::parse($r->tanggal)->format('d-m-Y') : '-',
                'jam' => $r->jam ? Carbon::parse($r->jam)->format('H:i') : '-',
                'status' => $r->status ?? 'Pending',
            ];
        });

        return response()->json($reservasi);
    }
}
