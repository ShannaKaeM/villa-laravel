<x-public-layout>
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Hero Section -->
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl">Resort Amenities</h1>
                <p class="mt-4 text-xl text-gray-500">Experience luxury living at Villa Capriani</p>
            </div>

            <!-- Amenities Grid -->
            <div class="mt-12 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                @foreach($amenities as $amenity)
                <div class="mi-card">
                    <div class="mi-card-image-container">
                        <div class="mi-card-image-overlay"></div>
                        <img src="{{ $amenity->featured_image }}" alt="{{ $amenity->title }}" class="mi-card-image">
                    </div>
                    <div class="mi-card-content">
                        <h3 class="mi-card-title">{{ $amenity->title }}</h3>
                        <p class="mt-2 text-natural-50">{{ $amenity->description }}</p>
                        <div class="mt-4 flex justify-end">
                            <a href="{{ route('amenities.show', $amenity) }}" class="mi-button-outline-natural">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-public-layout>
