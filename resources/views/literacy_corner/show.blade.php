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
                        <a href="{{ route('literacy-corner.index') }}"
                            class="text-gray-500 hover:text-gray-700 transition duration-200">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </a>
                        <div>
                            <h1 class="text-3xl font-bold text-gray-800">Literacy Corner Detail</h1>
                            <p class="text-gray-500 mt-1">View literacy corner information</p>
                        </div>
                    </div>
                    <a href="{{ route('literacy-corner.edit', $item->id) }}"
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

                        <!-- Header with Icon -->
                        <div class="bg-gradient-to-r from-blue-600 to-blue-700 p-8">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-16 h-16 bg-blue-400 bg-opacity-30 rounded-xl flex items-center justify-center text-white shadow-lg backdrop-blur-sm">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-white mb-1">{{ $item->title }}</h2>
                                    <p class="text-blue-100 text-sm">Literacy Corner Information</p>
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
                                <p class="text-xl font-semibold text-gray-900">{{ $item->title }}</p>
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
                                <p class="text-base text-gray-700 leading-relaxed text-justify">
                                    {{ $item->description }}</p>
                            </div>

                            <!-- PDF File Section -->
                            <div class="pb-6 border-b-2 border-blue-100">
                                <div class="flex items-center gap-2 mb-3">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                    <p class="text-xs font-bold text-blue-600 uppercase tracking-wider">PDF File</p>
                                </div>
                                @if($item->file_pdf)
                                    <a href="{{ asset('storage/' . $item->file_pdf) }}"
                                       target="_blank"
                                       class="inline-flex items-center gap-3 bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white font-semibold px-6 py-3 rounded-lg transition duration-200 shadow-md hover:shadow-lg">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                            </path>
                                        </svg>
                                        <span>Download PDF File</span>
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                            </path>
                                        </svg>
                                    </a>
                                    <p class="text-xs text-gray-500 mt-2">Click to open PDF in new tab</p>
                                @else
                                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-gray-100 text-gray-500 rounded-lg">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                        No PDF file available
                                    </div>
                                @endif
                            </div>

                            <!-- Image Backdrop Section -->
                            <div class="pb-6 border-b-2 border-blue-100">
                                <div class="flex items-center gap-2 mb-3">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                    <p class="text-xs font-bold text-blue-600 uppercase tracking-wider">Backdrop Image</p>
                                </div>
                                @if($item->image_backdrop)
                                    <div class="mt-3">
                                        <img src="{{ asset('storage/' . $item->image_backdrop) }}"
                                             alt="{{ $item->title }}"
                                             class="max-w-2xl h-52 object-cover rounded-xl shadow-lg border-2 border-gray-200">
                                        <p class="text-xs text-gray-500 mt-2">Backdrop image for this literacy corner</p>
                                    </div>
                                @else
                                    <div class="h-52 max-w-md bg-gray-100 rounded-xl flex flex-col items-center justify-center border-2 border-dashed border-gray-300">
                                        <svg class="w-16 h-16 text-gray-400 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                        <p class="text-gray-500 text-sm">No backdrop image available</p>
                                    </div>
                                @endif
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
                                        {{ $item->created_at->format('d M Y, H:i') }}</p>
                                    <p class="text-xs text-gray-500 mt-1">{{ $item->created_at->diffForHumans() }}
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
                                        {{ $item->updated_at->format('d M Y, H:i') }}</p>
                                    <p class="text-xs text-gray-500 mt-1">{{ $item->updated_at->diffForHumans() }}
                                    </p>
                                </div>
                            </div>

                            <!-- ID -->
                            <div class="pt-6 border-t border-gray-200">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                                            </path>
                                        </svg>
                                        <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Literacy Corner ID</p>
                                    </div>
                                    <p class="text-sm font-mono text-gray-600 bg-gray-50 px-3 py-1 rounded">
                                        #{{ $item->id }}</p>
                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- Action Buttons -->
                    <div class="flex items-center gap-3 mt-6">
                        <a href="{{ route('literacy-corner.edit', $item->id) }}"
                            class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg shadow-md transition duration-200 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                </path>
                            </svg>
                            Edit Literacy Corner
                        </a>
                        <a href="{{ route('literacy-corner.index') }}"
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
