<!-- Elegant Sidebar -->
<aside
    class="w-64 bg-white border-r border-gray-200 flex flex-col justify-between py-8 h-screen sticky top-0 overflow-y-auto">

    <!-- Navigation Menu -->
    <nav class="flex-1 px-4 space-y-3">

        <!-- Dashboard -->
        <a href="{{ route('dashboard') }}"
            class="group flex items-center gap-3 px-4 py-3 rounded-xl font-medium transition-all duration-200
        {{ request()->routeIs('dashboard')
            ? 'bg-gradient-to-r from-blue-50 to-blue-100 text-blue-600 border border-blue-200'
            : 'text-gray-600 hover:text-blue-600 hover:bg-blue-50' }}">
            <div class="flex items-center justify-center w-6 h-6">
                <i
                    class="fas fa-chart-line w-5 h-5 {{ request()->routeIs('dashboard') ? 'text-blue-600' : 'text-gray-400 group-hover:text-blue-500' }} transition-colors"></i>
            </div>
            <span>Dashboard</span>

            <!-- Indicator -->
            @if (request()->routeIs('dashboard'))
                <div class="ml-auto w-2 h-2 bg-blue-600 rounded-full"></div>
            @endif
        </a>

        @if (Auth::user()->role === 'admin')
            <a href="{{ route('staff.index') }}"
                class="group flex items-center gap-3 px-4 py-3 rounded-xl font-medium transition-all duration-200
            {{ request()->is('staff*')
                ? 'bg-gradient-to-r from-blue-50 to-blue-100 text-blue-600 border border-blue-200'
                : 'text-gray-600 hover:text-blue-600 hover:bg-blue-50' }}">
                <div class="flex items-center justify-center w-6 h-6">
                    <i
                        class="fas fa-user w-5 h-5 {{ request()->is('staff*') ? 'text-blue-600' : 'text-gray-400 group-hover:text-blue-500' }} transition-colors"></i>
                </div>
                <span>Staff</span>

                <!-- Indicator -->
                @if (request()->is('staff*'))
                    <div class="ml-auto w-2 h-2 bg-blue-600 rounded-full"></div>
                @endif
            </a>

            <a href="{{ route('program.index') }}"
                class="group flex items-center gap-3 px-4 py-3 rounded-xl font-medium transition-all duration-200
            {{ request()->is('program*')
                ? 'bg-gradient-to-r from-blue-50 to-blue-100 text-blue-600 border border-blue-200'
                : 'text-gray-600 hover:text-blue-600 hover:bg-blue-50' }}">
                <div class="flex items-center justify-center w-6 h-6">
                    <i
                        class="fas fa-project-diagram w-5 h-5 {{ request()->is('program*') ? 'text-blue-600' : 'text-gray-400 group-hover:text-blue-500' }} transition-colors"></i>
                </div>
                <span>Program</span>

                <!-- Indicator -->
                @if (request()->is('program*'))
                    <div class="ml-auto w-2 h-2 bg-blue-600 rounded-full"></div>
                @endif
            </a>

            <a href="{{ route('contact.index') }}"
                class="group flex items-center gap-3 px-4 py-3 rounded-xl font-medium transition-all duration-200
            {{ request()->is('contact*')
                ? 'bg-gradient-to-r from-blue-50 to-blue-100 text-blue-600 border border-blue-200'
                : 'text-gray-600 hover:text-blue-600 hover:bg-blue-50' }}">
                <div class="flex items-center justify-center w-6 h-6">
                    <i
                        class="fas fa-paper-plane w-5 h-5 {{ request()->is('contact*') ? 'text-blue-600' : 'text-gray-400 group-hover:text-blue-500' }} transition-colors"></i>
                </div>
                <span>Contact</span>

                <!-- Indicator -->
                @if (request()->is('contact*'))
                    <div class="ml-auto w-2 h-2 bg-blue-600 rounded-full"></div>
                @endif
            </a>
        @endif

        <!-- Content -->
        <a href="{{ url('/content') }}"
            class="group flex items-center gap-3 px-4 py-3 rounded-xl font-medium transition-all duration-200
            {{ request()->is('content*')
                ? 'bg-gradient-to-r from-blue-50 to-blue-100 text-blue-600 border border-blue-200'
                : 'text-gray-600 hover:text-blue-600 hover:bg-blue-50' }}">
            <div class="flex items-center justify-center w-6 h-6">
                <i
                    class="fas fa-cloud-upload-alt w-5 h-5 {{ request()->is('content*') ? 'text-blue-600' : 'text-gray-400 group-hover:text-blue-500' }} transition-colors"></i>
            </div>
            <span>Content</span>

            <!-- Indicator -->
            @if (request()->is('content*'))
                <div class="ml-auto w-2 h-2 bg-blue-600 rounded-full"></div>
            @endif
        </a>

        <a href="{{ url('/project') }}"
            class="group flex items-center gap-3 px-4 py-3 rounded-xl font-medium transition-all duration-200
            {{ request()->is('project*')
                ? 'bg-gradient-to-r from-blue-50 to-blue-100 text-blue-600 border border-blue-200'
                : 'text-gray-600 hover:text-blue-600 hover:bg-blue-50' }}">
            <div class="flex items-center justify-center w-6 h-6">
                <i
                    class="fas fa-layer-group w-5 h-5 {{ request()->is('project*') ? 'text-blue-600' : 'text-gray-400 group-hover:text-blue-500' }} transition-colors"></i>
            </div>
            <span>Project</span>

            <!-- Indicator -->
            @if (request()->is('project*'))
                <div class="ml-auto w-2 h-2 bg-blue-600 rounded-full"></div>
            @endif
        </a>

        <!-- Profile -->
        <a href="{{ url('/profile') }}"
            class="group flex items-center gap-3 px-4 py-3 rounded-xl font-medium transition-all duration-200
            {{ request()->is('profile*')
                ? 'bg-gradient-to-r from-blue-50 to-blue-100 text-blue-600 border border-blue-200'
                : 'text-gray-600 hover:text-blue-600 hover:bg-blue-50' }}">
            <div class="flex items-center justify-center w-6 h-6">
                <i
                    class="fas fa-user-circle w-5 h-5 {{ request()->is('profile*') ? 'text-blue-600' : 'text-gray-400 group-hover:text-blue-500' }} transition-colors"></i>
            </div>
            <span>Profile</span>

            <!-- Indicator -->
            @if (request()->is('profile*'))
                <div class="ml-auto w-2 h-2 bg-blue-600 rounded-full"></div>
            @endif
        </a>
    </nav>

    <!-- Logout Button -->
    <div class="px-4">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="group w-full flex items-center justify-center gap-2 px-4 py-3 bg-gradient-to-r from-red-50 to-red-100 text-red-600 rounded-xl font-medium border border-red-200 hover:from-red-100 hover:to-red-200 hover:border-red-300 transition-all duration-200 transform hover:scale-105">
                <i class="fas fa-sign-out-alt w-5 h-5"></i>
                <span>Logout</span>
            </button>
        </form>

        <!-- User Info (Optional) -->
        <div class="mt-4 p-3 bg-gray-50 rounded-xl border border-gray-200">
            <p class="text-xs text-gray-500">Logged in as</p>
            <p class="text-sm font-semibold text-gray-800 truncate">{{ Auth::user()->name }}</p>
        </div>
    </div>
</aside>
