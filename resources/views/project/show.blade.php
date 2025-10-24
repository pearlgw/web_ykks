<x-app-layout>
    <main class="bg-gray-50 h-screen flex flex-col overflow-hidden">
        @include('component_dashboard.header')

        <!-- Content Area -->
        <div class="flex flex-1 overflow-hidden">
            @include('component_dashboard.sidebar')

            <!-- Main Dashboard - YANG SCROLL -->
            <main class="flex-1 overflow-y-auto p-10">
                <!-- Breadcrumb & Actions -->
                <div class="flex items-center justify-between mb-8">
                    <div class="flex items-center gap-3">
                        <a href="{{ route('project.index') }}"
                            class="text-gray-500 hover:text-gray-700 transition duration-200">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </a>
                        <div>
                            <h1 class="text-3xl font-bold text-gray-800">Project Detail</h1>
                            <p class="text-gray-500 mt-1">View project information</p>
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <a href="{{ route('project.edit', $project->id) }}"
                            class="bg-green-500 hover:bg-green-600 text-white font-semibold px-6 py-3 rounded-lg shadow-md transition duration-200 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                </path>
                            </svg>
                            Edit
                        </a>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Main Content Card -->
                    <div class="lg:col-span-2 space-y-6">
                        <!-- Project Image -->
                        @if ($project->image_backdrop)
                            <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                                <img src="{{ asset('storage/' . $project->image_backdrop) }}"
                                    alt="{{ $project->title }}" class="w-full h-96 object-cover">
                            </div>
                        @endif

                        <!-- Content Body -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                            <div class="p-8">
                                <!-- Program Badge -->
                                <div class="mb-4">
                                    <span
                                        class="inline-flex items-center px-4 py-2 rounded-full text-sm font-semibold bg-gradient-to-r from-indigo-100 to-purple-100 text-indigo-700">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                                            </path>
                                        </svg>
                                        {{ $project->program->title }}
                                    </span>
                                </div>
                                <!-- Title -->
                                <div class="mb-6">
                                    <label
                                        class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2 block">Project
                                        Title</label>
                                    <h2 class="text-3xl font-bold text-gray-900">{{ $project->title }}</h2>
                                </div>

                                <!-- Description -->
                                {{-- <div class="mb-6">
                                    <label
                                        class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2 block">Description</label>
                                    <div class="text-gray-700 leading-relaxed whitespace-pre-line text-lg text-justify">
                                        {{ $project->description }}
                                    </div>
                                </div> --}}

                                <div class="mb-6">
                                    <label class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2 block">Description</label>
                                    <div class="text-gray-700 leading-relaxed text-lg prose prose-lg max-w-none text-justify">
                                        {!! $project->description !!}
                                    </div>
                                </div>

                                <!-- Project Details Grid -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-6 border-t border-gray-200">
                                    <!-- Location -->
                                    <div class="flex items-start gap-3">
                                        <div
                                            class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center flex-shrink-0">
                                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                                </path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <p
                                                class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1">
                                                Location</p>
                                            <p class="text-base font-semibold text-gray-900">{{ $project->location }}
                                            </p>
                                        </div>
                                    </div>

                                    <!-- DateTime Project -->
                                    <div class="flex items-start gap-3">
                                        <div
                                            class="w-10 h-10 rounded-lg bg-green-100 flex items-center justify-center flex-shrink-0">
                                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div>
                                            <p
                                                class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1">
                                                Project Date & Time</p>
                                            <p class="text-base font-semibold text-gray-900">
                                                {{ \Carbon\Carbon::parse($project->datetime_project)->format('d M Y, H:i') }}
                                            </p>
                                            <p class="text-xs text-gray-500 mt-1">
                                                {{ \Carbon\Carbon::parse($project->datetime_project)->diffForHumans() }}
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Participants -->
                                    <div class="flex items-start gap-3">
                                        <div
                                            class="w-10 h-10 rounded-lg bg-purple-100 flex items-center justify-center flex-shrink-0">
                                            <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div>
                                            <p
                                                class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1">
                                                Expected Participants</p>
                                            <p class="text-base font-semibold text-gray-900">
                                                {{ $project->participant_count }} People</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Metadata Card -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                            <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center gap-2">
                                <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Additional Information
                            </h3>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 p-4 rounded-lg">
                                    <p class="text-xs font-semibold text-gray-600 mb-1">Created At</p>
                                    <p class="text-sm font-bold text-gray-800">
                                        {{ $project->created_at->format('d M Y, H:i') }}</p>
                                    <p class="text-xs text-gray-500 mt-1">{{ $project->created_at->diffForHumans() }}
                                    </p>
                                </div>
                                <div class="bg-gradient-to-br from-purple-50 to-pink-50 p-4 rounded-lg">
                                    <p class="text-xs font-semibold text-gray-600 mb-1">Last Updated</p>
                                    <p class="text-sm font-bold text-gray-800">
                                        {{ $project->updated_at->format('d M Y, H:i') }}</p>
                                    <p class="text-xs text-gray-500 mt-1">{{ $project->updated_at->diffForHumans() }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="space-y-6">
                        <!-- Project Manager Card -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                            <div class="bg-gradient-to-r from-blue-500 to-indigo-600 p-6">
                                <h3 class="text-white font-bold text-lg mb-1">{{ $project->user->name }}</h3>
                                <p class="text-blue-100 text-sm">Created by</p>
                            </div>
                            <div class="p-6">
                                <div class="flex flex-col items-center text-center">
                                    <div
                                        class="w-24 h-24 rounded-full bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center text-white font-bold text-3xl mb-4 shadow-lg">
                                        {{ strtoupper(substr($project->user->name, 0, 2)) }}
                                    </div>
                                    <h4 class="text-xl font-bold text-gray-800 mb-1">{{ $project->user->name }}</h4>
                                    <p class="text-gray-500 text-sm mb-4">{{ $project->user->email }}</p>

                                    <div class="w-full pt-4 border-t border-gray-100 space-y-3">
                                        @if (isset($project->user->role))
                                            <div class="flex items-center justify-between text-sm">
                                                <span class="text-gray-600">Role:</span>
                                                <span
                                                    class="font-semibold text-gray-800 bg-blue-100 px-3 py-1 rounded-full">{{ ucfirst($project->user->role) }}</span>
                                            </div>
                                        @endif
                                        <div class="flex items-center justify-between text-sm">
                                            <span class="text-gray-600">User ID:</span>
                                            <span class="font-mono text-gray-800">#{{ $project->user->id }}</span>
                                        </div>
                                        @if (isset($project->user->created_at))
                                            <div class="flex items-center justify-between text-sm">
                                                <span class="text-gray-600">Member since:</span>
                                                <span
                                                    class="text-gray-800">{{ $project->user->created_at->format('M Y') }}</span>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Quick Stats Card -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                            <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center gap-2">
                                <svg class="w-5 h-5 text-indigo-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                    </path>
                                </svg>
                                Quick Stats
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                    <span class="text-sm text-gray-600">Project ID</span>
                                    <span class="font-mono font-bold text-gray-800">#{{ $project->id }}</span>
                                </div>
                                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                    <span class="text-sm text-gray-600">Status</span>
                                    <span
                                        class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">
                                        @if (\Carbon\Carbon::parse($project->datetime_project)->isPast())
                                            Completed
                                        @else
                                            Upcoming
                                        @endif
                                    </span>
                                </div>
                                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                    <span class="text-sm text-gray-600">Word Count</span>
                                    <span
                                        class="font-bold text-gray-800">{{ str_word_count($project->description) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </main>
</x-app-layout>
