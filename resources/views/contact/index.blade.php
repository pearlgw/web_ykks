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

                <!-- Header -->
                <div class="flex items-center justify-between mb-8">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-800">Contacts</h1>
                        <p class="text-gray-500 mt-1">Manage all contact messages</p>
                    </div>
                </div>

                <!-- Search Bar -->
                <div class="mb-6">
                    <div class="relative w-full max-w-md">
                        <i class="fas fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        <input type="text" id="live-search" name="search" placeholder="Search by name..."
                            value="{{ request('search') }}"
                            class="w-full px-5 py-3 pl-12 bg-white border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent shadow-sm transition duration-200">
                    </div>
                </div>

                <!-- Table Container -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                    @forelse($contacts as $index => $contact)
                        @if ($loop->first)
                            <!-- Table Header -->
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead>
                                        <tr class="bg-gradient-to-r from-gray-50 to-gray-100 border-b border-gray-200">
                                            <th class="px-6 py-4 text-left text-sm font-bold text-gray-700 w-16">
                                                <span class="text-gray-500">#</span>
                                            </th>
                                            <th class="px-6 py-4 text-left text-sm font-bold text-gray-700">
                                                Name
                                            </th>
                                            <th class="px-6 py-4 text-left text-sm font-bold text-gray-700">
                                                Email
                                            </th>
                                            <th class="px-6 py-4 text-left text-sm font-bold text-gray-700">
                                                Message
                                            </th>
                                            <th class="px-6 py-4 text-left text-sm font-bold text-gray-700 w-32">
                                                Created At
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-100">
                        @endif

                        <tr class="hover:bg-indigo-50 transition duration-150 group">
                            <!-- Number -->
                            <td class="px-6 py-4 text-sm text-gray-500 font-medium">
                                {{ ($contacts->currentPage() - 1) * $contacts->perPage() + $loop->iteration }}
                            </td>

                            <!-- Name -->
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-10 h-10 rounded-full bg-gradient-to-r from-indigo-500 to-purple-500 flex items-center justify-center text-white font-semibold text-sm flex-shrink-0">
                                        {{ strtoupper(substr($contact->name, 0, 2)) }}
                                    </div>
                                    <span class="text-sm font-medium text-gray-900">{{ $contact->name }}</span>
                                </div>
                            </td>

                            <!-- Email -->
                            <td class="px-6 py-4">
                                <span class="text-sm text-gray-600">{{ $contact->email }}</span>
                            </td>

                            <!-- Message -->
                            <td class="px-6 py-4">
                                <span class="text-sm text-gray-600">{{ $contact->message }}</span>
                            </td>

                            <!-- Created At -->
                            <td class="px-6 py-4">
                                <div class="text-sm">
                                    <p class="font-medium text-gray-900">{{ $contact->created_at->format('d M Y') }}</p>
                                    <p class="text-gray-500 text-xs">{{ $contact->created_at->format('H:i') }}</p>
                                </div>
                            </td>

                            <!-- Actions -->
                            {{-- <td class="px-6 py-4">
                                <div class="flex items-center justify-center gap-2">
                                    <a href="{{ route('contact.show', $contact->id) }}"
                                        class="p-2 hover:bg-blue-100 rounded-lg transition duration-200 text-blue-600 group-hover:scale-110 transform">
                                        <i class="fas fa-eye text-sm"></i>
                                    </a>
                                    <button
                                        onclick="openDeleteModal({{ $contact->id }}, '{{ addslashes($contact->name) }}')"
                                        class="p-2 hover:bg-red-100 rounded-lg transition duration-200 text-red-600 group-hover:scale-110 transform">
                                        <i class="fas fa-trash-alt text-sm"></i>
                                    </button>
                                </div>
                            </td> --}}
                        </tr>

                        @if ($loop->last)
                            </tbody>
                            </table>
                </div>
                @endif
            @empty
                <div class="text-center py-16 px-4">
                    <svg class="w-24 h-24 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                    <h3 class="text-xl font-semibold text-gray-600 mb-2">No Contacts Found</h3>
                    <p class="text-gray-500">
                        @if (request('search'))
                            No results found for "{{ request('search') }}"
                        @else
                            No contacts yet
                        @endif
                    </p>
                </div>
                @endforelse
        </div>

        <!-- Pagination -->
        @if ($contacts->hasPages())
            <div class="flex justify-center mt-8">
                <nav class="bg-white rounded-lg shadow-sm px-4 py-3 border border-gray-100 inline-flex items-center">
                    <ul class="flex items-center gap-1">
                        {{-- Previous Button --}}
                        @if ($contacts->onFirstPage())
                            <li>
                                <span class="px-3 py-2 text-gray-400 cursor-not-allowed rounded-lg">
                                    <i class="fas fa-chevron-left text-sm"></i>
                                </span>
                            </li>
                        @else
                            <li>
                                <a href="{{ $contacts->previousPageUrl() }}"
                                    class="px-3 py-2 text-indigo-600 hover:bg-indigo-50 rounded-lg transition duration-200 font-medium">
                                    <i class="fas fa-chevron-left text-sm"></i>
                                </a>
                            </li>
                        @endif

                        {{-- Page Numbers --}}
                        @foreach ($contacts->getUrlRange(1, $contacts->lastPage()) as $page => $url)
                            @if ($page == $contacts->currentPage())
                                <li>
                                    <span
                                        class="px-3 py-2 bg-gradient-to-r from-indigo-500 to-indigo-600 text-white rounded-lg font-semibold">{{ $page }}</span>
                                </li>
                            @elseif (
                                $page == 1 ||
                                    $page == $contacts->lastPage() ||
                                    ($page >= $contacts->currentPage() - 1 && $page <= $contacts->currentPage() + 1))
                                <li>
                                    <a href="{{ $url }}"
                                        class="px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition duration-200 font-medium">{{ $page }}</a>
                                </li>
                            @elseif ($page == $contacts->currentPage() - 2 || $page == $contacts->currentPage() + 2)
                                <li>
                                    <span class="px-2 py-2 text-gray-500">...</span>
                                </li>
                            @endif
                        @endforeach

                        {{-- Next Button --}}
                        @if ($contacts->hasMorePages())
                            <li>
                                <a href="{{ $contacts->nextPageUrl() }}"
                                    class="px-3 py-2 text-indigo-600 hover:bg-indigo-50 rounded-lg transition duration-200 font-medium">
                                    <i class="fas fa-chevron-right text-sm"></i>
                                </a>
                            </li>
                        @else
                            <li>
                                <span class="px-3 py-2 text-gray-400 cursor-not-allowed rounded-lg">
                                    <i class="fas fa-chevron-right text-sm"></i>
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
                        <h3 class="text-xl font-bold text-white">Delete Contact</h3>
                        <p class="text-red-100 text-sm">This action cannot be undone</p>
                    </div>
                </div>
            </div>

            <!-- Modal Body -->
            <div class="p-6">
                <div class="mb-6">
                    <p class="text-gray-700 mb-4">Are you sure you want to delete this contact?</p>
                    <div class="bg-gradient-to-r from-red-50 to-rose-50 border border-red-200 rounded-lg p-4">
                        <p class="text-xs font-semibold text-red-900 mb-2 uppercase tracking-wide">Contact Name</p>
                        <p class="text-sm font-medium text-red-700" id="deleteContactName"></p>
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
                            <p class="text-sm text-yellow-700 leading-relaxed">This will permanently delete the contact
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
        function openDeleteModal(contactId, contactName) {
            const modal = document.getElementById('deleteModal');
            const form = document.getElementById('deleteForm');
            const nameElement = document.getElementById('deleteContactName');

            form.action = `/contact/${contactId}`;
            nameElement.textContent = contactName;

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

        document.addEventListener("DOMContentLoaded", function() {
            const searchInput = document.getElementById("live-search");
            const tableContainer = document.querySelector(
                ".bg-white.rounded-xl.shadow-sm.border.border-gray-100.overflow-hidden");
            let timer = null;

            if (searchInput) {
                searchInput.addEventListener("input", function() {
                    clearTimeout(timer);
                    timer = setTimeout(() => {
                        const query = searchInput.value.trim();

                        fetch(`/contact?search=${encodeURIComponent(query)}`, {
                                headers: {
                                    "X-Requested-With": "XMLHttpRequest"
                                }
                            })
                            .then(response => response.text())
                            .then(html => {
                                // Ambil tabel baru dari HTML hasil fetch
                                const parser = new DOMParser();
                                const doc = parser.parseFromString(html, "text/html");
                                const newTable = doc.querySelector(
                                    ".bg-white.rounded-xl.shadow-sm.border.border-gray-100.overflow-hidden"
                                    );

                                if (newTable && tableContainer) {
                                    tableContainer.innerHTML = newTable.innerHTML;
                                }
                            })
                            .catch(err => console.error("Error fetching contacts:", err));
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
    </style>
</x-app-layout>
