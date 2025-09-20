<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    // Tabel yang digunakan
    protected $table = 'menus';

    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'nama',
        'kategori',
        'harga',
        'status',
        'gambar',
    ];
}
