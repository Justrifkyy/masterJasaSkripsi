@php
// Cek apakah kita sedang berada di dalam rute admin
$isAdminRoute = request()->routeIs('admin.*');
@endphp

<nav x-data="{ open: false }" class="bg-gray-50 dark:bg-gray-900 border-b border-gray-200 dark:border-gray-700 shadow-md">
    <!-- Primary Navigation Menu -->
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="animate-slide-up">
                        <x-application-logo class="block h-9 w-auto fill-current text-indigo-600 dark:text-indigo-400 transition-transform duration-300 hover:scale-105" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-4 sm:-my-px sm:ms-8 sm:flex items-center">
                    @if(Auth::check() && Auth::user()->role === 'admin' && $isAdminRoute)
                        <!-- == NAVIGASI PANEL ADMIN (Desktop) == -->
                        <x-nav-link :href="route('home')" :active="false" class="text-green-600 font-semibold hover:text-green-700 hover:bg-green-100 dark:hover:bg-gray-800 px-3 py-2 rounded-lg transition-all duration-300 animate-fade-in">
                            {{ __('Lihat Website') }}
                        </x-nav-link>
                        <x-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')" class="text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 hover:bg-indigo-50 dark:hover:bg-gray-800 px-3 py-2 rounded-lg transition-all duration-300 animate-fade-in delay-100">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        <x-nav-link :href="route('admin.services.index')" :active="request()->routeIs('admin.services.*')" class="text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 hover:bg-indigo-50 dark:hover:bg-gray-800 px-3 py-2 rounded-lg transition-all duration-300 animate-fade-in delay-200">
                            {{ __('Layanan') }}
                        </x-nav-link>
                        <x-nav-link :href="route('admin.testimonials.index')" :active="request()->routeIs('admin.testimonials.*')" class="text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 hover:bg-indigo-50 dark:hover:bg-gray-800 px-3 py-2 rounded-lg transition-all duration-300 animate-fade-in delay-300">
                            {{ __('Testimoni') }}
                        </x-nav-link>
                        <x-nav-link :href="route('admin.users.index')" :active="request()->routeIs('admin.users.*')" class="text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 hover:bg-indigo-50 dark:hover:bg-gray-800 px-3 py-2 rounded-lg transition-all duration-300 animate-fade-in delay-400">
                            {{ __('User') }}
                        </x-nav-link>
                        <x-nav-link :href="route('admin.orders.index')" :active="request()->routeIs('admin.orders.*')" class="text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 hover:bg-indigo-50 dark:hover:bg-gray-800 px-3 py-2 rounded-lg transition-all duration-300 animate-fade-in delay-500">
                            {{ __('Pesanan') }}
                        </x-nav-link>
                    @else
                        <!-- == NAVIGASI FRONTEND (Desktop) == -->
                        <x-nav-link :href="route('home')" :active="request()->routeIs('home')" class="text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 hover:bg-indigo-50 dark:hover:bg-gray-800 px-3 py-2 rounded-lg transition-all duration-300 animate-fade-in">
                            {{ __('Beranda') }}
                        </x-nav-link>
                        <x-nav-link :href="route('frontend.services.list')" :active="request()->routeIs('frontend.services.*')" class="text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 hover:bg-indigo-50 dark:hover:bg-gray-800 px-3 py-2 rounded-lg transition-all duration-300 animate-fade-in delay-100">
                            {{ __('Layanan') }}
                        </x-nav-link>
                        <x-nav-link :href="route('frontend.about')" :active="request()->routeIs('frontend.about')" class="text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 hover:bg-indigo-50 dark:hover:bg-gray-800 px-3 py-2 rounded-lg transition-all duration-300 animate-fade-in delay-200">
                            {{ __('Tentang Kami') }}
                        </x-nav-link>
                        <x-nav-link :href="route('frontend.how-to-order')" :active="request()->routeIs('frontend.how-to-order')" class="text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 hover:bg-indigo-50 dark:hover:bg-gray-800 px-3 py-2 rounded-lg transition-all duration-300 animate-fade-in delay-300">
                            {{ __('Cara Pesan') }}
                        </x-nav-link>
                    @endif
                </div>
            </div>

            <!-- Settings Dropdown (Desktop) -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                @auth
                    <!-- Jika sudah login -->
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-semibold rounded-lg transition-all duration-300 shadow-md hover:shadow-lg focus:outline-none animate-slide-up">
                                <div>{{ Auth::user()->name }}</div>
                                <div class="ms-2">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')" class="hover:bg-indigo-50 dark:hover:bg-gray-800 transition-all duration-300">
                                {{ __('Profil') }}
                            </x-dropdown-link>

                            <!-- Link Admin Panel (Hanya muncul jika Admin & ada di Frontend) -->
                            @if(Auth::user()->role === 'admin' && !$isAdminRoute)
                                <x-dropdown-link :href="route('admin.dashboard')" class="hover:bg-indigo-50 dark:hover:bg-gray-800 transition-all duration-300">
                                    {{ __('Panel Admin') }}
                                </x-dropdown-link>
                            @endif

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();"
                                        class="hover:bg-indigo-50 dark:hover:bg-gray-800 transition-all duration-300">
                                    {{ __('Keluar') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @else
                    <!-- Jika belum login (Tamu) -->
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-300 font-semibold hover:text-indigo-600 dark:hover:text-indigo-400 transition-all duration-300 animate-slide-up">Masuk</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ms-4 text-sm text-gray-700 dark:text-gray-300 font-semibold hover:text-indigo-600 dark:hover:text-indigo-400 transition-all duration-300 animate-slide-up delay-100">Daftar</a>
                    @endif
                @endauth
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-lg text-gray-500 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400 hover:bg-indigo-50 dark:hover:bg-gray-800 focus:outline-none transition-all duration-300">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-gray-50 dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700 shadow-sm">
        <div class="pt-4 pb-3 space-y-2 px-4">
            @if(Auth::check() && Auth::user()->role === 'admin' && $isAdminRoute)
                <!-- == NAVIGASI PANEL ADMIN (Mobile) == -->
                <x-responsive-nav-link :href="route('home')" :active="false" class="text-green-600 font-semibold hover:text-green-700 hover:bg-green-100 dark:hover:bg-gray-800 px-3 py-2 rounded-lg transition-all duration-300">
                    {{ __('Lihat Website') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')" class="text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 hover:bg-indigo-50 dark:hover:bg-gray-800 px-3 py-2 rounded-lg transition-all duration-300">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('admin.services.index')" :active="request()->routeIs('admin.services.*')" class="text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 hover:bg-indigo-50 dark:hover:bg-gray-800 px-3 py-2 rounded-lg transition-all duration-300">
                    {{ __('Layanan') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('admin.testimonials.index')" :active="request()->routeIs('admin.testimonials.*')" class="text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 hover:bg-indigo-50 dark:hover:bg-gray-800 px-3 py-2 rounded-lg transition-all duration-300">
                    {{ __('Testimoni') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('admin.users.index')" :active="request()->routeIs('admin.users.*')" class="text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 hover:bg-indigo-50 dark:hover:bg-gray-800 px-3 py-2 rounded-lg transition-all duration-300">
                    {{ __('User') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('admin.orders.index')" :active="request()->routeIs('admin.orders.*')" class="text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 hover:bg-indigo-50 dark:hover:bg-gray-800 px-3 py-2 rounded-lg transition-all duration-300">
                    {{ __('Pesanan') }}
                </x-responsive-nav-link>
            @else
                <!-- == NAVIGASI FRONTEND (Mobile) == -->
                <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')" class="text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 hover:bg-indigo-50 dark:hover:bg-gray-800 px-3 py-2 rounded-lg transition-all duration-300">
                    {{ __('Beranda') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('frontend.services.list')" :active="request()->routeIs('frontend.services.*')" class="text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 hover:bg-indigo-50 dark:hover:bg-gray-800 px-3 py-2 rounded-lg transition-all duration-300">
                    {{ __('Layanan') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('frontend.about')" :active="request()->routeIs('frontend.about')" class="text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 hover:bg-indigo-50 dark:hover:bg-gray-800 px-3 py-2 rounded-lg transition-all duration-300">
                    {{ __('Tentang Kami') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('frontend.how-to-order')" :active="request()->routeIs('frontend.how-to-order')" class="text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 hover:bg-indigo-50 dark:hover:bg-gray-800 px-3 py-2 rounded-lg transition-all duration-300">
                    {{ __('Cara Pesan') }}
                </x-responsive-nav-link>
            @endif
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-3 border-t border-gray-200 dark:border-gray-700 px-4">
            @auth
                <!-- Jika sudah login -->
                <div class="px-4 mb-3">
                    <div class="font-medium text-base text-gray-800 dark:text-gray-100">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500 dark:text-gray-400">{{ Auth::user()->email }}</div>
                </div>

                <div class="space-y-2">
                    <x-responsive-nav-link :href="route('profile.edit')" class="hover:bg-indigo-50 dark:hover:bg-gray-800 px-3 py-2 rounded-lg transition-all duration-300">
                        {{ __('Profil') }}
                    </x-responsive-nav-link>

                    <!-- Link Admin Panel (Hanya muncul jika Admin & ada di Frontend) -->
                    @if(Auth::user()->role === 'admin' && !$isAdminRoute)
                        <x-responsive-nav-link :href="route('admin.dashboard')" class="hover:bg-indigo-50 dark:hover:bg-gray-800 px-3 py-2 rounded-lg transition-all duration-300">
                            {{ __('Panel Admin') }}
                        </x-responsive-nav-link>
                    @endif

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();"
                                class="hover:bg-indigo-50 dark:hover:bg-gray-800 px-3 py-2 rounded-lg transition-all duration-300">
                            {{ __('Keluar') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            @else
                <!-- Jika belum login (Tamu) -->
                <div class="space-y-2">
                    <x-responsive-nav-link :href="route('login')" class="hover:bg-indigo-50 dark:hover:bg-gray-800 px-3 py-2 rounded-lg transition-all duration-300">
                        {{ __('Masuk') }}
                    </x-responsive-nav-link>
                    @if (Route::has('register'))
                        <x-responsive-nav-link :href="route('register')" class="hover:bg-indigo-50 dark:hover:bg-gray-800 px-3 py-2 rounded-lg transition-all duration-300">
                            {{ __('Daftar') }}
                        </x-responsive-nav-link>
                    @endif
                </div>
            @endauth
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
        .delay-400 { animation-delay: 0.4s; }
        .delay-500 { animation-delay: 0.5s; }
    </style>
</nav>