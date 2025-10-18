<!-- Navbar -->
<nav class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo and Title -->
            <div class="flex items-center space-x-3">
                <div class="p-2 w-12 h-12 flex items-center justify-center rounded-lg">
                    <img src="{{ asset('img/logo.png') }}" alt="logo" class="w-full h-full object-cover rounded">
                </div>
                <span class="text-gray-800 font-bold text-sm md:text-base">
                    Yayasan Kesejahteraan Keluarga Soegijapranata
                </span>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden lg:flex items-center space-x-8">
                <a href="/"
                    class="text-gray-700 hover:text-cyan-600 font-medium transition duration-200 relative group">
                    Home
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-cyan-600 group-hover:w-full transition-all duration-300"></span>
                </a>
                @php
                    $isHomePage = request()->is('/');
                    $isAboutPage = request()->is('about');
                @endphp

                <!-- About us -->
                <a href="{{ $isHomePage ? '#about' : url('/about') }}"
                    class="text-gray-700 font-medium transition duration-200 relative group
        {{ $isAboutPage ? 'text-cyan-600' : 'hover:text-cyan-600' }}">
                    About us
                    <span
                        class="absolute bottom-0 left-0 h-0.5 bg-cyan-600 transition-all duration-300
            {{ $isAboutPage ? 'w-full' : 'w-0 group-hover:w-full' }}">
                    </span>
                </a>

                <!-- Programs -->
                <a href="{{ $isAboutPage ? url('/#program') : '#program' }}"
                    class="text-gray-700 hover:text-cyan-600 font-medium transition duration-200 relative group">
                    Programs & Projects
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-cyan-600 group-hover:w-full transition-all duration-300"></span>
                </a>

                <!-- Literacy -->
                <a href="{{ $isAboutPage ? url('/#literacy') : '#literacy' }}"
                    class="text-gray-700 hover:text-cyan-600 font-medium transition duration-200 relative group">
                    Literacy Corner
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-cyan-600 group-hover:w-full transition-all duration-300"></span>
                </a>

                <!-- News -->
                <a href="{{ $isAboutPage ? url('/#news') : '#news' }}"
                    class="text-gray-700 hover:text-cyan-600 font-medium transition duration-200 relative group">
                    News
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-cyan-600 group-hover:w-full transition-all duration-300"></span>
                </a>

                @auth
                    <a href="{{ route('dashboard') }}"
                        class="bg-gradient-to-r from-cyan-600 to-cyan-600 hover:from-cyan-700 hover:to-cyan-700 text-white px-6 py-2.5 rounded-lg font-medium transition duration-200 transform hover:scale-105 shadow-md">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class="bg-gradient-to-r from-cyan-600 to-cyan-600 hover:from-cyan-700 hover:to-cyan-700 text-white px-6 py-2.5 rounded-lg font-medium transition duration-200 transform hover:scale-105 shadow-md">
                        Login
                    </a>
                @endauth
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobileMenuBtn"
                class="lg:hidden text-gray-700 hover:text-cyan-600 focus:outline-none transition duration-200">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu"
        class="hidden lg:hidden bg-white border-t border-gray-200 overflow-hidden transition-all duration-300 max-h-96">
        <div class="px-4 py-4 space-y-2">
            <!-- Mobile Menu Items -->
            <a href="/"
                class="block px-4 py-3 text-gray-700 hover:bg-cyan-50 hover:text-cyan-600 rounded-lg font-medium transition duration-200">
                <i class="fas fa-home w-5 mr-3"></i>Home
            </a>
            <a href="#about"
                class="block px-4 py-3 text-gray-700 hover:bg-cyan-50 hover:text-cyan-600 rounded-lg font-medium transition duration-200"
                onclick="closeMobileMenu()">
                <i class="fas fa-info-circle w-5 mr-3"></i>About us
            </a>
            <a href="#program"
                class="block px-4 py-3 text-gray-700 hover:bg-cyan-50 hover:text-cyan-600 rounded-lg font-medium transition duration-200"
                onclick="closeMobileMenu()">
                <i class="fas fa-project-diagram w-5 mr-3"></i>Programs & Projects
            </a>
            <a href="#literacy"
                class="block px-4 py-3 text-gray-700 hover:bg-cyan-50 hover:text-cyan-600 rounded-lg font-medium transition duration-200"
                onclick="closeMobileMenu()">
                <i class="fas fa-book w-5 mr-3"></i>Literacy Corner
            </a>
            <a href="#news"
                class="block px-4 py-3 text-gray-700 hover:bg-cyan-50 hover:text-cyan-600 rounded-lg font-medium transition duration-200"
                onclick="closeMobileMenu()">
                <i class="fas fa-newspaper w-5 mr-3"></i>News
            </a>

            <!-- Divider -->
            <div class="border-t border-gray-200 my-2"></div>

            <!-- Mobile Auth Button -->
            @auth
                <a href="{{ route('dashboard') }}"
                    class="block w-full bg-gradient-to-r from-cyan-600 to-cyan-600 hover:from-cyan-700 hover:to-cyan-700 text-white px-4 py-3 rounded-lg font-medium transition duration-200 text-center mt-2">
                    <i class="fas fa-tachometer-alt w-5 mr-2"></i>Dashboard
                </a>
            @else
                <a href="{{ route('login') }}"
                    class="block w-full bg-gradient-to-r from-cyan-600 to-cyan-600 hover:from-cyan-700 hover:to-cyan-700 text-white px-4 py-3 rounded-lg font-medium transition duration-200 text-center mt-2">
                    <i class="fas fa-sign-in-alt w-5 mr-2"></i>Login
                </a>
            @endauth
        </div>
    </div>
</nav>

<!-- Scripts -->
<script>
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');

    // Toggle Mobile Menu
    mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // Close Mobile Menu
    function closeMobileMenu() {
        mobileMenu.classList.add('hidden');
    }

    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
        if (!mobileMenuBtn.contains(e.target) && !mobileMenu.contains(e.target)) {
            mobileMenu.classList.add('hidden');
        }
    });

    // Close menu on window resize if going to desktop
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 1024) {
            mobileMenu.classList.add('hidden');
        }
    });
</script>
