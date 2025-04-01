<x-public-layout>
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Hero Section -->
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl">Properties for Sale</h1>
                <p class="mt-4 text-xl text-gray-500">Own your piece of paradise at Villa Capriani</p>
            </div>

            <!-- Filter Section -->
            <div class="mt-12">
                <div class="mi-filter-section">
                    <form action="{{ route('buying') }}" method="GET" class="space-y-8">
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

                        <!-- Price Range Filter -->
                        <div class="mi-filter-group">
                            <h3 class="mi-filter-title">Price Range</h3>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm text-natural-600">Min Price</label>
                                    <input type="number" name="min_price" value="{{ request('min_price') }}" 
                                           class="mt-1 block w-full rounded-md border-natural-300 shadow-sm focus:border-primary-500 focus:ring-primary-500">
                                </div>
                                <div>
                                    <label class="block text-sm text-natural-600">Max Price</label>
                                    <input type="number" name="max_price" value="{{ request('max_price') }}"
                                           class="mt-1 block w-full rounded-md border-natural-300 shadow-sm focus:border-primary-500 focus:ring-primary-500">
                                </div>
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
                        <p class="text-lg font-semibold text-primary-500 mt-2">${{ number_format($villa->price) }}</p>
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
