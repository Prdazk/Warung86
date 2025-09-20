<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'no_hp', 'jumlah_orang', 'tanggal', 'jam', 'pilihan_meja', 'status'
    ];
}
