<x-public-layout>
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Hero Section -->
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl">Frequently Asked Questions</h1>
                <p class="mt-4 text-xl text-gray-500">Find answers to common questions about Villa Capriani</p>
            </div>

            <!-- Categories -->
            <div class="mt-12">
                <div class="flex flex-wrap justify-center gap-4">
                    @foreach(['General', 'Ownership', 'Amenities', 'Rentals', 'HOA'] as $category)
                    <button class="mi-button-natural">{{ $category }}</button>
                    @endforeach
                </div>
            </div>

            <!-- FAQ Accordion -->
            <div class="mt-12 max-w-3xl mx-auto">
                <div class="space-y-6">
                    @foreach($faqs as $faq)
                    <div x-data="{ open: false }" class="mi-card">
                        <button @click="open = !open" class="w-full">
                            <div class="mi-card-content flex justify-between items-center">
                                <h3 class="text-lg font-semibold text-natural-50">{{ $faq->question }}</h3>
                                <svg :class="{'rotate-180': open}" class="w-5 h-5 transform transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                        <div x-show="open" x-collapse>
                            <div class="px-6 pb-6">
                                <div class="prose prose-invert max-w-none">
                                    {!! $faq->answer !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Can't find answer section -->
            <div class="mt-16">
                <div class="text-center">
                    <h2 class="text-2xl font-bold text-gray-900">Can't find what you're looking for?</h2>
                    <p class="mt-4 text-gray-500">Contact us and we'll be happy to help</p>
                    <div class="mt-8">
                        <a href="{{ route('about.contact') }}" class="mi-button-primary">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-public-layout>
