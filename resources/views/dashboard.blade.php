<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-bold text-2xl md:text-3xl text-gray-800 dark:text-gray-100 leading-tight animate-fade-in">
                {{ __('Dashboard') }}
            </h2>
            <div class="flex items-center space-x-4">
                <span class="text-sm text-gray-500 dark:text-gray-400 font-medium">
                    {{ __('Welcome, ') . Auth::user()->name }}
                </span>
                <a href="{{ route('logout') }}"
                   class="inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-semibold rounded-lg transition-all duration-300 shadow-md hover:shadow-lg">
                    {{ __('Logout') }}
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-16 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-2xl border border-gray-200 dark:border-gray-700 animate-slide-up">
                <div class="p-8 md:p-10 text-gray-900 dark:text-gray-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-2xl font-semibold text-gray-900 dark:text-gray-100 mb-2">
                                {{ __("You're logged in!") }}
                            </h3>
                            <p class="text-gray-600 dark:text-gray-400 text-base md:text-lg">
                                {{ __('Explore your dashboard to manage your account and access our services.') }}
                            </p>
                        </div>
                        <div class="hidden md:block">
                            <svg class="w-16 h-16 text-indigo-500 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
户外
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7a2 2 0 00-2-2H5a2 2 0 00-2 2z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-gray-100 dark:bg-gray-700 p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300">
                            <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-2">
                                {{ __('Quick Actions') }}
                            </h4>
                            <div class="space-y-4">
                                <a href="#layanan" class="block w-full px-4 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-lg text-center transition-all duration-300">
                                    {{ __('View Services') }}
                                </a>
                                <a href="#testimoni" class="block w-full px-4 py-3 bg-white dark:bg-gray-600 border border-gray-200 dark:border-gray-500 text-gray-800 dark:text-gray-200 font-medium rounded-lg text-center transition-all duration-300 hover:bg-gray-50 dark:hover:bg-gray-500">
                                    {{ __('Read Testimonials') }}
                                </a>
                            </div>
                        </div>
                        <div class="bg-gray-100 dark:bg-gray-700 p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300">
                            <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-2">
                                {{ __('Account Overview') }}
                            </h4>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">
                                {{ __('Last Login: ') . Auth::user()->last_login_at ?? __('First time here!') }}
                            </p>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mt-2">
                                {{ __('Account Created: ') . Auth::user()->created_at->format('M d, Y') }}
                            </p>
                        </div>
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
    </style>
</x-app-layout>