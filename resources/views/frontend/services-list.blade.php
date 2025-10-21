<x-app-layout>
    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <p class="text-center text-gray-600 mb-10">Temukan layanan yang paling sesuai dengan kebutuhan akademik Anda.</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($services as $service)
                    <div class="bg-white overflow-hidden shadow-lg rounded-lg flex flex-col justify-between">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900">{{ $service->judul }}</h3>
                            <p class="text-gray-500 mt-1">{{ $service->subjudul }}</p>
                            <p class="text-2xl font-bold text-indigo-600 mt-4">
                                Rp {{ number_format($service->harga, 0, ',', '.') }}
                            </p>
                            <p class="text-gray-700 mt-4 h-24 overflow-hidden">
                                {{ Str::limit($service->deskripsi, 100) }}
                            </p>
                        </div>
                        <div class="p-6 bg-gray-50">
                            <a href="{{ route('frontend.services.show', $service) }}" class="block text-center w-full px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                @empty
                    <p class="text-center text-gray-500 col-span-3">Belum ada layanan yang tersedia saat ini.</p>
                @endforelse
            </div>

            <div class="mt-12">
                {{ $services->links() }}
            </div>

        </div>
    </div>
</x-app-layout>