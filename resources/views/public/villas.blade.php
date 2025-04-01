<x-public-layout>
    <!-- Hero Section with Search -->
    <section class="relative bg-natural-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-bold text-natural-900 sm:text-5xl">Find Your Perfect Villa</h1>
                <p class="mt-4 text-xl text-natural-600">Discover luxury living at Villa Capriani</p>
            </div>
            
            <!-- Search Filters -->
            <div class="mt-12">
                <div class="mi-filter-section">
                    <form class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- View Type Filter -->
                        <div class="mi-filter-group">
                            <label class="mi-filter-title">View Type</label>
                            <div class="mi-filter-options">
                                <label class="mi-filter-label">
                                    <input type="checkbox" class="form-checkbox" name="view_type[]" value="ocean">
                                    <span class="mi-filter-text">Ocean View</span>
                                </label>
                                <label class="mi-filter-label">
                                    <input type="checkbox" class="form-checkbox" name="view_type[]" value="pool">
                                    <span class="mi-filter-text">Pool View</span>
                                </label>
                            </div>
                        </div>

                        <!-- Bedrooms Filter -->
                        <div class="mi-filter-group">
                            <label class="mi-filter-title">Bedrooms</label>
                            <select class="form-select w-full" name="bedrooms">
                                <option value="">Any</option>
                                <option value="1">1 Bedroom</option>
                                <option value="2">2 Bedrooms</option>
                                <option value="3">3 Bedrooms</option>
                            </select>
                        </div>

                        <!-- Floor Level Filter -->
                        <div class="mi-filter-group">
                            <label class="mi-filter-title">Floor Level</label>
                            <select class="form-select w-full" name="floor">
                                <option value="">Any</option>
                                <option value="1">1st Floor</option>
                                <option value="2">2nd Floor</option>
                                <option value="3">3rd Floor</option>
                                <option value="4">4th Floor</option>
                            </select>
                        </div>

                        <!-- Status Filter -->
                        <div class="mi-filter-group">
                            <label class="mi-filter-title">Status</label>
                            <select class="form-select w-full" name="status">
                                <option value="">All</option>
                                <option value="rent">For Rent</option>
                                <option value="sale">For Sale</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Villas Grid -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Bento Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($villas as $villa)
                <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="aspect-w-16 aspect-h-9">
                        <img src="{{ $villa->featured_image }}" alt="{{ $villa->name }}" class="object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-natural-900">{{ $villa->name }}</h3>
                        <div class="mt-2 flex items-center text-natural-600">
                            <span class="flex items-center">
                                <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                </svg>
                                Unit {{ $villa->unit_number }}
                            </span>
                            <span class="mx-3">•</span>
                            <span class="flex items-center">
                                <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                                {{ $villa->bedrooms }} BR
                            </span>
                        </div>
                        <div class="mt-4">
                            <span class="text-lg font-bold text-primary-600">
                                @if($villa->for_sale)
                                    ${{ number_format($villa->sale_price) }}
                                @else
                                    Contact for Pricing
                                @endif
                            </span>
                        </div>
                        <div class="mt-4 flex space-x-3">
                            <a href="{{ route('villas.show', $villa) }}" class="mi-button-primary flex-1 text-center">View Details</a>
                            @if($villa->for_rent)
                            <a href="#" class="mi-button-secondary flex-1 text-center">Book Now</a>
                            @endif
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
    </section>
</x-public-layout>
