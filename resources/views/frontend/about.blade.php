<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between animate-fade-in">
            <h2 class="font-bold text-2xl md:text-3xl text-gray-800 dark:text-gray-100 leading-tight">
                {{ __('Tentang Kami') }}
            </h2>
            <a href="{{ route('home') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-semibold rounded-lg transition-all duration-300 shadow-md hover:shadow-lg">
                {{ __('Kembali ke Beranda') }}
            </a>
        </div>
    </x-slot>

    <div class="py-16 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Company Description Section -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-2xl border border-gray-200 dark:border-gray-700 animate-slide-up">
                <div class="p-8 md:p-10 text-gray-900 dark:text-gray-100">
                    <h3 class="text-3xl font-extrabold text-gray-900 dark:text-gray-100 mb-6">Master Jasa Skripsi</h3>
                    <p class="text-base md:text-lg text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">
                        Kami adalah platform layanan akademik digital terpercaya yang berkomitmen untuk membantu mahasiswa mencapai kesuksesan akademik. Dengan tim profesional berpengalaman, kami menyediakan solusi untuk kebutuhan skripsi, tesis, dan laporan dengan pendekatan yang transparan dan berkualitas tinggi.
                    </p>
                    <p class="text-base md:text-lg text-gray-600 dark:text-gray-300 leading-relaxed">
                        Tujuan kami adalah membantu Anda menyelesaikan tugas akademik dengan mudah dan percaya diri, memberikan dukungan penuh dari awal hingga akhir proses. Kami bangga telah dipercaya oleh lebih dari 10,000 mahasiswa sejak 2018, dengan fokus pada kepuasan dan hasil terbaik.
                    </p>
                    <div class="mt-8 flex flex-col sm:flex-row gap-4">
                        <a href="#layanan" class="inline-flex items-center justify-center px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
                            {{ __('Lihat Layanan Kami') }}
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                        <a href="https://wa.me/6281234567890" class="inline-flex items-center justify-center px-6 py-3 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                            {{ __('Hubungi Kami') }}
                        </a>
                    </div>
                </div>
            </div>

            <!-- Testimonials Section -->
            <div class="mt-16">
                <h2 class="text-3xl md:text-4xl font-extrabold text-center text-gray-900 dark:text-gray-100 animate-slide-up">
                    {{ __('Apa Kata Mereka?') }}
                </h2>
                <p class="mt-4 text-center text-gray-600 dark:text-gray-400 text-lg max-w-2xl mx-auto animate-slide-up delay-100">
                    {{ __('Testimoni nyata dari klien yang telah mempercayai layanan kami') }}
                </p>
                <div class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @forelse ($testimonials as $testimonial)
                        <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-500 transform hover:-translate-y-1 border border-gray-200 dark:border-gray-700 flex flex-col animate-slide-up delay-200">
                            <div class="mb-6">
                                <div class="flex items-center gap-1 mb-4">
                                    @for ($i = 0; $i < 5; $i++)
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                    @endfor
                                </div>
                                <svg class="w-8 h-8 text-indigo-200 dark:text-indigo-400" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                                </svg>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 italic text-base leading-relaxed mb-6 flex-grow">
                                "{{ $testimonial->isi }}"
                            </p>
                            <div class="flex items-center pt-4 border-t border-gray-200 dark:border-gray-700 mt-auto">
                                <img src="{{ Storage::url($testimonial->foto) }}" 
                                     alt="{{ $testimonial->nama }}" 
                                     class="h-12 w-12 rounded-full object-cover border-2 border-indigo-100 dark:border-indigo-500 shadow-sm">
                                <div class="ml-4">
                                    <p class="text-lg font-semibold text-gray-900 dark:text-gray-100">{{ $testimonial->nama }}</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 font-medium">{{ __('Klien Terpercaya') }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-3 text-center py-16 animate-slide-up">
                            <div class="inline-flex items-center justify-center w-16 h-16 bg-gray-200 dark:bg-gray-700 rounded-full mb-4">
                                <svg class="w-8 h-8 text-gray-400 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                </svg>
                            </div>
                            <p class="text-gray-500 dark:text-gray-400 text-lg font-semibold">{{ __('Belum ada testimoni.') }}</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    <style>
        @keyframes fade-in {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slide-up {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        .animate-fade-in {
            animation: fade-in 0.8s ease-out;
        }
        .animate-slide-up {
            animation: slide-up 0.8s ease-out;
        }
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
    </style>