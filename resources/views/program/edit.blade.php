<x-app-layout>
    <main class="bg-gray-50 h-screen flex flex-col overflow-hidden">
        @include('component_dashboard.header')

        <!-- Content Area -->
        <div class="flex flex-1 overflow-hidden">
            @include('component_dashboard.sidebar')

            <!-- Main Dashboard -->
            <main class="flex-1 overflow-y-auto p-10">
                <!-- Header -->
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
                            <h1 class="text-3xl font-bold text-gray-800">Edit Program</h1>
                            <p class="text-gray-500 mt-1">Update program information</p>
                        </div>
                    </div>
                </div>

                <!-- Form Card -->
                <div class="max-w-2xl">
                    <form action="{{ route('program.update', $program->id) }}" method="POST" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                            <!-- Card Header -->
                            <div class="bg-gradient-to-r from-blue-600 to-blue-700 px-8 py-6">
                                <h2 class="text-xl font-bold text-white flex items-center gap-2">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                        </path>
                                    </svg>
                                    Program Information
                                </h2>
                                <p class="text-blue-100 text-sm mt-1">Update the details for this program</p>
                            </div>

                            <!-- Card Body -->
                            <div class="p-8 space-y-6">

                                <!-- Title Field -->
                                <div>
                                    <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Title <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" id="title" name="title"
                                        value="{{ old('title', $program->title) }}"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 @error('title') border-red-500 @enderror"
                                        placeholder="Enter program title" required>
                                    @error('title')
                                        <p class="mt-2 text-sm text-red-600 flex items-center gap-1">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                <!-- Description Field -->
                                <div>
                                    <label for="description" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Description <span class="text-red-500">*</span>
                                    </label>
                                    <textarea id="description" name="description" rows="5"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 @error('description') border-red-500 @enderror"
                                        placeholder="Enter program description" required>{{ old('description', $program->description) }}</textarea>
                                    @error('description')
                                        <p class="mt-2 text-sm text-red-600 flex items-center gap-1">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            {{ $message }}
                                        </p>
                                    @enderror
                                    <p class="mt-2 text-xs text-gray-500">Provide a detailed description of the program
                                    </p>
                                </div>

                                <!-- Current Program Info -->
                                <div
                                    class="bg-gradient-to-r from-blue-50 to-cyan-50 p-4 rounded-lg border border-blue-200">
                                    <p class="text-xs font-semibold text-gray-600 mb-3">Current Program Information</p>
                                    <div class="flex items-start gap-3">
                                        <div
                                            class="w-12 h-12 bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg flex items-center justify-center text-white flex-shrink-0">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="font-semibold text-gray-800 truncate">{{ $program->title }}</p>
                                            <p class="text-sm text-gray-600 line-clamp-2 mt-1">
                                                {{ $program->description }}</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex items-center gap-4">
                            <button type="submit"
                                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-8 py-3 rounded-lg shadow-md transition duration-200 flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                Update Program
                            </button>
                            <a href="{{ route('program.index') }}"
                                class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold px-8 py-3 rounded-lg transition duration-200 flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                                Cancel
                            </a>
                        </div>
                    </form>

                    <!-- Help Card -->
                    <div class="mt-6 bg-blue-50 border border-blue-200 rounded-lg p-6">
                        <div class="flex gap-3">
                            <svg class="w-6 h-6 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div>
                                <h3 class="font-semibold text-blue-900 mb-1">Editing Program</h3>
                                <p class="text-sm text-blue-700">Update the program title and description as needed.
                                    All fields marked with <span class="text-red-500">*</span> are required.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </main>
</x-app-layout>
