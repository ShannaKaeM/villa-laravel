<x-public-layout>
    <!-- Hero section -->
    <div class="mi-hero-base mi-home-hero">
        <div class="mi-hero-background">
            <img src="{{ asset('images/home/hero.png') }}" alt="Villa Capriani Ocean View" class="mi-hero-image">
            <div class="mi-hero-overlay"></div>
        </div>
        <div class="mi-hero-content">
            <div class="mi-hero-container">
                <div class="mi-hero-inner">
                    <h1 class="mi-hero-title">Welcome to Villa Capriani</h1>
                    <p class="mi-hero-description">Experience luxury beachfront living at North Topsail Beach's premier resort-style condominium community.</p>
                    <div class="mi-hero-buttons">
                        <a href="{{ route('renting') }}" class="mi-hero-button-primary">View Rentals</a>
                        <a href="{{ route('buying') }}" class="mi-hero-button-secondary">Properties for Sale</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Properties -->
    <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Featured Properties</h2>
            <p class="mt-4 text-lg text-gray-500">Discover our most sought-after villas</p>
        </div>

        <div class="mt-12 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach($featuredVillas as $villa)
            <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                <div class="relative h-48">
                    <img src="{{ $villa->featured_image }}" alt="{{ $villa->display_name }}" class="w-full h-full object-cover">
                    @if($villa->for_sale)
                        <div class="absolute top-2 right-2 bg-green-500 text-white px-2 py-1 rounded text-sm">For Sale</div>
                    @endif
                    @if($villa->for_rent)
                        <div class="absolute top-2 right-2 bg-blue-500 text-white px-2 py-1 rounded text-sm">For Rent</div>
                    @endif
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold">{{ $villa->display_name }}</h3>
                    <p class="mt-2 text-gray-600 line-clamp-2">{{ $villa->description }}</p>
                    <div class="mt-4 flex justify-between items-center">
                        <div class="text-sm text-gray-500">
                            <span>{{ $villa->bedrooms }} beds</span>
                            <span class="mx-2">•</span>
                            <span>{{ $villa->floor_level }} floor</span>
                        </div>
                        <a href="{{ route($villa->for_sale ? 'buying' : 'renting') }}" class="text-indigo-600 hover:text-indigo-800">
                            Learn more →
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Amenities Preview -->
    <div class="bg-gray-50 py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Resort-Style Amenities</h2>
                <p class="mt-4 text-lg text-gray-500">Experience the luxury of beachfront living</p>
            </div>

            <div class="mt-12 grid gap-8 md:grid-cols-3">
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <h3 class="text-lg font-semibold">Private Beach Access</h3>
                    <p class="mt-2 text-gray-600">Direct access to pristine North Topsail Beach</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <h3 class="text-lg font-semibold">Swimming Pools</h3>
                    <p class="mt-2 text-gray-600">Multiple pools including oceanfront options</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <h3 class="text-lg font-semibold">Restaurant & Bar</h3>
                    <p class="mt-2 text-gray-600">On-site dining with ocean views</p>
                </div>
            </div>

            <div class="mt-10 text-center">
                <a href="{{ route('amenities') }}" class="btn-primary">View All Amenities</a>
            </div>
        </div>
    </div>
</x-public-layout>
