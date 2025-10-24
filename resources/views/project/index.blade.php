<x-app-layout>
    <main class="bg-gray-50 h-screen flex flex-col overflow-hidden">
        @include('component_dashboard.header')

        <!-- Content Area -->
        <div class="flex flex-1 overflow-hidden">
            @include('component_dashboard.sidebar')

            <!-- Main Dashboard -->
            <main class="flex-1 overflow-y-auto p-10">
                <!-- Success Alert (Fixed Position) -->
                @if (session('success'))
                    <div id="success-notification"
                        class="fixed top-6 right-6 z-50 w-full max-w-md overflow-hidden rounded-xl bg-gradient-to-r from-green-50 to-emerald-50 border border-green-200 shadow-2xl animate-slide-in-right">
                        <div class="absolute left-0 top-0 bottom-0 w-1.5 bg-gradient-to-b from-green-400 to-emerald-500">
                        </div>

                        <div class="flex items-start gap-4 p-5 pl-6">
                            <div class="flex-shrink-0 relative">
                                <div class="absolute inset-0 bg-green-400 rounded-full opacity-20 animate-ping"></div>
                                <div
                                    class="relative w-10 h-10 bg-gradient-to-br from-green-400 to-emerald-500 rounded-full flex items-center justify-center shadow-md">
                                    <i class="fa-solid fa-circle-check text-white text-lg"></i>
                                </div>
                            </div>

                            <div class="flex-1 pt-1">
                                <h3 class="text-sm font-bold text-green-900 mb-1">Success!</h3>
                                <p class="text-sm text-green-700 leading-relaxed">{{ session('success') }}</p>
                            </div>

                            <button type="button" onclick="closeNotification('success-notification')"
                                class="flex-shrink-0 w-8 h-8 rounded-lg bg-green-100 hover:bg-green-200 text-green-600 hover:text-green-800 transition-all duration-200 flex items-center justify-center group">
                                <i class="fa-solid fa-xmark text-sm group-hover:scale-110 transition-transform"></i>
                            </button>
                        </div>

                        <div class="h-1 bg-green-200">
                            <div class="h-full bg-gradient-to-r from-green-400 to-emerald-500 animate-progress"></div>
                        </div>
                    </div>
                @endif

                <!-- Header with Search and Button -->
                <div class="flex items-center justify-between mb-8">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-800">Projects</h1>
                        <p class="text-gray-500 mt-1">Manage your project items</p>
                    </div>

                    <div class="flex gap-3 items-center">
                        <!-- Search Bar -->
                        <form method="GET" action="{{ route('project.index') }}" class="relative">
                            <input type="text" id="live-search" name="search" placeholder="Search project title..."
                                value="{{ request('search') }}"
                                class="px-4 py-3 pl-10 bg-white border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent shadow-sm transition duration-200 w-96">
                            <i
                                class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        </form>

                        <!-- New Project Button -->
                        <a href="{{ route('project.create') }}"
                            class="bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-semibold px-6 py-3 rounded-lg shadow-md transition duration-200 flex items-center gap-2 whitespace-nowrap">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4">
                                </path>
                            </svg>
                            New Project
                        </a>
                    </div>
                </div>

                <!-- Project Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                    @forelse($projects as $project)
                        <div
                            class="bg-white rounded-xl shadow-sm hover:shadow-lg transition duration-300 overflow-hidden border border-gray-100">

                            <!-- Image Backdrop -->
                            @if ($project->image_backdrop)
                                <div class="h-48 overflow-hidden bg-gradient-to-br from-blue-100 to-indigo-100">
                                    <img src="{{ asset('storage/' . $project->image_backdrop) }}"
                                        alt="{{ $project->title }}" class="w-full h-full object-cover">
                                </div>
                            @else
                                <div
                                    class="h-48 bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center">
                                    <svg class="w-20 h-20 text-white opacity-50" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                        </path>
                                    </svg>
                                </div>
                            @endif

                            <!-- Card Body -->
                            <div class="p-5">
                                <!-- Program Badge -->
                                <div class="mb-3">
                                    <span
                                        class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-indigo-100 text-indigo-700">
                                        <svg class="w-3 h-3 mr-1.5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                                            </path>
                                        </svg>
                                        {{ $project->program->title }}
                                    </span>
                                </div>

                                <!-- Title -->
                                <h3 class="text-xl font-bold text-gray-800 mb-2 line-clamp-2 text-justify">
                                    {{ $project->title }}
                                </h3>

                                <!-- Description -->
                                <p class="text-gray-600 text-sm mb-4 text-justify">
                                    {!! Str::words(strip_tags($project->description), 15, '...') !!}
                                </p>

                                <!-- Project Details -->
                                <div class="space-y-2 mb-4">
                                    <!-- Location -->
                                    <div class="flex items-center gap-2 text-gray-600 text-sm">
                                        <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                            </path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        <span class="line-clamp-1">{{ $project->location }}</span>
                                    </div>

                                    <!-- DateTime -->
                                    <div class="flex items-center gap-2 text-gray-600 text-sm">
                                        <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                        <span>{{ \Carbon\Carbon::parse($project->datetime_project)->format('d M Y, H:i') }}</span>
                                    </div>

                                    <!-- Participants -->
                                    <div class="flex items-center gap-2 text-gray-600 text-sm">
                                        <svg class="w-4 h-4 text-purple-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                            </path>
                                        </svg>
                                        <span>{{ $project->participant_count }} Participants</span>
                                    </div>
                                </div>

                                <!-- Author Info -->
                                <div class="flex items-center gap-2 pb-4 border-b border-gray-100">
                                    <div
                                        class="w-8 h-8 rounded-full bg-gradient-to-r from-blue-500 to-indigo-500 flex items-center justify-center text-white font-semibold text-xs">
                                        {{ strtoupper(substr($project->user->name, 0, 2)) }}
                                    </div>
                                    <div>
                                        <p class="text-xs font-semibold text-gray-700">{{ $project->user->name }}</p>
                                        <p class="text-xs text-gray-500">{{ $project->user->email }}</p>
                                    </div>
                                </div>

                                <!-- Footer with Actions -->
                                <div class="flex items-center justify-between pt-4">
                                    <div class="flex items-center gap-2 text-gray-500 text-xs">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z">
                                            </path>
                                        </svg>
                                        <span>{{ $project->created_at->format('d M Y') }}</span>
                                    </div>
                                    <div class="flex gap-2">
                                        <a href="{{ route('project.show', $project->id) }}"
                                            class="p-2 hover:bg-blue-50 rounded-lg transition duration-200 text-blue-600">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                                </path>
                                            </svg>
                                        </a>
                                        <a href="{{ route('project.edit', $project->id) }}"
                                            class="p-2 hover:bg-green-50 rounded-lg transition duration-200 text-green-600">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                                </path>
                                            </svg>
                                        </a>
                                        <button
                                            onclick="openDeleteModal({{ $project->id }}, '{{ addslashes($project->title) }}')"
                                            class="p-2 hover:bg-red-50 rounded-lg transition duration-200 text-red-600">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-3 text-center py-16">
                            <svg class="w-24 h-24 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                </path>
                            </svg>
                            <h3 class="text-xl font-semibold text-gray-600 mb-2">No Projects Yet</h3>
                            <p class="text-gray-500">
                                @if (request('search'))
                                    No results found for "{{ request('search') }}"
                                @else
                                    Create your first project to get started
                                @endif
                            </p>
                        </div>
                    @endforelse
                </div>

                <!-- Pagination -->
                @if ($projects->hasPages())
                    <div class="flex justify-center">
                        <nav class="bg-white rounded-lg shadow-sm px-4 py-3 border border-gray-100">
                            <ul class="flex items-center gap-2">
                                {{-- Previous Button --}}
                                @if ($projects->onFirstPage())
                                    <li>
                                        <span class="px-4 py-2 text-gray-400 cursor-not-allowed">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 19l-7-7 7-7"></path>
                                            </svg>
                                        </span>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ $projects->previousPageUrl() }}"
                                            class="px-4 py-2 text-indigo-600 hover:bg-indigo-50 rounded-lg transition duration-200">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 19l-7-7 7-7"></path>
                                            </svg>
                                        </a>
                                    </li>
                                @endif

                                {{-- Page Numbers --}}
                                @foreach ($projects->getUrlRange(1, $projects->lastPage()) as $page => $url)
                                    @if ($page == $projects->currentPage())
                                        <li>
                                            <span
                                                class="px-4 py-2 bg-gradient-to-r from-indigo-500 to-indigo-600 text-white rounded-lg font-semibold">{{ $page }}</span>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ $url }}"
                                                class="px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition duration-200 font-medium">{{ $page }}</a>
                                        </li>
                                    @endif
                                @endforeach

                                {{-- Next Button --}}
                                @if ($projects->hasMorePages())
                                    <li>
                                        <a href="{{ $projects->nextPageUrl() }}"
                                            class="px-4 py-2 text-indigo-600 hover:bg-indigo-50 rounded-lg transition duration-200">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                    </li>
                                @else
                                    <li>
                                        <span class="px-4 py-2 text-gray-400 cursor-not-allowed">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7"></path>
                                            </svg>
                                        </span>
                                    </li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                @endif
            </main>
        </div>
    </main>

    <!-- Delete Confirmation Modal -->
    <div id="deleteModal"
        class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 backdrop-blur-sm z-50 flex items-center justify-center p-4 animate-fade-in">
        <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full transform transition-all animate-scale-in">
            <!-- Modal Header -->
            <div class="bg-gradient-to-r from-red-500 to-rose-600 px-6 py-5 rounded-t-2xl">
                <div class="flex items-center gap-3">
                    <div
                        class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center backdrop-blur-sm">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-white">Delete Project</h3>
                        <p class="text-red-100 text-sm">This action cannot be undone</p>
                    </div>
                </div>
            </div>

            <!-- Modal Body -->
            <div class="p-6">
                <div class="mb-6">
                    <p class="text-gray-700 mb-4">Are you sure you want to delete this project?</p>
                    <div class="bg-gradient-to-r from-red-50 to-rose-50 border border-red-200 rounded-lg p-4">
                        <p class="text-xs font-semibold text-red-900 mb-2 uppercase tracking-wide">Project Title</p>
                        <p class="text-sm font-medium text-red-700" id="deleteProjectTitle"></p>
                    </div>
                </div>

                <div class="bg-gradient-to-r from-yellow-50 to-amber-50 border border-yellow-200 rounded-lg p-4 mb-6">
                    <div class="flex gap-3">
                        <svg class="w-5 h-5 text-yellow-600 flex-shrink-0 mt-0.5" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                            </path>
                        </svg>
                        <div>
                            <p class="text-sm font-bold text-yellow-900 mb-1">⚠️ Warning</p>
                            <p class="text-sm text-yellow-700 leading-relaxed">This will permanently delete the project
                                and all associated data. This action cannot be reversed.</p>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex gap-3">
                    <button onclick="closeDeleteModal()"
                        class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold px-6 py-3 rounded-lg transition-all duration-200 flex items-center justify-center gap-2 border border-gray-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                        Cancel
                    </button>
                    <form id="deleteForm" method="POST" class="flex-1">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="w-full bg-gradient-to-r from-red-500 to-rose-600 hover:from-red-600 hover:to-rose-700 text-white font-semibold px-6 py-3 rounded-lg shadow-lg transition-all duration-200 flex items-center justify-center gap-2 transform hover:scale-105">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                </path>
                            </svg>
                            Yes, Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        // Notification Functions
        function closeNotification(notificationId) {
            const notification = document.getElementById(notificationId);
            if (notification) {
                notification.style.transition = 'all 0.4s cubic-bezier(0.4, 0, 1, 1)';
                notification.style.opacity = '0';
                notification.style.transform = 'translateX(400px)';
                setTimeout(() => notification.remove(), 400);
            }
        }

        // Auto-close notifications after 6 seconds
        document.addEventListener('DOMContentLoaded', function() {
            const notifications = document.querySelectorAll('[id$="-notification"]');
            notifications.forEach(notification => {
                setTimeout(() => {
                    closeNotification(notification.id);
                }, 6000);
            });
        });

        // Modal Functions
        function openDeleteModal(projectId, projectTitle) {
            const modal = document.getElementById('deleteModal');
            const form = document.getElementById('deleteForm');
            const titleElement = document.getElementById('deleteProjectTitle');

            form.action = `/project/${projectId}`;
            titleElement.textContent = projectTitle;

            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeDeleteModal() {
            const modal = document.getElementById('deleteModal');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        document.getElementById('deleteModal')?.addEventListener('click', function(e) {
            if (e.target === this) {
                closeDeleteModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeDeleteModal();
            }
        });

        // Live Search
        document.addEventListener("DOMContentLoaded", function() {
            const searchInput = document.getElementById("live-search");
            const cardContainer = document.querySelector(
                ".grid.grid-cols-1.md\\:grid-cols-2.lg\\:grid-cols-3.gap-6.mb-8");
            let timer = null;

            if (searchInput && cardContainer) {
                searchInput.addEventListener("input", function() {
                    clearTimeout(timer);
                    timer = setTimeout(() => {
                        const query = searchInput.value.trim();

                        fetch(`/project?search=${encodeURIComponent(query)}`, {
                                headers: {
                                    "X-Requested-With": "XMLHttpRequest"
                                }
                            })
                            .then(response => response.text())
                            .then(html => {
                                const parser = new DOMParser();
                                const doc = parser.parseFromString(html, "text/html");
                                const newGrid = doc.querySelector(
                                    ".grid.grid-cols-1.md\\:grid-cols-2.lg\\:grid-cols-3.gap-6.mb-8"
                                );

                                if (newGrid) {
                                    cardContainer.innerHTML = newGrid.innerHTML;
                                }

                                // Update pagination
                                const newPagination = doc.querySelector(".flex.justify-center");
                                const currentPagination = document.querySelector(
                                    ".flex.justify-center");
                                if (newPagination && currentPagination) {
                                    currentPagination.innerHTML = newPagination.innerHTML;
                                }
                            })
                            .catch(err => console.error("Error fetching projects:", err));
                    }, 400);
                });
            }
        });
    </script>

    <!-- Animations -->
    <style>
        @keyframes fade-in {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes scale-in {
            from {
                opacity: 0;
                transform: scale(0.95);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes slide-in-right {
            from {
                opacity: 0;
                transform: translateX(400px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes progress {
            from {
                width: 100%;
            }

            to {
                width: 0%;
            }
        }

        @keyframes ping {
            0% {
                transform: scale(1);
                opacity: 0.2;
            }

            50% {
                transform: scale(1.3);
                opacity: 0;
            }

            100% {
                transform: scale(1);
                opacity: 0;
            }
        }

        .animate-fade-in {
            animation: fade-in 0.2s ease-out;
        }

        .animate-scale-in {
            animation: scale-in 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .animate-slide-in-right {
            animation: slide-in-right 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .animate-progress {
            animation: progress 6s linear;
        }

        .animate-ping {
            animation: ping 2s cubic-bezier(0, 0, 0.2, 1) infinite;
        }

        .line-clamp-1 {
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
</x-app-layout>
