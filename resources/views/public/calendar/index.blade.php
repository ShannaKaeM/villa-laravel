<x-public-layout>
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Hero Section -->
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl">Events Calendar</h1>
                <p class="mt-4 text-xl text-gray-500">Stay up to date with Villa Capriani events and activities</p>
            </div>

            <!-- Calendar Grid -->
            <div class="mt-12">
                <div class="bg-white shadow-sm rounded-lg overflow-hidden">
                    <!-- Calendar Component -->
                    <div class="p-6">
                        <!-- Calendar will be rendered here -->
                        @livewire('calendar-component')
                    </div>
                </div>
            </div>

            <!-- Upcoming Events -->
            <div class="mt-12">
                <h2 class="text-2xl font-bold text-gray-900">Upcoming Events</h2>
                <div class="mt-6 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    @foreach($events as $event)
                    <div class="mi-card">
                        <div class="mi-card-content">
                            <div class="flex items-start justify-between">
                                <div>
                                    <h3 class="mi-card-title">{{ $event->title }}</h3>
                                    <p class="mt-2 text-natural-50">{{ $event->description }}</p>
                                </div>
                                <div class="text-right">
                                    <div class="text-lg font-semibold text-primary-500">
                                        {{ $event->start_date->format('M j') }}
                                    </div>
                                    <div class="text-sm text-natural-50">
                                        {{ $event->start_time }}
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 flex justify-end">
                                <a href="{{ route('calendar.events.show', $event) }}" class="mi-button-outline-natural">
                                    Details
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-public-layout>
