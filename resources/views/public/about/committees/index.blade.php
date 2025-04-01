<x-public-layout>
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Hero Section -->
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl">HOA Committees</h1>
                <p class="mt-4 text-xl text-gray-500">Meet the teams that help make Villa Capriani great</p>
            </div>

            <!-- Committees Grid -->
            <div class="mt-12 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                @foreach($committees as $committee)
                <div class="mi-card">
                    <div class="mi-card-content">
                        <h3 class="mi-card-title">{{ $committee->name }}</h3>
                        <p class="mt-2 text-natural-50">{{ $committee->purpose }}</p>
                        <div class="mt-4">
                            <h4 class="text-sm font-semibold text-natural-300">Members</h4>
                            <ul class="mt-2 space-y-1">
                                @foreach($committee->members as $member)
                                <li class="text-natural-50">
                                    {{ $member->name }} - {{ $member->role }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="mt-4 flex justify-end">
                            <a href="{{ route('about.committees.show', $committee) }}" class="mi-button-outline-natural">
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
