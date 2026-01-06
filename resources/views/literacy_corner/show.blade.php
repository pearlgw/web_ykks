<x-app-layout>
    <main class="bg-gray-50 h-screen flex flex-col overflow-hidden">
        @include('component_dashboard.header')

        <div class="flex flex-1 overflow-hidden">
            @include('component_dashboard.sidebar')

            <main class="flex-1 overflow-y-auto p-10">

                <!-- Header -->
                <div class="flex items-center justify-between mb-8">
                    <div class="flex items-center gap-3">
                        <a href="{{ route('literacy-corner.index') }}"
                           class="text-gray-500 hover:text-gray-700 transition">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M15 19l-7-7 7-7"/>
                            </svg>
                        </a>
                        <div>
                            <h1 class="text-3xl font-bold text-gray-800">Literacy Corner Detail</h1>
                            <p class="text-gray-500 mt-1">View literacy corner information</p>
                        </div>
                    </div>

                    <a href="{{ route('literacy-corner.edit', $item->id) }}"
                       class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg shadow-md flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5"/>
                        </svg>
                        Edit
                    </a>
                </div>

                <!-- Card -->
                <div class="max-w-4xl">
                    <div class="bg-white rounded-2xl shadow-sm border overflow-hidden">

                        <!-- Header -->
                        <div class="bg-gradient-to-r from-blue-600 to-blue-700 p-8">
                            <h2 class="text-2xl font-bold text-white">{{ $item->title }}</h2>
                            <p class="text-blue-100 text-sm mt-1">Literacy Corner Information</p>
                        </div>

                        <div class="p-8 space-y-8">

                            <!-- Description -->
                            <div class="border-b border-blue-100 pb-6">
                                <p class="text-xs font-bold text-blue-600 uppercase mb-3">Description</p>
                                <div class="text-gray-700 leading-relaxed whitespace-pre-line text-justify">
                                    {{ $item->description }}
                                </div>
                            </div>

                            <!-- PDF LINK -->
                            <div class="border-b border-blue-100 pb-6">
                                <p class="text-xs font-bold text-blue-600 uppercase mb-3">PDF Document</p>

                                @if($item->pdf_link)
                                    @php
                                        $pdfUrl = preg_match('/^https?:\/\//i', $item->pdf_link)
                                            ? $item->pdf_link
                                            : 'https://' . $item->pdf_link;
                                    @endphp

                                    <a href="{{ $pdfUrl }}"
                                       target="_blank"
                                       rel="noopener noreferrer"
                                       class="inline-flex items-center gap-3 bg-red-600 hover:bg-red-700 text-white font-semibold px-6 py-3 rounded-lg shadow-md">
                                        <i class="fas fa-file-pdf"></i>
                                        Open PDF
                                        <i class="fas fa-arrow-up-right-from-square text-sm"></i>
                                    </a>

                                    <p class="text-xs text-gray-500 mt-2">
                                        Hosted externally (Google Drive or similar)
                                    </p>
                                @else
                                    <p class="text-sm text-gray-500 italic">No PDF link provided</p>
                                @endif
                            </div>

                            <!-- Image -->
                            <div class="border-b border-blue-100 pb-6">
                                <p class="text-xs font-bold text-blue-600 uppercase mb-3">Backdrop Image</p>

                                @if($item->image_backdrop)
                                    <img src="{{ asset('storage/' . $item->image_backdrop) }}"
                                         class="max-w-2xl h-56 object-cover rounded-xl border shadow">
                                @else
                                    <div class="h-40 flex items-center justify-center bg-gray-100 rounded-lg text-gray-400">
                                        No image available
                                    </div>
                                @endif
                            </div>

                            <!-- Metadata -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-4 text-sm">
                                <div>
                                    <p class="text-xs uppercase text-gray-500 font-semibold">Created At</p>
                                    <p class="text-gray-800">
                                        {{ $item->created_at->format('d M Y, H:i') }}
                                    </p>
                                </div>
                                <div>
                                    <p class="text-xs uppercase text-gray-500 font-semibold">Updated At</p>
                                    <p class="text-gray-800">
                                        {{ $item->updated_at->format('d M Y, H:i') }}
                                    </p>
                                </div>
                            </div>

                            <!-- ID -->
                            <div class="pt-4 border-t">
                                <p class="text-xs uppercase text-gray-400 font-semibold">ID</p>
                                <p class="font-mono text-gray-600">#{{ $item->id }}</p>
                            </div>

                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="flex gap-3 mt-6">
                        <a href="{{ route('literacy-corner.edit', $item->id) }}"
                           class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold">
                            Edit
                        </a>
                        <a href="{{ route('literacy-corner.index') }}"
                           class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-6 py-3 rounded-lg font-semibold">
                            Back
                        </a>
                    </div>
                </div>

            </main>
        </div>
    </main>
</x-app-layout>
