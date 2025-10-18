<x-app-layout>
    <main class="bg-gray-50 h-screen flex flex-col overflow-hidden">
        @include('component_dashboard.header')

        <!-- Content Area -->
        <div class="flex flex-1 overflow-hidden">
            @include('component_dashboard.sidebar')

            <!-- Main Dashboard - YANG SCROLL -->
            <main class="flex-1 overflow-y-auto p-10">
                <!-- Breadcrumb -->
                <div class="flex items-center justify-between mb-8">
                    <div class="flex items-center gap-2">
                        <i class="fas fa-home text-gray-400"></i>
                        <span class="text-gray-600 text-sm font-medium">Dashboard</span>
                    </div>
                    <div class="text-xs text-gray-500">
                        <i class="fas fa-calendar-alt mr-2"></i>{{ now()->format('l, d F Y') }}
                    </div>
                </div>

                <!-- Welcome Section -->
                <div class="mb-10">
                    <h1 class="text-4xl font-bold text-gray-900 mb-2">Welcome back, <span
                            class="bg-gradient-to-r from-indigo-600 to-blue-600 bg-clip-text text-transparent">{{ Auth::user()->name ?? 'Staff' }}</span>!
                    </h1>
                    <p class="text-gray-500">Here's your dashboard overview</p>
                </div>

                @if (Auth::user()->role === 'admin')
                    <!-- Stats Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-10">

                        <!-- Staff Card -->
                        <div
                            class="group bg-white rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 transition-all duration-300 overflow-hidden">
                            <div class="p-8 relative">
                                <!-- Background Decoration -->
                                <div
                                    class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-indigo-100 to-transparent rounded-full -mr-8 -mt-8 group-hover:scale-110 transition-transform duration-300">
                                </div>

                                <!-- Content -->
                                <div class="relative z-10">
                                    <div class="flex items-center justify-between mb-6">
                                        <div
                                            class="w-14 h-14 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                            <i class="fas fa-users text-white text-xl"></i>
                                        </div>
                                    </div>
                                    <h3 class="text-gray-600 text-sm font-medium mb-2">Total Staff</h3>
                                    <div class="text-4xl font-bold text-gray-900 mb-3">
                                        {{ $jumlahStaff }}
                                    </div>
                                    <p class="text-xs text-gray-500">
                                        <i class="fas fa-info-circle mr-1"></i>Active members in system
                                    </p>
                                </div>
                            </div>
                            <!-- Card Footer -->
                            <div class="h-1 bg-gradient-to-r from-indigo-500 to-indigo-600"></div>
                        </div>

                        <!-- Content Card -->
                        <div
                            class="group bg-white rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 transition-all duration-300 overflow-hidden">
                            <div class="p-8 relative">
                                <!-- Background Decoration -->
                                <div
                                    class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-purple-100 to-transparent rounded-full -mr-8 -mt-8 group-hover:scale-110 transition-transform duration-300">
                                </div>

                                <!-- Content -->
                                <div class="relative z-10">
                                    <div class="flex items-center justify-between mb-6">
                                        <div
                                            class="w-14 h-14 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                            <i class="fas fa-file-alt text-white text-xl"></i>
                                        </div>
                                    </div>
                                    <h3 class="text-gray-600 text-sm font-medium mb-2">Total Content</h3>
                                    <div class="text-4xl font-bold text-gray-900 mb-3">
                                        {{ $jumlahContent }}
                                    </div>
                                    <p class="text-xs text-gray-500">
                                        <i class="fas fa-info-circle mr-1"></i>Published articles
                                    </p>
                                </div>
                            </div>
                            <!-- Card Footer -->
                            <div class="h-1 bg-gradient-to-r from-purple-500 to-purple-600"></div>
                        </div>

                        <!-- Contact Card -->
                        <div
                            class="group bg-white rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 transition-all duration-300 overflow-hidden">
                            <div class="p-8 relative">
                                <!-- Background Decoration -->
                                <div
                                    class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-blue-100 to-transparent rounded-full -mr-8 -mt-8 group-hover:scale-110 transition-transform duration-300">
                                </div>

                                <!-- Content -->
                                <div class="relative z-10">
                                    <div class="flex items-center justify-between mb-6">
                                        <div
                                            class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                            <i class="fas fa-envelope text-white text-xl"></i>
                                        </div>
                                    </div>
                                    <h3 class="text-gray-600 text-sm font-medium mb-2">Total Contacts</h3>
                                    <div class="text-4xl font-bold text-gray-900 mb-3">
                                        {{ $jumlahContact }}
                                    </div>
                                    <p class="text-xs text-gray-500">
                                        <i class="fas fa-info-circle mr-1"></i>Received messages
                                    </p>
                                </div>
                            </div>
                            <!-- Card Footer -->
                            <div class="h-1 bg-gradient-to-r from-blue-500 to-blue-600"></div>
                        </div>
                    </div>
                @endif

            </main>

        </div>
    </main>

    <!-- Animations -->
    <style>
        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.5;
            }
        }

        .animate-pulse {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
    </style>
</x-app-layout>
