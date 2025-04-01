<x-public-layout>
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Hero Section -->
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl">On-Site Restaurant</h1>
                <p class="mt-4 text-xl text-gray-500">Oceanfront dining at its finest</p>
            </div>

            <!-- Restaurant Info -->
            <div class="mt-12 grid gap-12 lg:grid-cols-2">
                <div>
                    <img src="{{ asset('images/restaurant.jpg') }}" alt="Restaurant" class="w-full h-96 object-cover rounded-lg shadow-lg">
                </div>
                <div class="space-y-8">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900">Hours of Operation</h2>
                        <div class="mt-4 space-y-2 text-gray-600">
                            <p><span class="font-semibold">Breakfast:</span> 7:00 AM - 11:00 AM</p>
                            <p><span class="font-semibold">Lunch:</span> 11:30 AM - 3:00 PM</p>
                            <p><span class="font-semibold">Dinner:</span> 5:00 PM - 10:00 PM</p>
                        </div>
                    </div>

                    <div>
                        <h2 class="text-2xl font-bold text-gray-900">Reservations</h2>
                        <p class="mt-4 text-gray-600">For reservations, please call us at (555) 123-4567 or book online.</p>
                        <div class="mt-6">
                            <a href="#" class="mi-button-primary">Book a Table</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Menus -->
            <div class="mt-16">
                <h2 class="text-3xl font-bold text-gray-900 text-center">Our Menus</h2>
                <div class="mt-8 grid gap-8 md:grid-cols-3">
                    <div class="mi-card">
                        <div class="mi-card-content">
                            <h3 class="mi-card-title">Breakfast Menu</h3>
                            <p class="mt-2 text-natural-50">Start your day with our delicious breakfast options</p>
                            <div class="mt-4 flex justify-end">
                                <a href="#" class="mi-button-outline-natural">View Menu</a>
                            </div>
                        </div>
                    </div>
                    <div class="mi-card">
                        <div class="mi-card-content">
                            <h3 class="mi-card-title">Lunch Menu</h3>
                            <p class="mt-2 text-natural-50">Fresh and light lunch selections</p>
                            <div class="mt-4 flex justify-end">
                                <a href="#" class="mi-button-outline-natural">View Menu</a>
                            </div>
                        </div>
                    </div>
                    <div class="mi-card">
                        <div class="mi-card-content">
                            <h3 class="mi-card-title">Dinner Menu</h3>
                            <p class="mt-2 text-natural-50">Fine dining with ocean views</p>
                            <div class="mt-4 flex justify-end">
                                <a href="#" class="mi-button-outline-natural">View Menu</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-public-layout>
