<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    // Kolom yang boleh diisi
    protected $fillable = ['judul', 'subjudul', 'harga', 'deskripsi', 'is_favorite'];
}
