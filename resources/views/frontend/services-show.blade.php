<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $service->judul }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6 md:p-8">
                        <h3 class="text-2xl font-bold text-gray-900">{{ $service->judul }}</h3>
                        <p class="text-gray-600 mt-1">{{ $service->subjudul }}</p>

                        <hr class="my-6">

                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Deskripsi Layanan</h4>
                        <p class="text-gray-700 whitespace-pre-line">
                            {{ $service->deskripsi }}
                        </p>
                    </div>

                    <div class="p-6 md:p-8 bg-gray-50 border-t md:border-t-0 md:border-l">
                        <h3 class="text-xl font-semibold text-gray-800">Pesan Layanan Ini</h3>
                        
                        <p class="text-3xl font-bold text-indigo-600 my-4">
                            Rp {{ number_format($service->harga, 0, ',', '.') }}
                        </p>

                        <p class="text-sm text-gray-600 mb-6">
                            Ini adalah harga dasar. Harga final akan disepakati melalui diskusi dengan admin via WhatsApp.
                        </p>

                        @guest
                            <a href="{{ route('login') }}" class="w-full text-center block px-6 py-3 bg-indigo-600 text-white font-bold rounded-lg shadow-md hover:bg-indigo-700">
                                Login untuk Memesan
                            </a>
                            <p class="text-center text-sm text-gray-500 mt-2">Anda harus login untuk melanjutkan pemesanan.</p>
                        @endguest

                        @auth
                            <form action="{{ route('pesan.buat', $service) }}" method="POST">
                                @csrf
                                <button type="submit" class="w-full text-center px-6 py-3 bg-green-600 text-white font-bold rounded-lg shadow-md hover:bg-green-700">
                                    Pesan Sekarang (via WhatsApp)
                                </button>
                            </form>
                            <p class="text-center text-sm text-gray-500 mt-2">Anda akan diarahkan ke WhatsApp untuk konfirmasi.</p>
                        @endauth

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>