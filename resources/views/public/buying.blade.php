<x-public-layout>
    <!-- Hero Section -->
    <section class="relative bg-natural-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-bold text-natural-900 sm:text-5xl">Buying at Villa Capriani</h1>
                <p class="mt-4 text-xl text-natural-600">Your gateway to luxury oceanfront living</p>
            </div>
        </div>
    </section>

    <!-- Benefits Grid -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Investment Value -->
                <div class="bg-white p-8 rounded-xl shadow-sm">
                    <div class="text-primary-600">
                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="mt-4 text-xl font-semibold text-natural-900">Strong Investment Value</h3>
                    <p class="mt-2 text-natural-600">Prime oceanfront real estate with consistent appreciation and rental income potential.</p>
                </div>

                <!-- Location -->
                <div class="bg-white p-8 rounded-xl shadow-sm">
                    <div class="text-primary-600">
                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="mt-4 text-xl font-semibold text-natural-900">Prime Location</h3>
                    <p class="mt-2 text-natural-600">Direct beach access, close to dining, shopping, and entertainment in North Topsail Beach.</p>
                </div>

                <!-- Amenities -->
                <div class="bg-white p-8 rounded-xl shadow-sm">
                    <div class="text-primary-600">
                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                        </svg>
                    </div>
                    <h3 class="mt-4 text-xl font-semibold text-natural-900">Luxury Amenities</h3>
                    <p class="mt-2 text-natural-600">Access to pools, tennis courts, restaurant, and professionally maintained grounds.</p>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="mt-16 text-center">
                <h2 class="text-3xl font-bold text-natural-900">Ready to Find Your Villa?</h2>
                <p class="mt-4 text-xl text-natural-600">Browse our available properties or contact us for more information.</p>
                <div class="mt-8 flex justify-center space-x-4">
                    <a href="{{ route('villas') }}" class="mi-button-primary">View Available Villas</a>
                    <a href="{{ route('contact') }}" class="mi-button-secondary">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
</x-public-layout>
