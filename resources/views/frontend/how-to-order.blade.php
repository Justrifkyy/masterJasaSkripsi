<x-app-layout>
    <div class="py-20 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h3 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-gray-100 animate-slide-up">Cara Memesan Layanan</h3>
                <p class="text-base md:text-lg text-gray-600 dark:text-gray-300 mt-3 max-w-xl mx-auto animate-slide-up delay-100">
                    Ikuti langkah-langkah sederhana berikut untuk memesan layanan akademik Anda
                </p>
            </div>

            <div class="grid grid-cols-1 gap-6">
                @php
                    $steps = [
                        [
                            'title' => 'Registrasi / Login',
                            'description' => 'Pastikan Anda sudah memiliki akun dan login sebelum memesan.',
                        ],
                        [
                            'title' => 'Pilih Layanan',
                            'description' => 'Lihat daftar layanan kami, pilih yang Anda butuhkan, dan klik "Lihat Detail".'
                        ],
                        [
                            'title' => 'Klik Tombol Pesan (via WA)',
                            'description' => 'Di halaman detail, klik tombol "Pesan Sekarang". Sistem akan otomatis membuat pesanan Anda dan membuka WhatsApp.',
                        ],
                        [
                            'title' => 'Konfirmasi di WhatsApp',
                            'description' => 'Kirim pesan WA yang sudah terisi otomatis untuk konfirmasi ke admin. Anda bisa berdiskusi lebih lanjut dengan admin di WA.',
                        ],
                        [
                            'title' => 'Admin Memproses Pesanan',
                            'description' => 'Setelah <em>deal</em> di WA, Admin akan mengirimi anda email atau pesan WA.'
                        ],
                        [
                            'title' => 'Terima Notifikasi Email & Cek Status',
                            'description' => 'Anda akan menerima notifikasi email setiap status pesanan berubah.',
                        ]
                    ];
                @endphp

                @foreach ($steps as $index => $step)
                    <div class="group bg-gray-100 dark:bg-gray-800 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 border border-gray-200 dark:border-gray-700 flex flex-col animate-slide-up" style="animation-delay: {{ $index * 0.1 }}s;">
                        <div class="h-1 bg-indigo-600 dark:bg-indigo-500"></div>
                        <div class="p-6 flex items-start space-x-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-indigo-100 dark:bg-indigo-700 rounded-lg flex items-center justify-center group-hover:bg-indigo-600 dark:group-hover:bg-indigo-600 transition-colors duration-300">
                                <svg class="w-5 h-5 text-indigo-600 dark:text-indigo-300 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center space-x-2">
                                    <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-100 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">
                                        {{ $step['title'] }}
                                    </h4>
                                    @if (isset($step['citation']))
                                        <span class="text-sm text-gray-500 dark:text-gray-400">{{ $step['citation'] }}</span>
                                    @endif
                                </div>
                                <p class="text-sm text-gray-600 dark:text-gray-300 mt-2 leading-relaxed">
                                    {!! $step['description'] !!}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <style>
        @keyframes slide-up {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        .animate-slide-up {
            animation: slide-up 0.8s ease-out;
        }
        .delay-100 { animation-delay: 0.1s; }
    </style>
</x-app-layout>