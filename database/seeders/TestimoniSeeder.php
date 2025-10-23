<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimoniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Target tabel 'testimonials'
        DB::table('testimonials')->delete();

        // Siapkan data testimoni
        $testimonis = [
            [
                'nama' => 'Budi Hartono', // PERBAIKAN: nama_klien -> nama
                'foto' => 'testimonials/default-avatar.png', // PENAMBAHAN: 'foto' (placeholder)
                'isi' => 'Pengerjaannya cepat sekali! Adminnya ramah dan hasil olah datanya sangat akurat. Saya jadi lulus tepat waktu. Terima kasih Master Jasa Skripsi!', // PERBAIKAN: isi_testimoni -> isi
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Sinta Dewi',
                'foto' => 'testimonials/default-avatar.png',
                'isi' => 'Awalnya ragu, tapi ternyata bimbingannya sangat membantu. Pembimbingnya sabar dan mengarahkan dengan jelas. Skor Turnitin saya juga jadi aman.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Rian Wijaya',
                'foto' => 'testimonials/default-avatar.png',
                'isi' => 'Harganya terjangkau untuk mahasiswa. Untuk jasa cek plagiasi prosesnya tidak sampai 1 jam sudah dapat hasilnya. Sangat direkomendasikan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Masukkan data ke tabel 'testimonials'
        DB::table('testimonials')->insert($testimonis);
    }
}
