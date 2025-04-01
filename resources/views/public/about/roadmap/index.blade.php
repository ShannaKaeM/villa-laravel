<x-public-layout>
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Hero Section -->
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl">Community Roadmap</h1>
                <p class="mt-4 text-xl text-gray-500">Our vision for Villa Capriani's future</p>
            </div>

            <!-- Timeline -->
            <div class="mt-16">
                <div class="relative">
                    <!-- Timeline line -->
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-primary-200"></div>

                    <!-- Timeline items -->
                    @foreach($initiatives as $initiative)
                    <div class="relative mb-16">
                        <div class="flex items-center justify-center">
                            <div class="z-10 flex items-center justify-center w-8 h-8 bg-primary-500 rounded-full">
                                <div class="w-4 h-4 bg-white rounded-full"></div>
                            </div>
                        </div>
                        <div class="mi-card mt-4">
                            <div class="mi-card-content">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <div class="text-sm text-primary-500">{{ $initiative->timeline }}</div>
                                        <h3 class="mi-card-title mt-1">{{ $initiative->title }}</h3>
                                    </div>
                                    <div class="px-3 py-1 rounded-full text-xs font-medium
                                        @if($initiative->status === 'Completed') bg-green-100 text-green-800
                                        @elseif($initiative->status === 'In Progress') bg-blue-100 text-blue-800
                                        @else bg-gray-100 text-gray-800 @endif">
                                        {{ $initiative->status }}
                                    </div>
                                </div>
                                <p class="mt-4 text-natural-50">{{ $initiative->description }}</p>
                                @if($initiative->updates)
                                <div class="mt-6">
                                    <h4 class="text-sm font-semibold text-natural-300">Latest Updates</h4>
                                    <ul class="mt-2 space-y-2">
                                        @foreach($initiative->updates as $update)
                                        <li class="text-natural-50">
                                            <span class="text-xs text-primary-500">{{ $update->date }}</span>
                                            <p class="mt-1">{{ $update->content }}</p>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Community Input Section -->
            <div class="mt-16">
                <div class="text-center">
                    <h2 class="text-2xl font-bold text-gray-900">Share Your Ideas</h2>
                    <p class="mt-4 text-gray-500">We value community input in shaping our future initiatives</p>
                </div>
                <div class="mt-8 max-w-2xl mx-auto">
                    @auth('owner')
                    <form action="{{ route('about.roadmap.suggestions.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700">Suggestion Title</label>
                            <input type="text" name="title" id="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500">
                        </div>
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea name="description" id="description" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500"></textarea>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="mi-button-primary">Submit Suggestion</button>
                        </div>
                    </form>
                    @else
                    <div class="text-center">
                        <p class="text-gray-500">Please log in as an owner to submit suggestions</p>
                        <div class="mt-4">
                            <a href="{{ route('owner.login') }}" class="mi-button-primary">Owner Login</a>
                        </div>
                    </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</x-public-layout>
