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
                        <a href="{{ route('project.index') }}"
                            class="text-gray-500 hover:text-gray-700 transition duration-200">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </a>
                        <div>
                            <h1 class="text-3xl font-bold text-gray-800">Edit Project</h1>
                            <p class="text-gray-500 mt-1">Update your project information</p>
                        </div>
                    </div>
                </div>

                <!-- Form Card -->
                <div class="max-w-4xl">
                    <form action="{{ route('project.update', $project->id) }}" method="POST"
                        enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                            <!-- Card Header -->
                            <div class="bg-gradient-to-r from-blue-500 to-indigo-600 px-8 py-6">
                                <h2 class="text-xl font-bold text-white flex items-center gap-2">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                        </path>
                                    </svg>
                                    Project Information
                                </h2>
                                <p class="text-blue-100 text-sm mt-1">Update the details for your project</p>
                            </div>

                            <!-- Card Body -->
                            <div class="p-8 space-y-6">
                                <!-- Title Field -->
                                <div>
                                    <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Project Title <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" id="title" name="title"
                                        value="{{ old('title', $project->title) }}"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 @error('title') border-red-500 @enderror"
                                        placeholder="Enter project title" required>
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
                                    <textarea id="description" name="description" rows="6"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 @error('description') border-red-500 @enderror"
                                        placeholder="Enter project description" required>{{ old('description', $project->description) }}</textarea>
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
                                    <p class="mt-2 text-xs text-gray-500">Provide a detailed description of your project
                                    </p>
                                </div>

                                <!-- Location Field -->
                                <div>
                                    <label for="location" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Location <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" id="location" name="location"
                                        value="{{ old('location', $project->location) }}"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 @error('location') border-red-500 @enderror"
                                        placeholder="Enter project location" required>
                                    @error('location')
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

                                <!-- Date Time Project Field -->
                                <div>
                                    <label for="datetime_project"
                                        class="block text-sm font-semibold text-gray-700 mb-2">
                                        Project Date & Time <span class="text-red-500">*</span>
                                    </label>
                                    <input type="datetime-local" id="datetime_project" name="datetime_project"
                                        value="{{ old('datetime_project', $project->datetime_project ? date('Y-m-d\TH:i', strtotime($project->datetime_project)) : '') }}"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 @error('datetime_project') border-red-500 @enderror"
                                        required>
                                    @error('datetime_project')
                                        <p class="mt-2 text-sm text-red-600 flex items-center gap-1">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            {{ $message }}
                                        </p>
                                    @enderror
                                    <p class="mt-2 text-xs text-gray-500">Select when the project will take place</p>
                                </div>

                                <!-- Participant Count Field -->
                                <div>
                                    <label for="participant_count"
                                        class="block text-sm font-semibold text-gray-700 mb-2">
                                        Participant Count <span class="text-red-500">*</span>
                                    </label>
                                    <input type="number" id="participant_count" name="participant_count"
                                        value="{{ old('participant_count', $project->participant_count) }}"
                                        min="0"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 @error('participant_count') border-red-500 @enderror"
                                        placeholder="Enter number of participants" required>
                                    @error('participant_count')
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

                                <!-- Image Backdrop Field -->
                                <div>
                                    <label for="image_backdrop"
                                        class="block text-sm font-semibold text-gray-700 mb-2">
                                        Backdrop Image
                                    </label>

                                    <!-- Image Preview -->
                                    <div id="image-preview-container" class="mb-4">
                                        <p class="text-xs text-gray-600 mb-2">
                                            <span
                                                id="preview-label">{{ $project->image_backdrop ? 'Current Image:' : 'No image uploaded yet' }}</span>
                                        </p>
                                        <div id="image-preview-wrapper"
                                            class="relative {{ $project->image_backdrop ? '' : 'hidden' }}">
                                            <img id="image-preview"
                                                src="{{ $project->image_backdrop ? asset('storage/' . $project->image_backdrop) : '' }}"
                                                alt="Backdrop preview"
                                                class="w-full h-64 object-cover rounded-lg border-2 border-gray-300 shadow-sm">
                                            <button type="button" id="remove-image"
                                                class="absolute top-2 right-2 bg-red-500 hover:bg-red-600 text-white rounded-full p-2 shadow-lg transition duration-200 {{ $project->image_backdrop ? '' : 'hidden' }}">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        <div id="no-image-placeholder"
                                            class="w-full h-64 bg-gray-100 rounded-lg border-2 border-dashed border-gray-300 flex items-center justify-center {{ $project->image_backdrop ? 'hidden' : '' }}">
                                            <div class="text-center">
                                                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                    </path>
                                                </svg>
                                                <p class="mt-2 text-sm text-gray-500">No image selected</p>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="file" id="image_backdrop" name="image_backdrop" accept="image/*"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 @error('image_backdrop') border-red-500 @enderror">
                                    @error('image_backdrop')
                                        <p class="mt-2 text-sm text-red-600 flex items-center gap-1">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            {{ $message }}
                                        </p>
                                    @enderror
                                    <p class="mt-2 text-xs text-gray-500">Upload a new image to replace the current
                                        backdrop (JPG, PNG, max 2MB)</p>
                                </div>

                                <!-- User Selection Field -->
                                <div>
                                    <label for="user_id" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Assign to User <span class="text-red-500">*</span>
                                    </label>
                                    <div class="relative">
                                        <select id="user_id" name="user_id"
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 appearance-none bg-white @error('user_id') border-red-500 @enderror"
                                            required>
                                            <option value="">Select a user</option>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}"
                                                    {{ old('user_id', $project->user_id) == $user->id ? 'selected' : '' }}>
                                                    {{ $user->name }} ({{ $user->email }})
                                                </option>
                                            @endforeach
                                        </select>
                                        <div
                                            class="absolute inset-y-0 right-0 flex items-center px-3 pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    @error('user_id')
                                        <p class="mt-2 text-sm text-red-600 flex items-center gap-1">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            {{ $message }}
                                        </p>
                                    @enderror
                                    <p class="mt-2 text-xs text-gray-500">Select the user who will manage this project
                                    </p>
                                </div>

                                <!-- Current User Preview -->
                                <div
                                    class="bg-gradient-to-r from-blue-50 to-indigo-50 p-4 rounded-lg border border-blue-200">
                                    <p class="text-xs font-semibold text-gray-600 mb-2">Current Manager</p>
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-10 h-10 rounded-full bg-gradient-to-r from-blue-500 to-indigo-500 flex items-center justify-center text-white font-semibold">
                                            {{ strtoupper(substr($project->user->name, 0, 2)) }}
                                        </div>
                                        <div>
                                            <p class="font-semibold text-gray-800 text-sm">{{ $project->user->name }}
                                            </p>
                                            <p class="text-xs text-gray-600">{{ $project->user->email }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex items-center gap-4">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-8 py-3 rounded-lg shadow-md transition duration-200 flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                Update Project
                            </button>
                            <a href="{{ route('project.index') }}"
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
                            <svg class="w-6 h-6 text-blue-500 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div>
                                <h3 class="font-semibold text-blue-900 mb-1">Editing Project</h3>
                                <p class="text-sm text-blue-700">You are updating an existing project. Make sure all
                                    required fields are filled correctly before saving changes. Upload a new image only
                                    if you want to replace the current backdrop.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </main>

    <script>
        // Image Preview Functionality
        const imageInput = document.getElementById('image_backdrop');
        const imagePreview = document.getElementById('image-preview');
        const imagePreviewWrapper = document.getElementById('image-preview-wrapper');
        const noImagePlaceholder = document.getElementById('no-image-placeholder');
        const previewLabel = document.getElementById('preview-label');
        const removeImageBtn = document.getElementById('remove-image');

        // Preview image when file is selected
        imageInput.addEventListener('change', function(e) {
            const file = e.target.files[0];

            if (file) {
                // Validate file type
                if (!file.type.startsWith('image/')) {
                    alert('Please select an image file');
                    imageInput.value = '';
                    return;
                }

                // Validate file size (2MB)
                if (file.size > 2 * 1024 * 1024) {
                    alert('Image size should not exceed 2MB');
                    imageInput.value = '';
                    return;
                }

                const reader = new FileReader();

                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreviewWrapper.classList.remove('hidden');
                    noImagePlaceholder.classList.add('hidden');
                    removeImageBtn.classList.remove('hidden');
                    previewLabel.textContent = 'New Image Preview:';
                }

                reader.readAsDataURL(file);
            }
        });

        // Remove image preview
        removeImageBtn.addEventListener('click', function() {
            imageInput.value = '';
            imagePreview.src = '';
            imagePreviewWrapper.classList.add('hidden');
            noImagePlaceholder.classList.remove('hidden');
            removeImageBtn.classList.add('hidden');
            previewLabel.textContent = 'No image uploaded yet';
        });
    </script>
</x-app-layout>
