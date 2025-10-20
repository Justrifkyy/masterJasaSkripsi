<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tentang Kami') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-2xl font-bold mb-4">Master Jasa Skripsi</h3>
                    <p class="mb-4">
                        Kami adalah platform layanan akademik digital... (Konten deskripsi perusahaan akan ada di sini).
                    </p>
                    <p>
                        Tujuan kami adalah membantu Anda... [cite: 10]
                    </p>
                </div>
            </div>

            <div class="mt-12">
                <h2 class="text-3xl font-bold text-center text-gray-900">Apa Kata Mereka?</h2>
                <div class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @forelse ($testimonials as $testimonial)
                        <div class="bg-white p-6 rounded-lg shadow-md">
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
    </div>
</x-app-layout>