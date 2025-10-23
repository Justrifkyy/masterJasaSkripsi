<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Panggil semua seeder yang Anda butuhkan di sini
        $this->call([
            AdminUserSeeder::class,    // Seeder admin yang sudah Anda buat
            LayananSeeder::class,    // Seeder layanan yang baru
            TestimoniSeeder::class,  // Seeder testimoni yang baru
            // Anda bisa tambahkan seeder lain di sini
        ]);
    }
}
