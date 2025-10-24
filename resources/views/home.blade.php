<x-app-layout>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Master Jasa Skripsi - Jasa Skripsi & Olah Data Terpercaya')</title>
    
    <meta name="description" content="@yield('description', 'Master Jasa Skripsi menyediakan bimbingan skripsi, olah data SPSS, cek Turnitin, dan parafrase dengan harga terjangkau dan bergaransi.')">

    <link rel="canonical" href="{{ url()->current() }}" />

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Master Jasa Skripsi - Jasa Skripsi & Olah Data Terpercaya')">
    <meta property="og:description" content="@yield('description', 'Master Jasa Skripsi menyediakan bimbingan skripsi, olah data SPSS, cek Turnitin, dan parafrase.')">
    <meta property="og:image" content="@yield('og_image', asset('images/og-image-default.jpg'))">
    
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('title', 'Master Jasa Skripsi - Jasa Skripsi & Olah Data Terpercaya')">
    <meta property="twitter:description" content="@yield('description', 'Master Jasa Skripsi menyediakan bimbingan skripsi, olah data SPSS, cek Turnitin, dan parafrase.')">
    <meta property="twitter:image" content="@yield('og_image', asset('images/og-image-default.jpg'))">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


    <!-- Hero Section -->
    <div class="relative py-20 bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 overflow-hidden">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"40\" height=\"40\" viewBox=\"0 0 40 40\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.1\"%3E%3Cpath d=\"M0 0h40v40H0z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] dark:fill-gray-800"></div>
        
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center">
                <div class="inline-block mb-6 animate-fade-in">
                    <span class="px-4 py-2 bg-green-600/20 border border-green-500/50 text-green-600 dark:text-green-400 rounded-full text-sm font-semibold tracking-wide">
                        ✓ Dipercaya 10,000+ Mahasiswa
                    </span>
                </div>
                
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight mb-4 animate-slide-up">
                    Solusi Profesional<br>Kebutuhan Akademik Anda
                </h1>
                
                <p class="text-lg md:text-xl text-gray-600 dark:text-gray-300 mt-4 max-w-2xl mx-auto leading-relaxed animate-slide-up delay-100">
                    Jasa joki skripsi, tesis, dan laporan tepercaya dengan alur transparan
                </p>
                
                <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="#layanan" class="group inline-flex items-center px-6 py-3 bg-green-600 hover:bg-green-700 text-white font-semibold text-base rounded-lg shadow-md transition-all duration-300 transform hover:scale-105 animate-slide-up delay-200">
                        Lihat Semua Layanan
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                    
                    <a href="#testimoni" class="inline-flex items-center px-6 py-3 bg-indigo-600/20 hover:bg-indigo-600/30 text-gray-900 dark:text-gray-100 font-semibold text-base rounded-lg border border-indigo-500/50 transition-all duration-300 animate-slide-up delay-300">
                        Lihat Testimoni
                    </a>
                </div>
                
                <div class="mt-12 flex flex-wrap justify-center gap-6 text-gray-600 dark:text-gray-300">
                    <div class="flex items-center animate-slide-up delay-100">
                        <svg class="w-5 h-5 text-green-600 dark:text-green-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="font-semibold text-sm">100% Aman</span>
                    </div>
                    <div class="flex items-center animate-slide-up delay-200">
                        <svg class="w-5 h-5 text-green-600 dark:text-green-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="font-semibold text-sm">Garansi Revisi</span>
                    </div>
                    <div class="flex items-center animate-slide-up delay-300">
                        <svg class="w-5 h-5 text-green-600 dark:text-green-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="font-semibold text-sm">Tepat Waktu</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Layanan Section -->
    <div id="layanan" class="py-20 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-green-600 dark:text-green-400 font-semibold text-sm tracking-widest uppercase animate-fade-in">Layanan Terbaik</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-gray-100 mt-2 animate-slide-up">Layanan Favorit Kami</h2>
                <p class="text-gray-600 dark:text-gray-400 text-base md:text-lg max-w-xl mx-auto mt-4 animate-slide-up delay-100">Pilihan terpopuler yang dipercaya ribuan mahasiswa di seluruh Indonesia</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @forelse ($favoriteServices->take(4) as $service)
                    <div class="group bg-gray-100 dark:bg-gray-800 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 border border-gray-200 dark:border-gray-700 flex flex-col">
                        <div class="h-1 bg-indigo-600 dark:bg-indigo-500"></div>
                        
                        <div class="p-6 flex flex-col flex-grow">
                            <div class="mb-4">
                                <div class="inline-flex items-center justify-center w-10 h-10 bg-indigo-100 dark:bg-indigo-700 rounded-lg mb-3 group-hover:bg-indigo-600 dark:group-hover:bg-indigo-600 transition-colors duration-300">
                                    <svg class="w-5 h-5 text-indigo-600 dark:text-indigo-300 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                    </svg>
                                </div>
                                
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors min-h-[48px]">{{ $service->judul }}</h3>
                                <p class="text-sm text-gray-500 dark:text-gray-400 mt-1 font-medium">{{ $service->subjudul }}</p>
                            </div>
                            
                            <div class="mb-4 pb-4 border-b border-gray-200 dark:border-gray-700">
                                <span class="text-sm text-gray-500 dark:text-gray-400 font-medium">Mulai dari</span>
                                <p class="text-2xl font-bold text-indigo-600 dark:text-indigo-400 mt-1">
                                    Rp {{ number_format($service->harga, 0, ',', '.') }}
                                </p>
                            </div>
                            
                            <p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed mb-6 flex-grow">
                                {{ Str::limit($service->deskripsi, 80) }}
                            </p>
                            
                            <a href="{{ route('frontend.services.show', $service) }}" 
                               class="flex items-center justify-center w-full px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold text-sm rounded-lg transition-all duration-300 shadow-sm hover:shadow-md mt-auto">
                                Lihat Detail
                                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-4 text-center py-12 animate-slide-up">
                        <div class="inline-flex items-center justify-center w-12 h-12 bg-gray-200 dark:bg-gray-700 rounded-full mb-3">
                            <svg class="w-6 h-6 text-gray-400 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                            </svg>
                        </div>
                        <p class="text-gray-500 dark:text-gray-400 text-base font-semibold">Belum ada layanan favorit tersedia saat ini.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    <!-- Testimoni Section -->
    <div id="testimoni" class="py-20 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-12">
                <span class="text-green-600 dark:text-green-400 font-semibold text-sm tracking-widest uppercase animate-fade-in">Testimoni Klien</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-gray-100 mt-2 animate-slide-up">Apa Kata Klien Kami?</h2>
                <p class="text-gray-600 dark:text-gray-400 text-base md:text-lg max-w-xl mx-auto mt-4 animate-slide-up delay-100">Testimoni nyata dari mereka yang telah mempercayai kami</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse ($testimonials->take(3) as $testimonial)
                    <div class="bg-gray-100 dark:bg-gray-800 rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 border border-gray-200 dark:border-gray-700 flex flex-col">
                        <div class="flex items-center gap-1 mb-4">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            @endfor
                        </div>
                        
                        <p class="text-gray-600 dark:text-gray-300 text-base leading-relaxed mb-6 flex-grow italic">
                            "{{ $testimonial->isi }}"
                        </p>
                        
                        <div class="flex items-center pt-4 border-t border-gray-200 dark:border-gray-700 mt-auto">
                            <img src="{{ Storage::url($testimonial->foto) }}" 
                                 alt="{{ $testimonial->nama }}" 
                                 class="w-12 h-12 rounded-full object-cover border-2 border-indigo-200 dark:border-indigo-600 shadow-sm">
                            <div class="ml-3">
                                <p class="text-base font-semibold text-gray-900 dark:text-gray-100">{{ $testimonial->nama }}</p>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Klien Terpercaya</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-12 animate-slide-up">
                        <div class="inline-flex items-center justify-center w-12 h-12 bg-gray-200 dark:bg-gray-700 rounded-full mb-3">
                            <svg class="w-6 h-6 text-gray-400 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                            </svg>
                        </div>
                        <p class="text-gray-500 dark:text-gray-400 text-base font-semibold">Testimoni akan segera hadir.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    <!-- Call to Action Section -->
    <div class="py-20 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-gray-100 mb-4 animate-slide-up">Siap Memulai Perjalanan<br>Akademik Anda?</h2>
            <p class="text-gray-600 dark:text-gray-300 text-base md:text-lg mb-6 max-w-xl mx-auto animate-slide-up delay-100">
                Hubungi kami sekarang dan dapatkan konsultasi gratis untuk kebutuhan akademik Anda
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="#layanan" 
                   class="group inline-flex items-center px-6 py-3 bg-green-600 hover:bg-green-700 text-white font-semibold text-base rounded-lg shadow-md transition-all duration-300 transform hover:scale-105 animate-slide-up delay-200">
                    Konsultasi Sekarang
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
                
                <a href="https://wa.me/6285751925074" 
                   class="inline-flex items-center px-6 py-3 bg-indigo-600/20 hover:bg-indigo-600/30 text-gray-900 dark:text-gray-100 font-semibold text-base rounded-lg border border-indigo-500/50 transition-all duration-300 animate-slide-up delay-300">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                    </svg>
                    Hubungi WhatsApp
                </a>
            </div>
            
            <div class="mt-8 flex flex-wrap justify-center gap-6 text-gray-600 dark:text-gray-300">
                <div class="flex items-center animate-slide-up delay-100">
                    <div class="w-8 h-8 bg-green-600/20 rounded-full flex items-center justify-center mr-2">
                        <svg class="w-4 h-4 text-green-600 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="text-left">
                        <p class="font-semibold text-gray-900 dark:text-gray-100 text-sm">Respons Cepat</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Dalam 5 menit</p>
                    </div>
                </div>
                
                <div class="flex items-center animate-slide-up delay-200">
                    <div class="w-8 h-8 bg-green-600/20 rounded-full flex items-center justify-center mr-2">
                        <svg class="w-4 h-4 text-green-600 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="text-left">
                        <p class="font-semibold text-gray-900 dark:text-gray-100 text-sm">Konsultasi Gratis</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Tanpa biaya</p>
                    </div>
                </div>
                
                <div class="flex items-center animate-slide-up delay-300">
                    <div class="w-8 h-8 bg-green-600/20 rounded-full flex items-center justify-center mr-2">
                        <svg class="w-4 h-4 text-green-600 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="text-left">
                        <p class="font-semibold text-gray-900 dark:text-gray-100 text-sm">Terpercaya</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Sejak 2018</p>
                    </div>
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
        .delay-300 { animation-delay: 0.3s; }
    </style>
</x-app-layout>