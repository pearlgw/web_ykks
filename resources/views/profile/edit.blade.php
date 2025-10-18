<x-app-layout>
    <main class="bg-gray-50 h-screen flex flex-col overflow-hidden">
        @include('component_dashboard.header')

        <!-- Content Area -->
        <div class="flex flex-1 overflow-hidden">
            @include('component_dashboard.sidebar')

            <!-- Main Dashboard -->
            <main class="flex-1 overflow-y-auto p-10">
                <!-- Success Alert (Fixed Position) -->
                @if (session('status'))
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
                                <p class="text-sm text-green-700 leading-relaxed">{{ session('status') }}</p>
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

                <!-- Page Header -->
                <div class="mb-8">
                    <h1 class="text-3xl font-bold text-gray-800 mb-2">Profile Settings</h1>
                    <p class="text-gray-500">Manage your account settings and preferences</p>
                </div>

                <!-- Profile Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Left Sidebar - User Info Card -->
                    <div class="lg:col-span-1 space-y-6">
                        <!-- User Profile Card -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                            <div class="bg-gradient-to-r from-blue-500 to-indigo-500 px-6 py-8 text-center">
                                <div
                                    class="w-24 h-24 mx-auto bg-white bg-opacity-20 backdrop-blur-sm rounded-full flex items-center justify-center text-white font-bold text-3xl mb-4 border-4 border-white shadow-lg">
                                    {{ strtoupper(substr(Auth::user()->name, 0, 2)) }}
                                </div>
                                <h3 class="text-xl font-bold text-white mb-1">{{ Auth::user()->name }}</h3>
                                <p class="text-blue-100 text-sm">{{ Auth::user()->email }}</p>
                            </div>
                            <div class="p-6">
                                <div class="space-y-3 text-sm">
                                    <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                        <span class="text-gray-600">Account Type</span>
                                        <span
                                            class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-semibold">
                                            {{ ucfirst(Auth::user()->role ?? 'User') }}
                                        </span>
                                    </div>
                                    @if (Auth::user()->role === 'admin')
                                        <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                            <span class="text-gray-600">User ID</span>
                                            <span class="font-mono text-gray-800">#{{ Auth::user()->id }}</span>
                                        </div>
                                    @endif
                                    <div class="flex justify-between items-center py-2">
                                        <span class="text-gray-600">Member Since</span>
                                        <span class="text-gray-800">{{ Auth::user()->created_at->format('M Y') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Quick Stats -->
                        <div
                            class="bg-gradient-to-br from-blue-50 to-blue-50 rounded-xl shadow-sm border border-blue-200 p-6">
                            <h3 class="text-sm font-bold text-blue-900 mb-4 flex items-center gap-2">
                                <i class="fa-solid fa-chart-line text-blue-500"></i>
                                Account Activity
                            </h3>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center">
                                    <span class="text-sm text-blue-700">Last Login</span>
                                    <span class="text-sm font-semibold text-blue-900">Today</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-sm text-blue-700">Profile Updated</span>
                                    <span
                                        class="text-sm font-semibold text-blue-900">{{ Auth::user()->updated_at->diffForHumans() }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Content - Forms -->
                    <div class="lg:col-span-2 space-y-6">
                        <!-- Update Profile Information -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                            <div class="bg-gradient-to-r from-blue-500 to-indigo-600 px-6 py-4">
                                <h2 class="text-lg font-bold text-white flex items-center gap-2">
                                    <i class="fa-solid fa-user-pen"></i>
                                    Profile Information
                                </h2>
                                <p class="text-blue-100 text-sm mt-1">Update your account's profile information and
                                    email address</p>
                            </div>
                            <div class="p-6">
                                @include('profile.partials.update-profile-information-form')
                            </div>
                        </div>

                        <!-- Update Password -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                            <div class="bg-gradient-to-r from-blue-500 to-indigo-600 px-6 py-4">
                                <h2 class="text-lg font-bold text-white flex items-center gap-2">
                                    <i class="fa-solid fa-lock"></i>
                                    Update Password
                                </h2>
                                <p class="text-green-100 text-sm mt-1">Ensure your account is using a long, random
                                    password to stay secure</p>
                            </div>
                            <div class="p-6">
                                @include('profile.partials.update-password-form')
                            </div>
                        </div>

                        <!-- Delete Account -->
                        {{-- <div class="bg-white rounded-xl shadow-sm border border-red-200 overflow-hidden">
                            <div class="bg-gradient-to-r from-red-500 to-rose-600 px-6 py-4">
                                <h2 class="text-lg font-bold text-white flex items-center gap-2">
                                    <i class="fa-solid fa-triangle-exclamation"></i>
                                    Delete Account
                                </h2>
                                <p class="text-red-100 text-sm mt-1">Permanently delete your account and all of its data
                                </p>
                            </div>
                            <div class="p-6">
                                @include('profile.partials.delete-user-form')
                            </div>
                        </div> --}}
                    </div>
                </div>

                <!-- Help Section -->
                <div class="mt-6 bg-blue-50 border border-blue-200 rounded-lg p-6">
                    <div class="flex gap-3">
                        <i class="fa-solid fa-circle-info text-blue-500 text-xl flex-shrink-0"></i>
                        <div>
                            <h3 class="font-semibold text-blue-900 mb-1">Need Help?</h3>
                            <p class="text-sm text-blue-700">If you have any questions about your account settings or
                                need assistance, please contact our support team.</p>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </main>

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
    </script>

    <!-- Animations -->
    <style>
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

        .animate-slide-in-right {
            animation: slide-in-right 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .animate-progress {
            animation: progress 6s linear;
        }

        .animate-ping {
            animation: ping 2s cubic-bezier(0, 0, 0.2, 1) infinite;
        }
    </style>
</x-app-layout>
