<x-app-layout>
    <main class="bg-gray-50 h-screen flex flex-col overflow-hidden">
        @include('component_dashboard.header')

        <div class="flex flex-1 overflow-hidden">
            @include('component_dashboard.sidebar')

            <main class="flex-1 overflow-y-auto p-10">

                <!-- Header -->
                <div class="flex items-center gap-3 mb-8">
                    <a href="{{ route('literacy-corner.index') }}"
                        class="text-gray-500 hover:text-gray-700 transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 19l-7-7 7-7" />
                        </svg>
                    </a>
                    <div>
                        <h1 class="text-3xl font-bold text-gray-800">Edit Literacy Corner</h1>
                        <p class="text-gray-500 mt-1">Update literacy corner information</p>
                    </div>
                </div>

                <!-- Form -->
                <div class="max-w-2xl">
                    <form action="{{ route('literacy-corner.update', $item->id) }}"
                          method="POST"
                          enctype="multipart/form-data"
                          class="space-y-6">
                        @csrf
                        @method('PUT')

                        <div class="bg-white rounded-xl shadow-sm border overflow-hidden">

                            <!-- Card Header -->
                            <div class="bg-gradient-to-r from-blue-600 to-blue-700 px-8 py-6">
                                <h2 class="text-xl font-bold text-white">
                                    Literacy Corner Information
                                </h2>
                                <p class="text-blue-100 text-sm mt-1">
                                    Update the details for this literacy corner
                                </p>
                            </div>

                            <!-- Card Body -->
                            <div class="p-8 space-y-6">

                                <!-- Title -->
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                        Title <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text"
                                           name="title"
                                           value="{{ old('title', $item->title) }}"
                                           required
                                           class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500">
                                </div>

                                <!-- Description -->
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                        Description <span class="text-red-500">*</span>
                                    </label>
                                    <textarea name="description"
                                              rows="5"
                                              required
                                              class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500">{{ old('description', $item->description) }}</textarea>
                                </div>

                                <!-- PDF Link -->
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                        PDF Link (Google Drive) <span class="text-red-500">*</span>
                                    </label>
                                    <input type="url"
                                           name="pdf_link"
                                           value="{{ old('pdf_link', $item->pdf_link) }}"
                                           placeholder="https://drive.google.com/file/d/..."
                                           required
                                           class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500">

                                    <p class="mt-1 text-xs text-gray-500">
                                        Set permission to <b>Anyone with the link</b>
                                    </p>

                                    @if($item->pdf_link)
                                        @php
                                            $pdfUrl = preg_match('/^https?:\/\//i', $item->pdf_link)
                                                ? $item->pdf_link
                                                : 'https://' . $item->pdf_link;
                                        @endphp
                                        <div class="mt-3 flex items-center gap-2 bg-red-50 border border-red-200 p-3 rounded-lg">
                                            <i class="fas fa-file-pdf text-red-600"></i>
                                            <span class="text-sm text-red-700 truncate">
                                                {{ $item->pdf_link }}
                                            </span>
                                            <a href="{{ $pdfUrl }}" target="_blank" class="text-red-600 hover:text-red-800">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    @endif
                                </div>

                                <!-- Image Backdrop -->
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                        Backdrop Image (Optional)
                                    </label>
                                    <input type="file"
                                           name="image_backdrop"
                                           accept="image/*"
                                           class="w-full px-4 py-3 border rounded-lg">

                                    @if($item->image_backdrop)
                                        <div class="mt-3">
                                            <img src="{{ asset('storage/' . $item->image_backdrop) }}"
                                                 class="h-40 object-cover rounded-lg border">
                                        </div>
                                    @endif
                                </div>

                            </div>
                        </div>

                        <!-- Actions -->
                        <div class="flex gap-4">
                            <button type="submit"
                                    class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold">
                                Update
                            </button>
                            <a href="{{ route('literacy-corner.index') }}"
                               class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-8 py-3 rounded-lg font-semibold">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>

            </main>
        </div>
    </main>
</x-app-layout>
