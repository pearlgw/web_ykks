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
                        <a href="{{ route('staff.index') }}"
                            class="text-gray-500 hover:text-gray-700 transition duration-200">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </a>
                        <div>
                            <h1 class="text-3xl font-bold text-gray-800">Staff Detail</h1>
                            <p class="text-gray-500 mt-1">View staff information</p>
                        </div>
                    </div>
                    <a href="{{ route('staff.edit', $staff->id) }}"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg shadow-md transition duration-200 flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                            </path>
                        </svg>
                        Edit
                    </a>
                </div>

                <!-- Single Section - All Content -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">

                    <!-- Header -->
                    <div class="bg-gradient-to-r from-blue-600 to-blue-700 p-8">
                        <div class="flex items-center gap-6">
                            <div
                                class="w-20 h-20 bg-blue-400 rounded-xl flex items-center justify-center text-white font-bold text-2xl shadow-lg">
                                {{ strtoupper(substr($staff->name, 0, 2)) }}
                            </div>
                            <div>
                                <h2 class="text-3xl font-bold text-white mb-1">{{ $staff->name }}</h2>
                                <p class="text-blue-100">Staff Member</p>
                            </div>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="p-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">

                            <!-- Email -->
                            <div class="border-b-2 border-blue-200 pb-6">
                                <p class="text-xs font-bold text-blue-600 uppercase tracking-wider mb-3">Email</p>
                                <p class="text-lg text-gray-800 break-all">{{ $staff->email }}</p>
                            </div>

                            <!-- Role -->
                            <div class="border-b-2 border-blue-200 pb-6">
                                <p class="text-xs font-bold text-blue-600 uppercase tracking-wider mb-3">Role</p>
                                <div class="inline-block">
                                    <span class="px-4 py-2 bg-blue-100 text-blue-700 rounded-lg font-semibold text-sm">
                                        {{ ucfirst($staff->role ?? 'Staff') }}
                                    </span>
                                </div>
                            </div>

                            <!-- Created At -->
                            <div class="border-b-2 border-blue-200 pb-6">
                                <p class="text-xs font-bold text-blue-600 uppercase tracking-wider mb-3">Created At</p>
                                <p class="text-lg font-semibold text-gray-800">
                                    {{ $staff->created_at->format('d M Y, H:i') }}</p>
                                <p class="text-sm text-gray-500 mt-1">{{ $staff->created_at->diffForHumans() }}</p>
                            </div>

                            <!-- Updated At -->
                            <div class="border-b-2 border-blue-200 pb-6">
                                <p class="text-xs font-bold text-blue-600 uppercase tracking-wider mb-3">Updated At</p>
                                <p class="text-lg font-semibold text-gray-800">
                                    {{ $staff->updated_at->format('d M Y, H:i') }}</p>
                                <p class="text-sm text-gray-500 mt-1">{{ $staff->updated_at->diffForHumans() }}</p>
                            </div>

                        </div>

                        <!-- Staff ID -->
                        <div class="mt-8 pt-8 border-t-2 border-gray-200">
                            <p class="text-xs font-bold text-gray-600 uppercase tracking-wider mb-3">Staff ID</p>
                            <p class="text-lg font-mono text-gray-800">#{{ $staff->id }}</p>
                        </div>
                    </div>

                </div>

            </main>
        </div>
    </main>
</x-app-layout>
