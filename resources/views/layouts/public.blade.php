<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Villa Capriani') }}</title>
    <x-fonts />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="font-sans antialiased bg-gray-100 min-h-screen">
    <div class="relative min-h-screen">
        <header x-data="{ scrolled: false }" x-init="window.addEventListener('scroll', () => { scrolled = window.pageYOffset > 0 })" :class="{ 'scrolled': scrolled }" class="mi-header sticky top-0 z-50 w-full py-4">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center h-16">
                        <a href="/" class="block h-full">
                            <img src="{{ asset('images/Branding/Long Logos/logo-long-base-dark.png') }}" alt="Villa Capriani" class="h-full w-auto object-contain"
                        </a>
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                            Home
                        </a>
                        <a href="{{ route('renting') }}" class="nav-link {{ request()->routeIs('renting') ? 'active' : '' }}">
                            Renting
                        </a>
                        <a href="{{ route('buying') }}" class="nav-link {{ request()->routeIs('buying') ? 'active' : '' }}">
                            Buying
                        </a>
                        <a href="{{ route('amenities') }}" class="nav-link {{ request()->routeIs('amenities') ? 'active' : '' }}">
                            Amenities
                        </a>
                        <div class="relative" x-data="{ open: false }">
                            <button @click="open = !open" class="nav-link">
                                About
                                <svg class="ml-2 -mr-0.5 h-4 w-4 inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <div x-show="open" @click.away="open = false" class="nav-dropdown">
                                <div class="nav-dropdown-content">
                                    <div class="nav-dropdown-items">
                                        <a href="{{ route('about.villa-view') }}" class="nav-dropdown-item">
                                            <div class="nav-dropdown-item-content">
                                                <p class="nav-dropdown-item-title">Villa View</p>
                                                <p class="nav-dropdown-item-description">Stay updated with our community blog</p>
                                            </div>
                                        </a>
                                        <a href="{{ route('about.local-attractions') }}" class="nav-dropdown-item">
                                            <div class="nav-dropdown-item-content">
                                                <p class="nav-dropdown-item-title">Local Attractions</p>
                                                <p class="nav-dropdown-item-description">Discover North Topsail Beach</p>
                                            </div>
                                        </a>
                                        <a href="{{ route('about.roadmap') }}" class="nav-dropdown-item">
                                            <div class="nav-dropdown-item-content">
                                                <p class="nav-dropdown-item-title">Roadmap</p>
                                                <p class="nav-dropdown-item-description">Our vision for the future</p>
                                            </div>
                                        </a>
                                        <a href="{{ route('about.faq') }}" class="nav-dropdown-item">
                                            <div class="nav-dropdown-item-content">
                                                <p class="nav-dropdown-item-title">FAQ</p>
                                                <p class="nav-dropdown-item-description">Common questions answered</p>
                                            </div>
                                        </a>
                                        <a href="{{ route('about.committees') }}" class="nav-dropdown-item">
                                            <div class="nav-dropdown-item-content">
                                                <p class="nav-dropdown-item-title">Committees</p>
                                                <p class="nav-dropdown-item-description">Meet our community leaders</p>
                                            </div>
                                        </a>
                                        <a href="{{ route('about.contact') }}" class="nav-dropdown-item">
                                            <div class="nav-dropdown-item-content">
                                                <p class="nav-dropdown-item-title">Contact</p>
                                                <p class="nav-dropdown-item-description">Get in touch with us</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center">
                    @auth('owner')
                        <a href="{{ route('owner.dashboard') }}" class="btn-primary">Dashboard</a>
                    @else
                        <a href="{{ route('owner.login') }}" class="btn-primary">Owner Login</a>
                    @endauth
                </div>
            </div>
        </nav>
        </header>

        <main>
        {{ $slot }}
        </main>
    </div>

    <footer class="bg-gray-800 text-white mt-12">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact</h3>
                    <p>Villa Capriani</p>
                    <p>2000 New River Inlet Road</p>
                    <p>North Topsail Beach, NC 28460</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('renting') }}" class="hover:text-gray-300">Renting</a></li>
                        <li><a href="{{ route('buying') }}" class="hover:text-gray-300">Buying</a></li>
                        <li><a href="{{ route('amenities') }}" class="hover:text-gray-300">Amenities</a></li>
                        <li><a href="{{ route('about.contact') }}" class="hover:text-gray-300">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Owner Resources</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('owner.login') }}" class="hover:text-gray-300">Owner Login</a></li>
                        <li><a href="{{ route('about.committees') }}" class="hover:text-gray-300">Committees</a></li>
                        <li><a href="{{ route('about.roadmap') }}" class="hover:text-gray-300">Roadmap</a></li>
                        <li><a href="{{ route('about.faq') }}" class="hover:text-gray-300">FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-700 text-center">
                <p>&copy; {{ date('Y') }} Villa Capriani. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <style>
        .nav-link {
            @apply inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 hover:text-gray-900;
        }
        .nav-link.active {
            @apply border-b-2 border-indigo-500 text-gray-900;
        }
        .dropdown-item {
            @apply block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100;
        }
        .btn-primary {
            @apply inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500;
        }
    </style>
</body>
</html>
