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
                        <a href="{{ route('content.index') }}"
                            class="text-gray-500 hover:text-gray-700 transition duration-200">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </a>
                        <div>
                            <h1 class="text-3xl font-bold text-gray-800">Content Detail</h1>
                            <p class="text-gray-500 mt-1">View content information</p>
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <a href={{ route('content.edit', $content->id) }}
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
                        <!-- Content Body -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                            <div class="p-8">
                                <!-- Title -->
                                <div class="mb-6">
                                    <label
                                        class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2 block">Title</label>
                                    <h2 class="text-3xl font-bold text-gray-900">{{ $content->title }}</h2>
                                </div>

                                <!-- Description -->
                                <div class="mb-6">
                                    <label
                                        class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2 block">Description</label>
                                    <div class="text-gray-700 leading-relaxed whitespace-pre-line text-lg">
                                        {{ $content->description }}
                                    </div>
                                </div>

                                <!-- Additional Content Fields (if any) -->
                                @if (isset($content->body))
                                    <div>
                                        <label
                                            class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2 block">Content
                                            Body</label>
                                        <div class="prose prose-lg max-w-none text-gray-700">
                                            {!! nl2br(e($content->body)) !!}
                                        </div>
                                    </div>
                                @endif
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
                                        {{ $content->created_at->format('d M Y, H:i') }}</p>
                                    <p class="text-xs text-gray-500 mt-1">{{ $content->created_at->diffForHumans() }}
                                    </p>
                                </div>
                                <div class="bg-gradient-to-br from-purple-50 to-pink-50 p-4 rounded-lg">
                                    <p class="text-xs font-semibold text-gray-600 mb-1">Last Updated</p>
                                    <p class="text-sm font-bold text-gray-800">
                                        {{ $content->updated_at->format('d M Y, H:i') }}</p>
                                    <p class="text-xs text-gray-500 mt-1">{{ $content->updated_at->diffForHumans() }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="space-y-6">
                        <!-- Author Card -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                            <div class="bg-gradient-to-r from-blue-500 to-indigo-600 p-6">
                                <h3 class="text-white font-bold text-lg mb-1">Author</h3>
                                <p class="text-blue-100 text-sm">Content creator information</p>
                            </div>
                            <div class="p-6">
                                <div class="flex flex-col items-center text-center">
                                    <div
                                        class="w-24 h-24 rounded-full bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center text-white font-bold text-3xl mb-4 shadow-lg">
                                        {{ strtoupper(substr($content->user->name, 0, 2)) }}
                                    </div>
                                    <h4 class="text-xl font-bold text-gray-800 mb-1">{{ $content->user->name }}</h4>
                                    <p class="text-gray-500 text-sm mb-4">{{ $content->user->email }}</p>

                                    <div class="w-full pt-4 border-t border-gray-100 space-y-3">
                                        @if (isset($content->user->role))
                                            <div class="flex items-center justify-between text-sm">
                                                <span class="text-gray-600">Role:</span>
                                                <span
                                                    class="font-semibold text-gray-800 bg-blue-100 px-3 py-1 rounded-full">{{ ucfirst($content->user->role) }}</span>
                                            </div>
                                        @endif
                                        <div class="flex items-center justify-between text-sm">
                                            <span class="text-gray-600">User ID:</span>
                                            <span class="font-mono text-gray-800">#{{ $content->user->id }}</span>
                                        </div>
                                        @if (isset($content->user->created_at))
                                            <div class="flex items-center justify-between text-sm">
                                                <span class="text-gray-600">Member since:</span>
                                                <span
                                                    class="text-gray-800">{{ $content->user->created_at->format('M Y') }}</span>
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
                                    <span class="text-sm text-gray-600">Content ID</span>
                                    <span class="font-mono font-bold text-gray-800">#{{ $content->id }}</span>
                                </div>
                                @if (isset($content->status))
                                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                        <span class="text-sm text-gray-600">Status</span>
                                        <span
                                            class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">
                                            {{ ucfirst($content->status) }}
                                        </span>
                                    </div>
                                @endif
                                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                    <span class="text-sm text-gray-600">Word Count</span>
                                    <span
                                        class="font-bold text-gray-800">{{ str_word_count($content->description) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </main>
</x-app-layout>
