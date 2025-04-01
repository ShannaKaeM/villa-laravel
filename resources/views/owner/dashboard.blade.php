<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Villa Capriani - Owner Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen">
        <!-- Navigation -->
        <nav class="bg-white shadow">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <div class="flex-shrink-0 flex items-center">
                            <span class="text-xl font-bold text-indigo-600">Villa Capriani</span>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <form action="{{ route('owner.logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="text-gray-600 hover:text-gray-900">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <!-- Owner Profile -->
            <div class="bg-white shadow rounded-lg p-6 mb-6">
                <div class="flex items-center">
                    <img src="{{ asset($owner->avatar) }}" alt="{{ $owner->first_name }}" class="h-16 w-16 rounded-full">
                    <div class="ml-4">
                        <h2 class="text-2xl font-bold text-gray-900">{{ $owner->first_name }} {{ $owner->last_name }}</h2>
                        <p class="text-gray-600">Unit {{ $owner->unit_number }}</p>
                        @if($owner->role)
                            <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800">
                                {{ $owner->role }}
                            </span>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Committee Memberships -->
            <div class="bg-white shadow rounded-lg p-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Your Committee Memberships</h3>
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach($committees as $committee)
                        <div class="bg-gray-50 rounded-lg p-4 hover:bg-gray-100 transition">
                            <a href="{{ route('owner.committee', $committee->slug) }}" class="block">
                                <div class="flex items-center mb-2">
                                    <img src="{{ asset($committee->icon) }}" class="h-8 w-8" alt="{{ $committee->name }}">
                                    <h4 class="text-lg font-medium text-gray-900 ml-2">{{ $committee->name }}</h4>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ 
                                        $committee->pivot->role === 'chair' ? 'bg-green-100 text-green-800' :
                                        ($committee->pivot->role === 'vice_chair' ? 'bg-blue-100 text-blue-800' :
                                        ($committee->pivot->role === 'secretary' ? 'bg-purple-100 text-purple-800' :
                                        ($committee->pivot->role === 'board_liaison' ? 'bg-yellow-100 text-yellow-800' :
                                        'bg-gray-100 text-gray-800')))
                                    }}">
                                        {{ ucwords(str_replace('_', ' ', $committee->pivot->role)) }}
                                    </span>
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ 
                                        $committee->pivot->team === 'core' ? 'bg-green-100 text-green-800' :
                                        ($committee->pivot->team === 'advisory' ? 'bg-yellow-100 text-yellow-800' :
                                        ($committee->pivot->team === 'project' ? 'bg-blue-100 text-blue-800' :
                                        'bg-gray-100 text-gray-800'))
                                    }}">
                                        {{ ucwords($committee->pivot->team) }} Team
                                    </span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>
</html>
