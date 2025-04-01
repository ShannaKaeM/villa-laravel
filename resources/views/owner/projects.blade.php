<x-owner-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-semibold mb-6">Committee Projects</h2>
                    
                    @foreach(auth()->user()->committees as $committee)
                        <div class="mb-8">
                            <h3 class="text-xl font-semibold mb-4">{{ $committee->name }}</h3>
                            
                            @foreach($committee->projects as $project)
                                <div class="mb-4 p-4 border rounded-lg">
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <h4 class="text-lg font-medium">{{ $project->title }}</h4>
                                            <p class="text-gray-600">{{ $project->description }}</p>
                                        </div>
                                        <div class="flex space-x-2">
                                            <span class="px-2 py-1 text-sm rounded-full 
                                                @if($project->status === 'completed') bg-green-100 text-green-800
                                                @elseif($project->status === 'in_progress') bg-blue-100 text-blue-800
                                                @elseif($project->status === 'review') bg-yellow-100 text-yellow-800
                                                @else bg-gray-100 text-gray-800
                                                @endif">
                                                {{ str_replace('_', ' ', ucfirst($project->status)) }}
                                            </span>
                                            <span class="px-2 py-1 text-sm rounded-full 
                                                @if($project->priority === 'urgent') bg-red-100 text-red-800
                                                @elseif($project->priority === 'high') bg-orange-100 text-orange-800
                                                @elseif($project->priority === 'medium') bg-blue-100 text-blue-800
                                                @else bg-gray-100 text-gray-800
                                                @endif">
                                                {{ ucfirst($project->priority) }}
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <div class="mt-4 flex justify-between text-sm text-gray-500">
                                        <div>
                                            <span>Start: {{ $project->start_date->format('M d, Y') }}</span>
                                            @if($project->end_date)
                                                <span class="ml-4">End: {{ $project->end_date->format('M d, Y') }}</span>
                                            @endif
                                        </div>
                                        @if($project->tasks_count)
                                            <span>{{ $project->tasks_count }} tasks</span>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-owner-layout>
