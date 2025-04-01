<x-public-layout>
    <!-- Hero Section with Ocean Background -->
    <div class="relative h-[60vh] bg-natural-900">
        <div class="absolute inset-0">
            <img src="/images/Villas /Bedroom/Shanna_Middleton_A_modern,_minimalist_bedroom_with_a_serene_ocean_v_fcac289b-b21b-42a9-8cb5-fe86117d0786.png" 
                 alt="Luxury Villa Interior" 
                 class="w-full h-full object-cover opacity-70">
            <div class="absolute inset-0 bg-gradient-to-b from-natural-900/50 to-natural-900/80"></div>
        </div>
        <div class="relative h-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col justify-center items-center text-center">
            <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">Find Your Perfect Getaway</h1>
            <p class="text-xl md:text-2xl text-white/90 max-w-2xl">Experience luxury oceanfront living at Villa Capriani</p>
        </div>
    </div>

    <!-- Featured Amenities Bento Grid -->
    <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Ocean Views -->
                <div class="bg-natural-50 rounded-xl p-8 shadow-sm hover:shadow-md transition-shadow">
                    <div class="text-primary-600 mb-4">
                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-natural-900 mb-2">Breathtaking Ocean Views</h3>
                    <p class="text-natural-600">Wake up to stunning panoramic views of the Atlantic Ocean from your private balcony.</p>
                </div>

                <!-- Beach Access -->
                <div class="bg-natural-50 rounded-xl p-8 shadow-sm hover:shadow-md transition-shadow">
                    <div class="text-primary-600 mb-4">
                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-natural-900 mb-2">Direct Beach Access</h3>
                    <p class="text-natural-600">Step right onto the pristine sands of North Topsail Beach from your villa.</p>
                </div>

                <!-- Luxury Amenities -->
                <div class="bg-natural-50 rounded-xl p-8 shadow-sm hover:shadow-md transition-shadow">
                    <div class="text-primary-600 mb-4">
                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-natural-900 mb-2">Resort-Style Living</h3>
                    <p class="text-natural-600">Enjoy access to pools, tennis courts, and our on-site restaurant.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Search and Results Section -->
    <div class="bg-natural-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-4 lg:gap-8">

                <!-- Filter Section -->
                <div class="lg:col-span-1">
                    <div class="mi-filter-section sticky top-24">
                        <form action="{{ route('villas') }}" method="GET" class="space-y-8">
                        <!-- Bedrooms Filter -->
                        <div class="mi-filter-group">
                            <h3 class="mi-filter-title">Bedrooms</h3>
                            <div class="mi-filter-options">
                                @foreach(['1', '2', '3', '4'] as $bedroom)
                                <label class="mi-filter-label">
                                    <input type="checkbox" name="bedrooms[]" value="{{ $bedroom }}" class="mi-form-radio"
                                        {{ in_array($bedroom, request('bedrooms', [])) ? 'checked' : '' }}>
                                    <span class="mi-filter-text">{{ $bedroom }} BR</span>
                                </label>
                                @endforeach
                            </div>
                        </div>

                        <!-- View Type Filter -->
                        <div class="mi-filter-group">
                            <h3 class="mi-filter-title">View</h3>
                            <div class="mi-filter-options">
                                @foreach(['Ocean Front', 'Ocean View', 'Sound View'] as $view)
                                <label class="mi-filter-label">
                                    <input type="checkbox" name="views[]" value="{{ $view }}" class="mi-form-radio"
                                        {{ in_array($view, request('views', [])) ? 'checked' : '' }}>
                                    <span class="mi-filter-text">{{ $view }}</span>
                                </label>
                                @endforeach
                            </div>
                        </div>

                        <!-- Floor Level Filter -->
                        <div class="mi-filter-group">
                            <h3 class="mi-filter-title">Floor Level</h3>
                            <div class="mi-filter-options">
                                @foreach(['Ground', '2nd', '3rd', '4th'] as $floor)
                                <label class="mi-filter-label">
                                    <input type="checkbox" name="floors[]" value="{{ $floor }}" class="mi-form-radio"
                                        {{ in_array($floor, request('floors', [])) ? 'checked' : '' }}>
                                    <span class="mi-filter-text">{{ $floor }}</span>
                                </label>
                                @endforeach
                            </div>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="mi-button-primary">Apply Filters</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Results Grid -->
            <div class="mt-12 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                @foreach($villas as $villa)
                <div class="mi-card">
                    <div class="mi-card-image-container">
                        <div class="mi-card-image-overlay"></div>
                        <img src="{{ $villa->featured_image }}" alt="{{ $villa->display_name }}" class="mi-card-image">
                    </div>
                    <div class="mi-card-content">
                        <h3 class="mi-card-title">{{ $villa->display_name }}</h3>
                        <div class="mt-4 flex justify-between items-center">
                            <div class="text-sm text-natural-50">
                                <span>{{ $villa->bedrooms }} beds</span>
                                <span class="mx-2">•</span>
                                <span>{{ $villa->floor_level }} floor</span>
                            </div>
                            <a href="{{ route('villas.show', $villa) }}" class="mi-button-outline-natural">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-12">
                {{ $villas->links() }}
            </div>
        </div>
    </div>
</x-public-layout>
