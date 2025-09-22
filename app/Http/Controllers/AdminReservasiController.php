<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservasi;

class AdminReservasiController extends Controller
{
    public function index()
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $reservasi = Reservasi::with('meja')->latest()->get();
        return view('admin.reservasi', compact('reservasi'));
    }

    public function data()
    {
        if (!session('admin_logged_in')) {
            return response()->json([], 401);
        }

        $reservasi = Reservasi::with('meja')->latest()->get()->map(function ($r) {
            return [
                'id' => $r->id,
                'nama' => $r->nama,
                'jumlah_orang' => $r->jumlah_orang,
                'meja' => $r->meja ? $r->meja->nama : '-',
                'tanggal' => $r->tanggal,
                'jam' => $r->jam,
                'catatan' => $r->catatan ?? '-',
            ];
        });

        return response()->json($reservasi);
    }

    public function destroy($id)
    {
        if (!session('admin_logged_in')) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $reservasi = Reservasi::findOrFail($id);
        $reservasi->delete();

        return response()->json(['success' => true]);
    }
}
