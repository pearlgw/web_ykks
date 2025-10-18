<!-- Elegant Topbar -->
<header class="bg-gradient-to-r from-white to-gray-50 shadow-sm border-b border-gray-200">
    <div class="flex items-center justify-between px-6 py-4">

        <!-- Logo dan Judul -->
        <a href="/" class="flex items-center gap-4">
            <div class="relative">
                <img src="{{ asset('img/logo.png') }}" alt="Logo"
                    class="h-12 w-12 rounded-full object-cover shadow-md hover:shadow-lg transition duration-200" />
                <div
                    class="absolute inset-0 rounded-full bg-indigo-500 opacity-0 hover:opacity-10 transition duration-200">
                </div>
            </div>
            <div class="hidden sm:block">
                <h1 class="font-bold text-base text-gray-900">Yayasan Kesejahteraan Keluarga</h1>
                <p class="text-xs text-gray-500">Soegijapranata</p>
            </div>
        </a>

        <!-- User Dropdown -->
        <div class="relative group">
            <!-- Tombol User -->
            <button id="userMenuButton"
                class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-gray-100 transition duration-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 group">
                <div class="text-right">
                    <p class="font-semibold text-sm text-gray-900">{{ Auth::user()->name }}</p>
                    <p class="text-xs text-gray-500">{{ Auth::user()->role }}</p>
                </div>
                <div
                    class="flex items-center justify-center w-10 h-10 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full shadow-md">
                    <i class="fa-solid fa-user text-white text-sm"></i>
                </div>
                <i
                    class="fa-solid fa-chevron-down text-gray-500 text-xs group-hover:text-gray-700 transition duration-200 transform group-hover:rotate-180"></i>
            </button>

            <!-- Dropdown Menu -->
            <div id="userMenuDropdown"
                class="hidden absolute right-0 mt-3 w-56 bg-white border border-gray-200 rounded-xl shadow-xl overflow-hidden z-50 opacity-0 transform scale-95 group-hover:opacity-100 group-hover:scale-100 group-hover:flex group-hover:flex-col transition duration-200 origin-top-right">

                <!-- Header Dropdown -->
                <div class="bg-gradient-to-r from-blue-500 to-indigo-500 px-4 py-3">
                    <p class="font-semibold text-white text-sm">{{ Auth::user()->name }}</p>
                    <p class="text-blue-100 text-xs mt-1">{{ Auth::user()->email ?? 'admin@yayasan.id' }}</p>
                </div>

                <!-- Menu Items -->
                <div class="py-2">
                    <a href="{{ route('profile.edit') }}"
                        class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition duration-150 border-l-4 border-transparent hover:border-indigo-500">
                        <i class="fa-solid fa-user-circle text-indigo-500 w-5 text-center"></i>
                        <span class="text-sm font-medium">Profil Saya</span>
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="w-full flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-red-50 hover:text-red-600 transition duration-150 border-l-4 border-transparent hover:border-red-500">
                            <i class="fa-solid fa-sign-out-alt text-red-500 w-5 text-center"></i>
                            <span class="text-sm font-medium">Keluar</span>
                        </button>
                    </form>
                    {{--
                    <a href="#"
                        class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition duration-150 border-l-4 border-transparent hover:border-indigo-500">
                        <i class="fa-solid fa-gear text-indigo-500 w-5 text-center"></i>
                        <span class="text-sm font-medium">Pengaturan</span>
                    </a> --}}
                </div>

                <!-- Divider -->
                {{-- <div class="border-t border-gray-200"></div> --}}

                <!-- Logout -->
                {{-- <div class="py-2">

                </div> --}}
            </div>
        </div>
    </div>
</header>

<!-- Script untuk Dropdown -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const button = document.getElementById('userMenuButton');
        const dropdown = document.getElementById('userMenuDropdown');

        button.addEventListener('click', (e) => {
            e.stopPropagation();
            dropdown.classList.toggle('hidden');
        });

        // Tutup dropdown saat klik di luar
        document.addEventListener('click', (e) => {
            if (!button.contains(e.target) && !dropdown.contains(e.target)) {
                dropdown.classList.add('hidden');
            }
        });

        // Tutup dropdown saat menekan ESC
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                dropdown.classList.add('hidden');
            }
        });
    });
</script>
