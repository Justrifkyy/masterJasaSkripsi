<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Alur Pemesanan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-2xl font-bold mb-4">Cara Memesan Layanan</h3>
                    <ol class="list-decimal list-inside space-y-4">
                        <li>
                            <strong>Registrasi / Login</strong> [cite: 18]
                            <p class="pl-4 text-gray-700">Pastikan Anda sudah memiliki akun dan login sebelum memesan.</p>
                        </li>
                        <li>
                            <strong>Pilih Layanan</strong>
                            <p class="pl-4 text-gray-700">Lihat daftar layanan kami, pilih yang Anda butuhkan, dan klik "Lihat Detail".</p>
                        </li>
                        <li>
                            <strong>Klik Tombol Pesan (via WA)</strong> [cite: 18]
                            <p class="pl-4 text-gray-700">Di halaman detail, klik tombol "Pesan Sekarang". Sistem akan otomatis membuat pesanan Anda (status: Pending WA) dan membuka WhatsApp.</p>
                        </li>
                        <li>
                            <strong>Konfirmasi di WhatsApp</strong> [cite: 63]
                            <p class="pl-4 text-gray-700">Kirim pesan WA yang sudah terisi otomatis untuk konfirmasi ke admin. Anda bisa berdiskusi lebih lanjut dengan admin di WA.</p>
                        </li>
                        <li>
                            <strong>Admin Memproses Pesanan</strong>
                            <p class="pl-4 text-gray-700">Setelah *deal* di WA, Admin akan mengubah status pesanan Anda (misal: "Diproses").</p>
                        </li>
                        <li>
                            <strong>Terima Notifikasi Email & Cek Status</strong> [cite: 18, 59]
                            <p class="pl-4 text-gray-700">Anda akan menerima notifikasi email setiap status pesanan berubah[cite: 59]. Anda juga bisa melihat status pesanan Anda di halaman "Pesanan Saya".</p>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>