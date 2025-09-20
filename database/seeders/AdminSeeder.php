<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        // Admin pertama
        Admin::create([
            'email' => 'laduni@gmail.com',
            'password' => Hash::make('123'), // password admin
        ]);

        // Admin kedua
        Admin::create([
            'email' => 'admin2@gmail.com',
            'password' => Hash::make('123'), // password admin kedua
        ]);
    }
}
