<x-app-layout>
    <main class="bg-gray-50 h-screen flex flex-col overflow-hidden">
        @include('component_dashboard.header')

        <!-- Content Area -->
        <div class="flex flex-1 overflow-hidden">
            @include('component_dashboard.sidebar')

            <!-- Main Dashboard -->
            <main class="flex-1 overflow-y-auto p-10">
                <!-- Breadcrumb & Actions -->
                <div class="flex items-center justify-between mb-8">
                    <div class="flex items-center gap-3">
                        <a href="{{ route('program.index') }}"
                            class="text-gray-500 hover:text-gray-700 transition duration-200">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </a>
                        <div>
                            <h1 class="text-3xl font-bold text-gray-800">Program Detail</h1>
                            <p class="text-gray-500 mt-1">View program information</p>
                        </div>
                    </div>
                    <a href="{{ route('program.edit', $program->id) }}"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg shadow-md transition duration-200 flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                            </path>
                        </svg>
                        Edit
                    </a>
                </div>

                <!-- Main Content Card -->
                <div class="max-w-4xl">
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">

                        <!-- Header -->
                        <div class="bg-gradient-to-r from-blue-600 to-blue-700 p-8">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-16 h-16 bg-blue-400 bg-opacity-30 rounded-xl flex items-center justify-center text-white shadow-lg backdrop-blur-sm">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-white mb-1">{{ $program->title }}</h2>
                                    <p class="text-blue-100 text-sm">Program Information</p>
                                </div>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-8 space-y-8">

                            <!-- Title Section -->
                            <div class="pb-6 border-b-2 border-blue-100">
                                <div class="flex items-center gap-2 mb-3">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path>
                                    </svg>
                                    <p class="text-xs font-bold text-blue-600 uppercase tracking-wider">Title</p>
                                </div>
                                <p class="text-xl font-semibold text-gray-900">{{ $program->title }}</p>
                            </div>

                            <!-- Description Section -->
                            <div class="pb-6 border-b-2 border-blue-100">
                                <div class="flex items-center gap-2 mb-3">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6h16M4 12h16M4 18h7"></path>
                                    </svg>
                                    <p class="text-xs font-bold text-blue-600 uppercase tracking-wider">Description</p>
                                </div>
                                <p class="text-base text-gray-700 leading-relaxed text-justify">{{ $program->description }}</p>
                            </div>

                            <!-- Metadata Grid -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-2">
                                <!-- Created At -->
                                <div>
                                    <div class="flex items-center gap-2 mb-2">
                                        <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Created
                                            At</p>
                                    </div>
                                    <p class="text-sm font-medium text-gray-900">
                                        {{ $program->created_at->format('d M Y, H:i') }}</p>
                                    <p class="text-xs text-gray-500 mt-1">{{ $program->created_at->diffForHumans() }}
                                    </p>
                                </div>

                                <!-- Updated At -->
                                <div>
                                    <div class="flex items-center gap-2 mb-2">
                                        <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                                            </path>
                                        </svg>
                                        <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Updated
                                            At</p>
                                    </div>
                                    <p class="text-sm font-medium text-gray-900">
                                        {{ $program->updated_at->format('d M Y, H:i') }}</p>
                                    <p class="text-xs text-gray-500 mt-1">{{ $program->updated_at->diffForHumans() }}
                                    </p>
                                </div>
                            </div>

                            <!-- Program ID -->
                            <div class="pt-6 border-t border-gray-200">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                                            </path>
                                        </svg>
                                        <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Program
                                            ID</p>
                                    </div>
                                    <p class="text-sm font-mono text-gray-600 bg-gray-50 px-3 py-1 rounded">
                                        #{{ $program->id }}</p>
                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- Action Buttons -->
                    <div class="flex items-center gap-3 mt-6">
                        <a href="{{ route('program.edit', $program->id) }}"
                            class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg shadow-md transition duration-200 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                </path>
                            </svg>
                            Edit Program
                        </a>
                        <a href="{{ route('program.index') }}"
                            class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold px-6 py-3 rounded-lg transition duration-200 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                            Back to List
                        </a>
                    </div>
                </div>

            </main>
        </div>
    </main>
</x-app-layout>
