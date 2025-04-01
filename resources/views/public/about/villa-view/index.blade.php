<x-public-layout>
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Hero Section -->
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl">Villa View</h1>
                <p class="mt-4 text-xl text-gray-500">News and updates from our community</p>
            </div>

            <!-- Blog Posts Grid -->
            <div class="mt-12 grid gap-8 lg:grid-cols-3">
                <!-- Featured Post -->
                <div class="lg:col-span-2">
                    @if($featuredPost)
                    <div class="mi-card">
                        <div class="mi-card-image-container">
                            <div class="mi-card-image-overlay"></div>
                            <img src="{{ $featuredPost->featured_image }}" alt="{{ $featuredPost->title }}" class="mi-card-image h-96">
                        </div>
                        <div class="mi-card-content">
                            <div class="text-sm text-primary-500">{{ $featuredPost->created_at->format('F j, Y') }}</div>
                            <h2 class="mi-card-title mt-2">{{ $featuredPost->title }}</h2>
                            <p class="mt-4 text-natural-50">{{ $featuredPost->excerpt }}</p>
                            <div class="mt-6 flex justify-end">
                                <a href="{{ route('about.villa-view.show', $featuredPost) }}" class="mi-button-outline-natural">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>

                <!-- Recent Posts -->
                <div class="space-y-8">
                    @foreach($recentPosts as $post)
                    <div class="mi-card">
                        <div class="mi-card-content">
                            <div class="text-sm text-primary-500">{{ $post->created_at->format('F j, Y') }}</div>
                            <h3 class="mi-card-title mt-2">{{ $post->title }}</h3>
                            <p class="mt-2 text-natural-50 line-clamp-2">{{ $post->excerpt }}</p>
                            <div class="mt-4 flex justify-end">
                                <a href="{{ route('about.villa-view.show', $post) }}" class="mi-button-outline-natural">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Categories -->
            <div class="mt-12">
                <h2 class="text-2xl font-bold text-gray-900">Categories</h2>
                <div class="mt-6 flex flex-wrap gap-4">
                    @foreach($categories as $category)
                    <a href="{{ route('about.villa-view.category', $category) }}" 
                       class="px-4 py-2 bg-natural-200 text-natural-700 rounded-full hover:bg-natural-300">
                        {{ $category->name }}
                    </a>
                    @endforeach
                </div>
            </div>

            <!-- Pagination -->
            <div class="mt-12">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</x-public-layout>
