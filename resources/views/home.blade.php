<x-app-layout>
    <div class="bg-indigo-700 text-white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-24">
            <h1 class="text-4xl font-bold text-center">Master Jasa Skripsi</h1>
            <p class="text-xl text-indigo-200 text-center mt-4">Solusi Cepat dan Profesional untuk Kebutuhan Akademik Anda.</p>
            <div class="text-center mt-8">
                <a href="#layanan" class="px-6 py-3 bg-white text-indigo-700 font-semibold rounded-lg shadow-md hover:bg-gray-100">
                    Lihat Layanan Kami
                </a>
            </div>
        </div>
    </div>

    <div id="layanan" class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-900">Layanan Favorit Kami</h2>
            <p class="text-center text-gray-600 mt-2">Layanan yang paling sering dipesan oleh pelanggan kami.</p>

            <div class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @forelse ($favoriteServices as $service)
                    <div class="bg-white overflow-hidden shadow-lg rounded-lg">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900">{{ $service->judul }}</h3>
                            <p class="text-gray-500 mt-1">{{ $service->subjudul }}</p>
                            <p class="text-2xl font-bold text-indigo-600 mt-4">
                                Rp {{ number_format($service->harga, 0, ',', '.') }}
                            </p>
                            <p class="text-gray-700 mt-4 h-24 overflow-hidden">
                                {{ Str::limit($service->deskripsi, 100) }}
                            </p>
                            <a href="{{ route('frontend.services.show', $service) }}" class="inline-block mt-6 px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                @empty
                    <p class="text-center text-gray-500 col-span-4">Belum ada layanan favorit yang diatur.</p>
                @endforelse
            </div>
        </div>
    </div>

    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-900">Apa Kata Mereka?</h2>

            <div class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($testimonials as $testimonial)
                    <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                        <p class="text-gray-600 italic">"{{ $testimonial->isi }}"</p>
                        <div class="flex items-center mt-4">
                            <img src="{{ Storage::url($testimonial->foto) }}" alt="{{ $testimonial->nama }}" class="h-12 w-12 rounded-full object-cover">
                            <div class="ml-4">
                                <p class="text-lg font-semibold text-gray-900">{{ $testimonial->nama }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center text-gray-500 col-span-3">Belum ada testimoni.</p>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>