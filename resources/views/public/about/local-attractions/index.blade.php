<x-public-layout>
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Hero Section -->
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl">Local Attractions</h1>
                <p class="mt-4 text-xl text-gray-500">Discover the best of North Topsail Beach</p>
            </div>

            <!-- Categories -->
            <div class="mt-12">
                <div class="flex flex-wrap justify-center gap-4">
                    @foreach(['Dining', 'Activities', 'Shopping', 'Nature', 'Entertainment'] as $category)
                    <button class="mi-button-natural">{{ $category }}</button>
                    @endforeach
                </div>
            </div>

            <!-- Attractions Grid -->
            <div class="mt-12 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                @foreach($attractions as $attraction)
                <div class="mi-card">
                    <div class="mi-card-image-container">
                        <div class="mi-card-image-overlay"></div>
                        <img src="{{ $attraction->featured_image }}" alt="{{ $attraction->title }}" class="mi-card-image">
                    </div>
                    <div class="mi-card-content">
                        <div class="text-sm text-primary-500">{{ $attraction->category }}</div>
                        <h3 class="mi-card-title mt-2">{{ $attraction->title }}</h3>
                        <p class="mt-2 text-natural-50">{{ $attraction->excerpt }}</p>
                        <div class="mt-4 flex items-center justify-between">
                            <div class="text-sm text-natural-50">
                                <span>{{ $attraction->distance }} miles away</span>
                            </div>
                            <a href="{{ route('about.local-attractions.show', $attraction) }}" class="mi-button-outline-natural">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Map Section -->
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-gray-900 mb-8">Area Map</h2>
                <div class="bg-white rounded-lg shadow-sm h-96">
                    <!-- Map component will be rendered here -->
                    @livewire('attractions-map')
                </div>
            </div>
        </div>
    </div>
</x-public-layout>
