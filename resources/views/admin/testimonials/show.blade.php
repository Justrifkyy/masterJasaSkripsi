<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Testimoni: ') . $testimonial->nama }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <div class="mb-4">
                        <h3 class="text-lg font-medium text-gray-900">Foto</h3>
                        <img src="{{ Storage::url($testimonial->foto) }}" alt="{{ $testimonial->nama }}" class="mt-2 h-32 w-32 rounded-full object-cover">
                    </div>

                    <div class="mb-4">
                        <h3 class="text-lg font-medium text-gray-900">Nama</h3>
                        <p class="mt-1 text-sm text-gray-600">{{ $testimonial->nama }}</p>
                    </div>

                    <div class="mb-4">
                        <h3 class="text-lg font-medium text-gray-900">Isi Testimoni</h3>
                        <p class="mt-1 text-sm text-gray-600 whitespace-pre-line">{!! nl2br(e($testimonial->isi)) !!}</p>
                    </div>

                    <hr class="my-6">
                    
                    <div class="mt-8 flex items-center justify-between">
                        <a href="{{ route('admin.testimonials.index') }}" class="text-gray-600 hover:text-gray-900">
                            &larr; Kembali ke Daftar
                        </a>
                        <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                            Edit Testimoni Ini
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>