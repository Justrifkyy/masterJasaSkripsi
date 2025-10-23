<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Target tabel 'services'
        DB::table('services')->delete();

        // Siapkan data layanan
        $layanans = [
            [
                'judul' => 'Bimbingan Skripsi Penuh',           // PERBAIKAN: nama -> judul
                'subjudul' => 'Bimbingan intensif Bab 1-selesai', // PERBAIKAN: slug -> subjudul
                'harga' => 3000000,                          // PERBAIKAN: harga_mulai -> harga
                'deskripsi' => 'Bimbingan intensif dari Bab 1 hingga selesai, revisi tak terbatas.',
                'is_favorite' => 1,                          // PENAMBAHAN: is_favorite
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Jasa Olah Data (SPSS/Eviews)',
                'subjudul' => 'Analisis statistik dan interpretasi Bab 4',
                'harga' => 500000,
                'deskripsi' => 'Analisis statistik dan interpretasi hasil untuk Bab 4.',
                'is_favorite' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Cek Plagiasi Turnitin',
                'subjudul' => 'Laporan Turnitin resmi < 1 Jam',
                'harga' => 50000,
                'deskripsi' => 'Pengecekan kemiripan dokumen dengan laporan Turnitin resmi.',
                'is_favorite' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Parafrase Anti Plagiasi',
                'subjudul' => 'Menurunkan skor plagiasi, garansi lolos',
                'harga' => 750000,
                'deskripsi' => 'Menulis ulang naskah Anda untuk menurunkan skor plagiasi.',
                'is_favorite' => 1, // Dibuat 0 agar bervariasi
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Masukkan data ke tabel 'services'
        DB::table('services')->insert($layanans);
    }
}
