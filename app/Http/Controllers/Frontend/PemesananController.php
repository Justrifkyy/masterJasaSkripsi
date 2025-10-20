<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PemesananController extends Controller
{
    /**
     * Buat pesanan baru dari frontend dan redirect ke WA.
     */
    public function buatPesanan(Request $request, Service $service)
    {
        // 1. Buat pesanan di database
        $order = Order::create([
            'user_id' => Auth::id(), // Ambil user yang sedang login
            'service_id' => $service->id,
            'harga_pesanan' => $service->harga, // Ambil harga default dari layanan
            'status' => 'wa_pending', // Status baru!
        ]);

        // 2. Siapkan pesan WA
        $namaLayanan = $service->judul;
        $pesan = "Halo, saya ingin memesan layanan: *$namaLayanan*.\n\n" .
            "Pesanan saya sudah tercatat di sistem dengan ID: *#{$order->id}*.\n\n" .
            "Saya menunggu konfirmasi selanjutnya.";

        // AMBIL NOMOR WA ADMIN (Ganti dengan nomor Anda)
        // Sebaiknya simpan ini di file .env
        $nomorWaAdmin = env('NOMOR_WA_ADMIN', '6281234567890'); // Ganti

        // 3. Encode pesan dan buat URL
        $urlWa = 'https://wa.me/' . $nomorWaAdmin . '?text=' . urlencode($pesan);

        // 4. Redirect user ke WA
        return redirect()->away($urlWa);
    }
}
