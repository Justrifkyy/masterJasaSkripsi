<?php

namespace Database\Seeders;

// database/seeders/AdminUserSeeder.php
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        // Buat 1 user Admin
        User::create([
            'name' => 'Admin Joki',
            'email' => 'admin@masterjasaskripsi.com',
            'password' => Hash::make('password'), // Ganti 'password' ini saat deploy!
            'role' => 'admin',
        ]);

        // Buat 1 user biasa (opsional, untuk tes)
        User::create([
            'name' => 'User Biasa',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user', // defaultnya sudah user, tapi ini untuk memperjelas
        ]);
    }
}
