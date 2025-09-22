<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;

class UserReservasiController extends Controller
{
    public function store(Request $req)
    {
        $data = $req->validate([
            'nama'         => 'required|string|max:255',
            'jumlah_orang' => 'required|integer|min:1',
            'meja_id'      => 'nullable|exists:mejas,id',
            'tanggal'      => 'required|date',
            'jam'          => 'required',
            'catatan'      => 'nullable|string|max:500',
        ]);

        Reservasi::create($data);

        return redirect()->route('user.dashboard')
                         ->with('success', 'Reservasi berhasil dikirim!');
    }
}
