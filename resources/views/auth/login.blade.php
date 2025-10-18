<x-guest-layout>
    <div class="w-full max-w-5xl bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="flex flex-col md:flex-row">
            <!-- Left Section - Logo -->
            <div
                class="md:w-1/2 bg-white p-8 md:p-12 flex flex-col items-center justify-center border-r border-gray-200">
                <div class="relative mb-6">
                    <img src="{{ asset('img/logo_big.png') }}" alt="Logo" class="h-48 rounded-lg p-2">
                </div>
                <div class="text-center">
                    <h1 class="text-lg font-semibold text-gray-800">
                        Yayasan Keluarga Sejahtera Soegijapranata
                    </h1>
                </div>
            </div>

            <!-- Right Section - Login Form -->
            <div class="md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                <h2 class="text-2xl font-bold text-gray-800 mb-8">Sign in</h2>

                <!-- ✅ Gunakan form Laravel Breeze -->
                <form method="POST" action="{{ route('login') }}" class="space-y-4">
                    @csrf

                    <!-- Email Input -->
                    <div>
                        <input id="email" name="email" type="email" placeholder="Enter email"
                            value="{{ old('email') }}" required autofocus autocomplete="username"
                            class="w-full px-4 py-3 bg-blue-50 border border-transparent rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 focus:bg-white transition text-gray-700 placeholder-gray-400">
                        @error('email')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password Input -->
                    <div class="relative">
                        <input id="password" name="password" type="password" placeholder="Password" required
                            autocomplete="current-password"
                            class="w-full px-4 py-3 bg-blue-50 border border-transparent rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 focus:bg-white transition text-gray-700 placeholder-gray-400">
                        <button type="button" onclick="togglePassword()"
                            class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600">
                            <i class="far fa-eye" id="toggleIcon"></i>
                        </button>
                        @error('password')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center">
                        <input id="remember_me" type="checkbox" name="remember"
                            class="rounded border-gray-300 text-cyan-500 shadow-sm focus:ring-cyan-400">
                        <label for="remember_me" class="ml-2 text-sm text-gray-600">Remember me</label>
                    </div>

                    <!-- Login Button -->
                    <button type="submit"
                        class="w-full bg-cyan-500 hover:bg-cyan-600 text-white font-semibold py-3 rounded-lg transition duration-200">
                        Login
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('toggleIcon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }
    </script>
</x-guest-layout>
