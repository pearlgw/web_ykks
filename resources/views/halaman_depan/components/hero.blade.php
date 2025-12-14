<!-- Hero Section -->
<section class="relative h-screen overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=1920&q=80" alt="Children smiling"
            class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-black/30 to-black/60"></div>
    </div>

    <!-- Hero Content -->
    <div class="relative z-10 h-full flex flex-col items-center justify-center">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 w-full text-center">
            <!-- Main Heading with Animation -->
            <div class="mb-8 space-y-4">
                <h1 class="text-white text-5xl md:text-6xl lg:text-7xl font-bold leading-tight animate-fade-in-up">
                    Memberdayakan Keluarga,
                </h1>
                <h1
                    class="text-white text-5xl md:text-6xl lg:text-7xl font-bold leading-tight animate-fade-in-up-delay">
                    Meningkatkan kualitas Hidup
                </h1>
            </div>

            <!-- Subtitle -->
            <p class="text-white/80 text-lg md:text-xl max-w-2xl mx-auto mb-12 animate-fade-in-up-delay-2">
                Membangun masa depan yang lebih baik untuk keluarga Indonesia melalui program kesejahteraan yang
                komprehensif
            </p>

            <!-- CTA Button -->
            <div class="flex justify-center gap-4 mb-24 animate-fade-in-up-delay-3">
                <a href="#about"
                    class="px-8 py-4 bg-white text-gray-900 font-bold rounded-lg hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 shadow-lg">
                    About Us
                </a>
                @auth
                    <a href="{{ route('dashboard') }}"
                        class="px-8 py-4 bg-white/20 backdrop-blur-sm text-white font-bold rounded-lg border border-white/30 hover:bg-white/30 transition-all duration-300 transform hover:scale-105">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class="px-8 py-4 bg-white/20 backdrop-blur-sm text-white font-bold rounded-lg border border-white/30 hover:bg-white/30 transition-all duration-300 transform hover:scale-105">
                        Login
                    </a>
                @endauth
            </div>
        </div>
    </div>
</section>
