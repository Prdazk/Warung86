<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meja extends Model
{
    protected $fillable = ['nama', 'sisa_kursi'];

    public function reservasis()
    {
        return $this->hasMany(Reservasi::class); // Relasi dengan reservasi
    }
}
