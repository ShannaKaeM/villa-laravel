<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $committee->name }} - Villa Capriani</title>
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
                            <a href="{{ route('owner.dashboard') }}" class="text-xl font-bold text-indigo-600">Villa Capriani</a>
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
            <!-- Committee Header -->
            <div class="bg-white shadow rounded-lg p-6 mb-6">
                <div class="flex items-start justify-between">
                    <div class="flex items-center">
                        <img src="{{ asset($committee->icon) }}" class="h-12 w-12" alt="{{ $committee->name }}">
                        <div class="ml-4">
                            <h2 class="text-2xl font-bold text-gray-900">{{ $committee->name }}</h2>
                            <div class="mt-1 flex items-center space-x-2">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ 
                                    $membership->role === 'chair' ? 'bg-green-100 text-green-800' :
                                    ($membership->role === 'vice_chair' ? 'bg-blue-100 text-blue-800' :
                                    ($membership->role === 'secretary' ? 'bg-purple-100 text-purple-800' :
                                    ($membership->role === 'board_liaison' ? 'bg-yellow-100 text-yellow-800' :
                                    'bg-gray-100 text-gray-800')))
                                }}">
                                    {{ ucwords(str_replace('_', ' ', $membership->role)) }}
                                </span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ 
                                    $membership->team === 'core' ? 'bg-green-100 text-green-800' :
                                    ($membership->team === 'advisory' ? 'bg-yellow-100 text-yellow-800' :
                                    ($membership->team === 'project' ? 'bg-blue-100 text-blue-800' :
                                    'bg-gray-100 text-gray-800'))
                                }}">
                                    {{ ucwords($membership->team) }} Team
                                </span>
                            </div>
                        </div>
                    </div>
                    @if($membership->team_priority > 0)
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium {{ 
                            $membership->team_priority === 2 ? 'bg-red-100 text-red-800' :
                            'bg-yellow-100 text-yellow-800'
                        }}">
                            {{ $membership->team_priority === 2 ? 'Critical Priority' : 'High Priority' }}
                        </span>
                    @endif
                </div>
            </div>

            <!-- Committee Details -->
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
                <!-- Left Column -->
                <div class="space-y-6">
                    <!-- Purpose -->
                    <div class="bg-white shadow rounded-lg p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Purpose</h3>
                        <p class="text-gray-600">{{ $committee->purpose }}</p>
                    </div>

                    <!-- Team Responsibilities -->
                    <div class="bg-white shadow rounded-lg p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Your Team Responsibilities</h3>
                        <p class="text-gray-600 whitespace-pre-line">{{ $membership->team_responsibilities ?: 'No specific responsibilities assigned yet.' }}</p>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="space-y-6">
                    <!-- Active Projects -->
                    <div class="bg-white shadow rounded-lg p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Your Active Projects</h3>
                        @if($membership->team_projects)
                            <div class="flex flex-wrap gap-2">
                                @foreach(json_decode($membership->team_projects) as $project)
                                    <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                                        {{ $project }}
                                    </span>
                                @endforeach
                            </div>
                        @else
                            <p class="text-gray-600">No active projects assigned.</p>
                        @endif
                    </div>

                    <!-- Committee Members -->
                    <div class="bg-white shadow rounded-lg p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Committee Members</h3>
                        <div class="space-y-4">
                            @foreach($committee->members as $member)
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <img src="{{ asset($member->avatar) }}" alt="{{ $member->first_name }}" class="h-8 w-8 rounded-full">
                                        <div class="ml-3">
                                            <p class="text-sm font-medium text-gray-900">{{ $member->first_name }} {{ $member->last_name }}</p>
                                            <p class="text-xs text-gray-500">{{ ucwords(str_replace('_', ' ', $member->pivot->role)) }}</p>
                                        </div>
                                    </div>
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ 
                                        $member->pivot->team === 'core' ? 'bg-green-100 text-green-800' :
                                        ($member->pivot->team === 'advisory' ? 'bg-yellow-100 text-yellow-800' :
                                        ($member->pivot->team === 'project' ? 'bg-blue-100 text-blue-800' :
                                        'bg-gray-100 text-gray-800'))
                                    }}">
                                        {{ ucwords($member->pivot->team) }}
                                    </span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
