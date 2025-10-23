<x-app-layout>

    {{-- SEO Tags untuk Halaman Tentang Kami --}}
@section('title', 'Tentang Kami - Master Jasa Skripsi')
@section('description', 'Pelajari lebih lanjut tentang Master Jasa Skripsi, tim profesional kami, dan komitmen kami untuk membantu mahasiswa Indonesia lulus tepat waktu.')
{{-- @section('og_image', asset('images/og-tentang.jpg')) --}} {{-- Opsional: gambar khusus --}}


    <!-- Hero Section -->
    <div class="relative dark:bg-gray-900 from-indigo-900 via-indigo-800 to-indigo-700 text-white py-24 md:py-36 overflow-hidden">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center">
                <div class="inline-block mb-4 px-4 py-2 bg-indigo-600 backdrop-blur-sm rounded-full border border-indigo-200">
                    <span class="text-white font-semibold text-sm">Dipercaya Sejak 2018</span>
                </div>
                <h1 class="text-5xl md:text-6xl font-extrabold text-white mb-6 animate-fade-in">
                    Master Jasa Skripsi
                </h1>
                <p class="text-xl md:text-2xl text-indigo-100 max-w-3xl mx-auto leading-relaxed animate-slide-up delay-100 mb-8">
                    Solusi akademik terpercaya untuk mendukung perjalanan pendidikan Anda menuju kesuksesan
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center animate-slide-up delay-200">
                    <a href="https://wa.me/6285751925074" class="inline-flex items-center px-8 py-4 bg-indigo-600 hover:bg-indigo-400 text-white font-semibold text-lg rounded-xl shadow-xl transition-all duration-300 transform hover:scale-105 hover:shadow-2xl">
                        <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                        </svg>
                        Konsultasi Gratis
                    </a>
                    <a href="#testimoni" class="inline-flex items-center px-8 py-4 bg-white/10 backdrop-blur-sm hover:bg-white/20 text-white font-semibold text-lg rounded-xl border-2 border-white/30 transition-all duration-300 transform hover:scale-105">
                        Lihat Testimoni
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="bg-white dark:bg-gray-900 py-12 -mt-16 relative z-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-slate-800 to-gray-800 rounded-2xl shadow-2xl p-8 md:p-10">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center text-white">
                    <div class="animate-slide-up">
                        <div class="text-4xl md:text-5xl font-extrabold mb-2">2018</div>
                        <div class="text-indigo-200 text-lg">Tahun Berdiri</div>
                    </div>
                    <div class="animate-slide-up delay-100">
                        <div class="text-4xl md:text-5xl font-extrabold mb-2">5000+</div>
                        <div class="text-indigo-200 text-lg">Klien Puas</div>
                    </div>
                    <div class="animate-slide-up delay-200">
                        <div class="text-4xl md:text-5xl font-extrabold mb-2">98%</div>
                        <div class="text-indigo-200 text-lg">Tingkat Kepuasan</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Content Section -->
    <div class="py-20 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="animate-slide-up">
                    <span class="text-green-600 font-semibold text-sm tracking-widest uppercase">Tentang Kami</span>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-gray-100 mt-3 mb-6">
                        Mitra Terpercaya untuk Kesuksesan Akademik Anda
                    </h2>
                    <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                        Master Jasa Skripsi adalah platform layanan akademik digital yang berdedikasi untuk membantu mahasiswa mencapai keberhasilan akademik. Dengan tim profesional berpengalaman, kami menyediakan solusi joki skripsi, tesis, dan laporan dengan pendekatan transparan, berkualitas tinggi, dan tepat waktu.
                    </p>
                    <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed mb-8">
                        Sejak 2018, kami telah dipercaya oleh ribuan mahasiswa di seluruh Indonesia untuk mendukung perjalanan akademik mereka. Misi kami adalah memberikan kemudahan dan kepercayaan dalam setiap proyek akademik.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <div class="flex items-center gap-2 text-gray-700 dark:text-gray-300">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span class="font-medium">Tim Profesional</span>
                        </div>
                        <div class="flex items-center gap-2 text-gray-700 dark:text-gray-300">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span class="font-medium">Tepat Waktu</span>
                        </div>
                        <div class="flex items-center gap-2 text-gray-700 dark:text-gray-300">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span class="font-medium">Harga Terjangkau</span>
                        </div>
                    </div>
                </div>

                <!-- Right Content - Feature Cards -->
                <div class="grid gap-6 animate-slide-up delay-200">
                    <div class="dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border-l-4 border-indigo-600">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-indigo-100 dark:bg-indigo-900 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 dark:text-gray-100 mb-2">Kualitas Terjamin</h3>
                                <p class="text-gray-600 dark:text-gray-300">Setiap proyek dikerjakan oleh ahli di bidangnya dengan standar akademik tertinggi</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border-l-4 border-green-600">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-green-100 dark:bg-green-900 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 dark:text-gray-100 mb-2">Privasi Terjaga</h3>
                                <p class="text-gray-600 dark:text-gray-300">Kerahasiaan data dan identitas Anda adalah prioritas utama kami</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border-l-4 border-indigo-600">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-indigo-100 dark:bg-indigo-900 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 dark:text-gray-100 mb-2">Support 24/7</h3>
                                <p class="text-gray-600 dark:text-gray-300">Tim kami siap membantu Anda kapan saja, di mana saja</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div id="testimoni" class="py-20 bg-white dark:bg-gray-900">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-green-600 font-semibold text-sm tracking-widest uppercase animate-fade-in">TESTIMONI</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-gray-100 mt-3 mb-4 animate-slide-up">Apa Kata Klien Kami?</h2>
                <p class="text-gray-600 dark:text-gray-400 text-lg max-w-2xl mx-auto animate-slide-up delay-100">
                    Kepuasan klien adalah bukti komitmen kami terhadap kualitas dan profesionalisme
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($testimonials as $testimonial)
                    <div class="bg-gradient-to-br from-white to-gray-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100 dark:border-gray-700 flex flex-col animate-slide-up delay-200 group">
                        <div class="flex items-center gap-1 mb-6">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="w-6 h-6 text-yellow-400 transform group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            @endfor
                        </div>
                        <svg class="w-10 h-10 text-indigo-200 dark:text-indigo-800 mb-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                        </svg>
                        <p class="text-gray-700 dark:text-gray-300 text-base leading-relaxed mb-6 flex-grow">
                            {{ $testimonial->isi }}
                        </p>
                        <div class="flex items-center pt-6 border-t border-gray-200 dark:border-gray-600">
                            <img src="{{ Storage::url($testimonial->foto) }}" 
                                 alt="{{ $testimonial->nama }}" 
                                 class="w-14 h-14 rounded-full object-cover border-3 border-indigo-200 dark:border-indigo-600 shadow-md">
                            <div class="ml-4">
                                <p class="text-lg font-bold text-gray-900 dark:text-gray-100">{{ $testimonial->nama }}</p>
                                <p class="text-sm text-indigo-600 dark:text-indigo-400 font-medium">Klien Terpusat</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-16 animate-slide-up">
                        <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-gray-100 to-gray-200 dark:from-gray-700 dark:to-gray-800 rounded-full mb-6 shadow-lg">
                            <svg class="w-10 h-10 text-gray-400 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                            </svg>
                        </div>
                        <p class="text-gray-500 dark:text-gray-400 text-lg font-semibold">Belum ada testimoni tersedia</p>
                        <p class="text-gray-400 dark:text-gray-500 text-sm mt-2">Jadilah yang pertama memberikan testimoni</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    <!-- Call to Action Section -->
    <div class="relative py-20 bg-gradient-to-r from-indigo-900 via-indigo-800 to-green-800 text-white overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full mix-blend-overlay filter blur-3xl animate-blob"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-green-300 rounded-full mix-blend-overlay filter blur-3xl animate-blob animation-delay-4000"></div>
        </div>
        
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="text-3xl md:text-4xl font-bold mb-6 animate-slide-up">Siap Memulai Perjalanan Akademik Anda?</h2>
            <p class="text-lg md:text-xl text-indigo-100 mb-10 max-w-2xl mx-auto animate-slide-up delay-100">
                Konsultasikan kebutuhan akademik Anda dengan tim profesional kami. Gratis dan tanpa komitmen!
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center animate-slide-up delay-200">
                <a href="https://wa.me/6281234567890" class="inline-flex items-center px-8 py-4 bg-green-600 hover:bg-green-700 text-white font-bold text-lg rounded-xl shadow-2xl transition-all duration-300 transform hover:scale-105 hover:shadow-green-500/50">
                    <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                    </svg>
                    Chat via WhatsApp
                </a>
                <a href="#testimoni" class="inline-flex items-center px-8 py-4 bg-white/10 backdrop-blur-sm hover:bg-white/20 text-white font-bold text-lg rounded-xl border-2 border-white/50 transition-all duration-300 transform hover:scale-105">
                    Pelajari Lebih Lanjut
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <style>
        @keyframes fade-in {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slide-up {
            from { transform: translateY(30px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        @keyframes blob {
            0% { transform: translate(0px, 0px) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
            100% { transform: translate(0px, 0px) scale(1); }
        }
        .animate-fade-in {
            animation: fade-in 0.8s ease-out;
        }
        .animate-slide-up {
            animation: slide-up 0.8s ease-out;
            animation-fill-mode: both;
        }
        .animate-blob {
            animation: blob 7s infinite;
        }
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .animation-delay-2000 { animation-delay: 2s; }
        .animation-delay-4000 { animation-delay: 4s; }
    </style>
</x-app-layout>