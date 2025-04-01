@php use Illuminate\Support\Facades\Storage; @endphp
<x-public-layout>
    <!-- Hero Section -->
    <section class="relative h-[500px] flex items-center justify-center">
        <div class="absolute inset-0">
            <img src="{{ $villas->first()?->featured_image_url ?? asset('images/home/hero.png') }}" alt="Villa Capriani" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/40"></div>
        </div>
        <div class="relative text-center text-white max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl sm:text-5xl font-bold mb-4">Welcome to Villa Capriani Listings</h1>
            <p class="text-lg sm:text-xl">At Villa Capriani, every condominium is privately owned, offering unique layouts and personalized touches that set us apart from traditional resorts.</p>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="bg-[#E6E1D7] py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-12 gap-8">
                <!-- Left side: How It Works description -->
                <div class="col-span-12 md:col-span-5">
                    <h2 class="text-2xl font-semibold text-natural-800 mb-4">How It Works</h2>
                    <p class="text-natural-600">Use our convenient search filters to explore units available to rent or buy, listed directly by the owners. Our streamlined process makes it easy to find your perfect Villa Capriani getaway.</p>
                </div>

                <!-- Right side: Steps -->
                <div class="col-span-12 md:col-span-7">
                    <div class="space-y-4">
                        <!-- Browse Step -->
                        <div class="bg-white rounded-lg p-6 flex items-start gap-4">
                            <div class="text-2xl">🔍</div>
                            <div>
                                <h3 class="font-semibold mb-1">1. Browse</h3>
                                <p class="text-natural-600 text-sm">Find your ideal Villa using our search and filter tools.</p>
                            </div>
                        </div>

                        <!-- Choose Step -->
                        <div class="bg-white rounded-lg p-6 flex items-start gap-4">
                            <div class="text-2xl">❤️</div>
                            <div>
                                <h3 class="font-semibold mb-1">2. Choose</h3>
                                <p class="text-natural-600 text-sm">Select the unit that matches your preferences.</p>
                            </div>
                        </div>

                        <!-- Connect Step -->
                        <div class="bg-white rounded-lg p-6 flex items-start gap-4">
                            <div class="text-2xl">➡️</div>
                            <div>
                                <h3 class="font-semibold mb-1">3. Connect</h3>
                                <p class="text-natural-600 text-sm">Use direct links provided by the owner to complete your booking or to inquire further.</p>
                            </div>
                        </div>

                        <!-- Disclaimer -->
                        <div class="bg-white rounded-lg p-6 flex items-start gap-4">
                            <div class="text-2xl">⭐</div>
                            <div>
                                <h3 class="font-semibold mb-1">Disclaimer</h3>
                                <p class="text-natural-600 text-sm">Villa Capriani HOA provides this listing service for convenience only. All interactions and agreements are solely between the involved parties.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-12 gap-8">
            <!-- Filters Sidebar -->
            <div class="col-span-12 lg:col-span-3">
                <div class="mi-filter-section bg-white rounded-lg shadow-sm p-6 sticky top-6">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="font-semibold text-xl">Filters</h3>
                        <a href="{{ route('villas') }}" class="text-sm text-natural-600 hover:text-natural-900">Clear All</a>
                    </div>

                    <form id="villa-filters" class="space-y-8" method="GET">
                        <!-- Listing Status -->
                        <div class="space-y-3">
                            <label class="font-medium text-natural-700">Listing Status</label>
                            <div class="flex gap-4">
                                <label class="flex items-center">
                                    <input type="radio" name="status" value="rent" class="form-radio" {{ request('status') === 'rent' ? 'checked' : '' }}>
                                    <span class="ml-2">For Rent</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="status" value="sale" class="form-radio" {{ request('status') === 'sale' ? 'checked' : '' }}>
                                    <span class="ml-2">For Sale</span>
                                </label>
                            </div>
                        </div>

                        <!-- Bedrooms -->
                        <div class="space-y-3">
                            <label class="font-medium text-natural-700">Bedrooms</label>
                            <div class="flex flex-col gap-4">
                                @foreach(range(1, 3) as $bed)
                                <label class="flex items-center">
                                    <input type="radio" name="bedrooms" value="{{ $bed }}" class="form-radio" {{ request('bedrooms') == $bed ? 'checked' : '' }}>
                                    <span class="ml-2">{{ $bed }} Bedroom</span>
                                </label>
                                @endforeach
                            </div>
                        </div>

                        <!-- Floorplans (only shown when bedrooms is selected) -->
                        @if(request('bedrooms'))
                        <div class="space-y-3">
                            <label class="font-medium text-natural-700">Floorplan Type</label>
                            <div class="grid grid-cols-2 gap-4">
                                @php
                                    $floorplans = [
                                        1 => ['1.1', '1.2'],
                                        2 => ['2.1', '2.2', '2.3'],
                                        3 => ['3.1', '3.2']
                                    ];
                                    $currentFloorplans = $floorplans[request('bedrooms')] ?? [];
                                @endphp
                                @foreach($currentFloorplans as $plan)
                                <label class="flex items-center">
                                    <input type="radio" name="floorplan" value="{{ $plan }}" class="form-radio" {{ request('floorplan') == $plan ? 'checked' : '' }}>
                                    <span class="ml-2">{{ $plan }}</span>
                                </label>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        <!-- Bathrooms -->
                        <div class="space-y-3">
                            <label class="font-medium text-natural-700">Bathrooms</label>
                            <div class="flex flex-col gap-4">
                                @foreach(range(1, 3) as $bath)
                                <label class="flex items-center">
                                    <input type="radio" name="bathrooms" value="{{ $bath }}" class="form-radio" {{ request('bathrooms') == $bath ? 'checked' : '' }}>
                                    <span class="ml-2">{{ $bath }} Bathroom</span>
                                </label>
                                @endforeach
                            </div>
                        </div>

                        <!-- Floor Level -->
                        <div class="space-y-3">
                            <label class="font-medium text-natural-700">Floor Level</label>
                            <div class="flex flex-col gap-4">
                                @foreach(range(1, 4) as $floor)
                                <label class="flex items-center">
                                    <input type="radio" name="floor_level" value="{{ $floor }}" class="form-radio" {{ request('floor_level') == $floor ? 'checked' : '' }}>
                                    <span class="ml-2">{{ $floor }}{{ ['st', 'nd', 'rd', 'th'][$floor - 1] }} Floor</span>
                                </label>
                                @endforeach
                            </div>
                        </div>

                        <!-- Stories -->
                        <div class="space-y-3">
                            <label class="font-medium text-natural-700">Stories</label>
                            <div class="flex gap-4">
                                @foreach(range(1, 2) as $story)
                                <label class="flex items-center">
                                    <input type="radio" name="stories" value="{{ $story }}" class="form-radio" {{ request('stories') == $story ? 'checked' : '' }}>
                                    <span class="ml-2">{{ $story }} {{ $story === 1 ? 'Story' : 'Stories' }}</span>
                                </label>
                                @endforeach
                            </div>
                        </div>

                        <button type="submit" class="w-full bg-primary-600 text-white py-2 px-4 rounded-lg hover:bg-primary-700 transition-colors">
                            Apply Filters
                        </button>
                    </form>
                </div>
            </div>

            <!-- Villas Grid -->
            <div class="col-span-12 lg:col-span-9">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($villas as $villa)
                    <div class="mi-bento-card bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-all duration-150 hover:translate-y-[-2px]">
                        <div class="aspect-w-16 aspect-h-9">
                            <img src="{{ $villa->featured_image_url ?? asset('images/home/hero.png') }}" alt="{{ $villa->display_name }}" class="w-full h-48 object-cover">
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-2">{{ $villa->display_name }}</h3>
                            <div class="flex flex-wrap gap-2 mb-3">
                                <span class="mi-card-subtitle text-sm bg-natural-100 text-natural-600 px-2 py-1 rounded">Unit {{ $villa->unit_number }}</span>
                                @if($villa->is_for_rent)
                                    <span class="text-sm bg-blue-100 text-blue-600 px-2 py-1 rounded">For Rent</span>
                                @endif
                                @if($villa->is_for_sale)
                                    <span class="text-sm bg-green-100 text-green-600 px-2 py-1 rounded">For Sale</span>
                                @endif
                            </div>
                            <div class="mi-card-features grid grid-cols-2 gap-2 text-sm text-natural-600 mb-4">
                                <div>{{ $villa->bedrooms }} Bed</div>
                                <div>{{ $villa->bathrooms }} Bath</div>
                                <div>{{ $villa->floor_level }}{{ ['st', 'nd', 'rd', 'th'][$villa->floor_level - 1] }} Floor</div>
                                <div>{{ $villa->stories }} {{ $villa->stories > 1 ? 'Stories' : 'Story' }}</div>
                            </div>
                            <div class="flex justify-between items-center">
                                <a href="{{ route('villas.show', $villa) }}" class="mi-button-primary text-sm font-medium px-4 py-2 rounded">Learn More</a>
                                @if($villa->is_for_rent)
                                    <a href="#" class="mi-button-secondary text-sm px-4 py-2 rounded">Book Now</a>
                                @else
                                    <button class="text-sm bg-natural-800 text-white px-4 py-2 rounded hover:bg-natural-700 transition-colors">Contact</button>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="mt-8">
                    {{ $villas->links() }}
                </div>
            </div>
        </div>

        <!-- Disclaimer -->
        <div class="mt-16">
            <div class="mi-filter-section bg-natural-50 border border-natural-200 rounded-lg p-6 text-sm text-natural-600 max-w-[65ch]">
                <h3 class="font-semibold text-natural-900 mb-2">Disclaimer</h3>
                <p>Villa Capriani HOA provides this listing service for convenience only. We do not guarantee the accuracy of individual listings, availability, pricing, property condition, or transactions between owners and guests/buyers. All interactions, agreements, and communications are solely between the involved parties.</p>
            </div>
        </div>
    </div>
</x-public-layout>
