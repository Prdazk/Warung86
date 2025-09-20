<?php

namespace App\Models;
use App\Models\Reservasi; 

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['nama','kategori','harga','status','gambar'];
}
