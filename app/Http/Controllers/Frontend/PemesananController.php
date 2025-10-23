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
        $user = Auth::user(); // Ambil data user yang sedang login

        // 1. Buat pesanan di database
        $order = Order::create([
            'user_id' => $user->id,
            'service_id' => $service->id,
            'harga_pesanan' => $service->harga, // Ambil harga default dari layanan
            'status' => 'wa_pending', // Status baru!
        ]);

        // =============================================
        //        BAGIAN PESAN WA YANG DIPERBAIKI
        // =============================================

        // 2. Siapkan detail untuk pesan
        $namaLayanan = $service->judul;
        $hargaLayanan = "Rp " . number_format($service->harga, 0, ',', '.');
        $namaUser = $user->name;
        $emailUser = $user->email;
        $orderId = $order->id;

        // 3. Susun pesan yang lebih terstruktur
        $pesan  = "Halo Admin " . config('app.name') . " 👋\n\n";
        $pesan .= "Saya ingin melakukan pemesanan layanan melalui website.\n\n";
        $pesan .= "--- *DETAIL PESANAN* ---\n";
        $pesan .= "*ID Pesanan:* `#{$orderId}`\n";
        $pesan .= "*Layanan:* {$namaLayanan}\n";
        $pesan .= "*Harga Awal:* {$hargaLayanan}\n\n";
        $pesan .= "--- *DATA SAYA* ---\n";
        $pesan .= "*Nama:* {$namaUser}\n";
        $pesan .= "*Email:* {$emailUser}\n\n";
        $pesan .= "Mohon segera ditindaklanjuti. Terima kasih! 🙏";


        // 4. Ambil nomor WA Admin dari file .env
        $nomorWaAdmin = env('NOMOR_WA_ADMIN', '6285751925074'); // Nomor default jika di .env tidak ada

        // 5. Encode pesan dan buat URL WhatsApp
        $urlWa = 'https://wa.me/' . $nomorWaAdmin . '?text=' . urlencode($pesan);

        // 6. Redirect user ke URL WhatsApp
        return redirect()->away($urlWa);
    }
}
