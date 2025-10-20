<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nama_panjang')->nullable()->after('name');
            $table->string('asal_sekolah')->nullable()->after('email');
            $table->string('nim_nisn')->nullable()->after('asal_sekolah');
            $table->text('alamat')->nullable()->after('nim_nisn');
            $table->text('bio')->nullable()->after('alamat');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'nama_panjang',
                'asal_sekolah',
                'nim_nisn',
                'alamat',
                'bio'
            ]);
        });
    }
};
