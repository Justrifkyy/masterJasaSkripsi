<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;
    // Kolom yang boleh diisi
    protected $fillable = ['user_id', 'service_id', 'harga_pesanan', 'status'];

    // Relasi: Satu Order dimiliki oleh satu User
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Relasi: Satu Order merujuk ke satu Service
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
}