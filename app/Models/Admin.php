<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    // Field yang bisa diisi
    protected $fillable = ['email', 'password'];

    // Field yang disembunyikan (misal password)
    protected $hidden = ['password'];
}
