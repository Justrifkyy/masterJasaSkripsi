<x-app-layout>
    <div class="py-20 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gray-100 dark:bg-gray-800 overflow-hidden rounded-xl shadow-md hover:shadow-lg transition-all duration-300 border border-gray-200 dark:border-gray-700 animate-slide-up">
                <div class="h-1 bg-indigo-600 dark:bg-indigo-500"></div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-6 md:p-8">
                    <!-- Deskripsi Layanan -->
                    <div class="flex flex-col">
                        <div class="flex items-center space-x-3 mb-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-indigo-100 dark:bg-indigo-700 rounded-lg flex items-center justify-center group-hover:bg-indigo-600 dark:group-hover:bg-indigo-600 transition-colors duration-300">
                                <svg class="w-5 h-5 text-indigo-600 dark:text-indigo-300 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl md:text-2xl font-bold text-gray-900 dark:text-gray-100">{{ $service->judul }}</h3>
                                <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">{{ $service->subjudul }}</p>
                            </div>
                        </div>

                        <hr class="my-6 border-gray-200 dark:border-gray-700">

                        <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-3">Deskripsi Layanan</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-300 whitespace-pre-line leading-relaxed">
                            {{ $service->deskripsi }}
                        </p>
                    </div>

                    <!-- Formulir Pemesanan -->
                    <div class="flex flex-col bg-gray-200 dark:bg-gray-700 rounded-lg p-6 md:p-8">
                        <h3 class="text-lg md:text-xl font-semibold text-gray-900 dark:text-gray-100 mb-4">Pesan Layanan Ini</h3>
                        
                        <p class="text-2xl md:text-3xl font-bold text-indigo-600 dark:text-indigo-400 my-4">
                            Rp {{ number_format($service->harga, 0, ',', '.') }}
                        </p>

                        <p class="text-sm text-gray-600 dark:text-gray-300 mb-6">
                            Ini adalah harga dasar. Harga final akan disepakati melalui diskusi dengan admin via WhatsApp.
                        </p>

                        @guest
                            <a href="{{ route('login') }}" class="group w-full text-center px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold text-sm rounded-lg shadow-md hover:shadow-lg transition-all duration-300 flex items-center justify-center">
                                Login untuk Memesan
                                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                            <p class="text-center text-xs text-gray-500 dark:text-gray-400 mt-3">Anda harus login untuk melanjutkan pemesanan.</p>
                        @endguest

                        @auth
                            <form action="{{ route('pesan.buat', $service) }}" method="POST">
                                @csrf
                                <button type="submit" class="group w-full text-center px-6 py-3 bg-green-600 hover:bg-green-700 text-white font-semibold text-sm rounded-lg shadow-md hover:shadow-lg transition-all duration-300 flex items-center justify-center">
                                    Pesan Sekarang (via WhatsApp)
                                    <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </button>
                            </form>
                            <p class="text-center text-xs text-gray-500 dark:text-gray-400 mt-3">Anda akan diarahkan ke WhatsApp untuk konfirmasi.</p>
                        @endauth
                    </div>
                </div>
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