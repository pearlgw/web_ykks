<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Yayasan Kesejahteraan Keluarga Soegijapranata') }}</title>
    <link rel="icon" href="{{ asset('img/rel_icon.png') }}" type="image/png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        html {
            scroll-behavior: smooth;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .delay-1 {
            animation-delay: 0.1s;
        }

        .delay-2 {
            animation-delay: 0.2s;
        }

        .delay-3 {
            animation-delay: 0.3s;
        }
    </style>
</head>

<body class="font-poppins">
    @include('halaman_depan.components.navbar')

    <!-- About & History Section -->
    <section class="pt-10 pb-24 bg-white" id="about">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Header -->
            <div class="mb-16 animate-fade-in-up opacity-0">
                <div class="inline-flex items-center gap-3 mb-6">
                    <div class="w-12 h-1 bg-cyan-500"></div>
                    <span class="text-xs font-bold text-cyan-500 uppercase tracking-widest">About Us</span>
                </div>
                <h2 class="text-5xl md:text-6xl font-bold text-gray-900 leading-tight">
                    Our History
                </h2>
            </div>

            <!-- Main Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                <!-- Left: Description -->
                <div class="animate-fade-in-up opacity-0 delay-1">
                    <p class="text-lg text-gray-700 leading-relaxed mb-6">
                        Founded in 1990, Yayasan Kesejahteraan Keluarga Soegijapranata (YKKS) adalah organisasi
                        non-profit yang berdedikasi untuk meningkatkan kesejahteraan keluarga, pendidikan, dan
                        pemberdayaan sosial di Indonesia.
                    </p>

                    <p class="text-lg text-gray-700 leading-relaxed mb-8">
                        Dengan kepercayaan mendalam bahwa keluarga yang kuat membangun masyarakat yang kuat, YKKS
                        menyediakan program yang mendukung perempuan, anak-anak, dan kelompok rentan melalui inisiatif
                        pendidikan, kesehatan, dan berbasis komunitas. Over the years, YKKS has grown into a trusted
                        foundation that uplifts lives and encourages inclusive development across local communities.
                    </p>

                    <!-- Scroll Down Button -->
                    <button onclick="scrollToNext()"
                        class="inline-flex items-center gap-2 bg-cyan-500 hover:bg-cyan-600 text-white font-semibold px-8 py-3 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg group">
                        <span>Visi & Misi</span>
                        <i class="fas fa-chevron-down group-hover:translate-y-1 transition-transform"></i>
                    </button>
                </div>

                <!-- Right: Image with Overlay -->
                <div class="animate-fade-in-up opacity-0 delay-2">
                    <div class="relative group">
                        <div class="rounded-3xl overflow-hidden shadow-2xl h-[450px] md:h-[500px]">
                            <img src="{{ asset('img/about.jpg') }}" alt="Our Team" class="w-full h-full object-cover">
                        </div>

                        <!-- Floating Badge -->
                        <div
                            class="absolute bottom-8 left-8 bg-white rounded-xl p-4 shadow-2xl backdrop-blur-sm border border-white/20">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 bg-cyan-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-heart text-cyan-500 text-lg"></i>
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900 text-sm">Trusted</p>
                                    <p class="text-xs text-gray-600">Since 1990</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="py-24 bg-gradient-to-br from-cyan-400 to-cyan-300 relative overflow-hidden">
        <!-- Background Decoration -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-white/10 rounded-full -mr-48 -mt-48"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-white/10 rounded-full -ml-48 -mb-48"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

            <!-- Section Header -->
            <div class="text-center mb-16 animate-fade-in-up opacity-0">
                <h2 class="text-3xl md:text-6xl font-bold text-gray-800 mb-4">
                    Mission & Vision
                </h2>
                <p class="text-xl text-gray-800 max-w-2xl mx-auto">
                    Komitmen kami untuk masa depan yang lebih baik
                </p>
            </div>

            <!-- Video Section -->
            <div class="mb-20 animate-fade-in-up opacity-0 delay-1">
                <div class="rounded-3xl overflow-hidden shadow-2xl h-[400px] md:h-[500px] relative group">
                    <img src="{{ asset('img/video.png') }}" alt="Our Team" class="w-full h-full object-cover">
                </div>
            </div>

            <!-- Mission & Vision Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">

                <!-- Mission Card -->
                <div
                    class="backdrop-blur-md rounded-2xl p-10 hover:border-cyan-300 transition-all duration-300 animate-fade-in-up opacity-0 delay-2 group hover:shadow-2xl">
                    <div class="flex items-center gap-4 mb-6">
                        <div
                            class="w-14 h-14 bg-cyan-100 rounded-xl flex items-center justify-center group-hover:bg-cyan-200 transition-all">
                            <i class="fas fa-bullseye text-cyan-500 text-2xl"></i>
                        </div>
                        <h3 class="text-3xl font-bold text-gray-900">OUR MISSION</h3>
                    </div>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-4 text-gray-700">
                            <span class="text-cyan-500 font-bold mt-1">✓</span>
                            <span>Meningkatkan kesejahteraan keluarga Indonesia melalui program pendidikan dan
                                pemberdayaan</span>
                        </li>
                        <li class="flex items-start gap-4 text-gray-700">
                            <span class="text-cyan-500 font-bold mt-1">✓</span>
                            <span>Mendorong pengembangan sumber daya manusia (SDM) yang berkualitas tinggi</span>
                        </li>
                        <li class="flex items-start gap-4 text-gray-700">
                            <span class="text-cyan-500 font-bold mt-1">✓</span>
                            <span>Mewujudkan generasi penerus bangsa yang sehat, cerdas, dan bermoral</span>
                        </li>
                        <li class="flex items-start gap-4 text-gray-700">
                            <span class="text-cyan-500 font-bold mt-1">✓</span>
                            <span>Membangun kemitraan strategis dengan berbagai stakeholder untuk dampak maksimal</span>
                        </li>
                    </ul>
                </div>

                <!-- Vision Card -->
                <div
                    class="bg-backdrop-blur-md rounded-2xl p-10 hover:border-cyan-300 transition-all duration-300 animate-fade-in-up opacity-0 delay-3 group hover:shadow-2xl">
                    <div class="flex items-center gap-4 mb-6">
                        <div
                            class="w-14 h-14 bg-cyan-100 rounded-xl flex items-center justify-center group-hover:bg-cyan-200 transition-all">
                            <i class="fas fa-lightbulb text-cyan-500 text-2xl"></i>
                        </div>
                        <h3 class="text-3xl font-bold text-gray-900">OUR VISION</h3>
                    </div>
                    <div class="space-y-4 text-gray-700 leading-relaxed">
                        <p>
                            Menjadi organisasi terdepan dalam upaya pemberdayaan keluarga dan pengembangan sumber daya
                            manusia yang berkontribusi pada pembangunan berkelanjutan dan kesejahteraan masyarakat
                            Indonesia.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Partners Section -->
    <section class="pt-16 pb-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center mb-8">
                <h3 class="text-sm font-semibold text-gray-700 uppercase tracking-wider whitespace-nowrap">OUR PARTNERS
                </h3>
                <div class="flex-grow h-px bg-gray-300 ml-16"></div>
            </div>

            <div class="flex flex-wrap items-center gap-12">
                <!-- ChildFund Logo -->
                <img src="{{ asset('img/image 6.png') }}" alt="ChildFund International" class="h-12 object-contain">

                <!-- USAID Logo -->
                <img src="{{ asset('img/image 7.png') }}" alt="USAID" class="h-12 object-contain">

                <!-- Tanoto Foundation Logo -->
                <img src="{{ asset('img/image 8.png') }}" alt="Tanoto Foundation" class="h-12 object-contain">
            </div>
        </div>
    </section>

    <!-- Awards & Recognitions Section -->
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Header -->
            <div class="text-center mb-16 animate-fade-in-up opacity-0">
                <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">
                    Awards & Recognition
                </h2>
            </div>

            <!-- Awards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-24">

                <!-- Award 1 -->
                <div class="text-center animate-fade-in-up opacity-0 delay-1 group">
                    <div class="mb-6 transform group-hover:scale-110 transition-transform duration-300">
                        <img src="{{ asset('img/award.png') }}" alt="award" class="inline-block h-20">
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Best NGO Award</h3>
                    <p class="text-cyan-600 font-semibold mb-1">2021</p>
                    <p class="text-gray-600">Jakarta</p>
                </div>

                <!-- Award 2 -->
                <div class="text-center animate-fade-in-up opacity-0 delay-2 group">
                    <div class="mb-6 transform group-hover:scale-110 transition-transform duration-300">
                        <img src="{{ asset('img/award.png') }}" alt="award" class="inline-block h-20">
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Best NGO Award</h3>
                    <p class="text-cyan-600 font-semibold mb-1">2018</p>
                    <p class="text-gray-600">Semarang</p>
                </div>

                <!-- Award 3 -->
                <div class="text-center animate-fade-in-up opacity-0 delay-3 group">
                    <div class="mb-6 transform group-hover:scale-110 transition-transform duration-300">
                        <img src="{{ asset('img/award.png') }}" alt="award" class="inline-block h-20">
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Best NGO Award</h3>
                    <p class="text-cyan-600 font-semibold mb-1">2014</p>
                    <p class="text-gray-600">Semarang</p>
                </div>

            </div>

            <!-- Journey Section -->
            <div class="bg-[#009ED6] rounded-3xl p-12 md:p-16 overflow-hidden animate-fade-in-up opacity-0 delay-1">

                <!-- Background Decoration -->
                <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center relative z-10">

                    <!-- Left: Content -->
                    <div>
                        <div class="mb-6">
                            <span class="text-xs font-bold text-white/80 uppercase tracking-widest">Our Journey</span>
                        </div>
                        <h3 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">
                            How we empower communities
                        </h3>
                        <p class="text-white/90 text-lg leading-relaxed mb-8">
                            Yayasan Kesejahteraan Keluarga Soegijapranata (YKKS) has been serving families and children
                            through impactful programs in education, family development, health, and social care. With a
                            vision rooted in compassion and commitment, we continue to support and grow strong
                            communities across Indonesia.
                        </p>

                        <!-- Stats -->
                        <div class="grid grid-cols-3 gap-8">
                            <div>
                                <div class="text-3xl md:text-4xl font-bold text-white mb-2">50+</div>
                                <p class="text-white/80 text-sm font-medium">Achievements</p>
                            </div>
                            <div>
                                <div class="text-3xl md:text-4xl font-bold text-white mb-2">1,200+</div>
                                <p class="text-white/80 text-sm font-medium">Beneficiaries Supported</p>
                            </div>
                            <div>
                                <div class="text-3xl md:text-4xl font-bold text-white mb-2">20+</div>
                                <p class="text-white/80 text-sm font-medium">Program Initiatives</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Image -->
                    <div class="relative">
                        <div class="rounded-2xl overflow-hidden shadow-2xl">
                            <img src="{{ asset('img/image_19.png') }}" alt="Our Community"
                                class="w-full h-full object-cover">
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- Meet Our Team Section -->
    <section class="pb-24 bg-gray-50" id="team">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Header -->
            <div class="text-center mb-16 animate-fade-in-up opacity-0">
                <h2 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6">
                    Meet our team
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius eros in eros elementum
                    tristique.
                </p>
            </div>

            <!-- Team Members Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- Team Member 1 -->
                <div class="animate-fade-in-up opacity-0 delay-1 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/tim1.png') }}" alt="Paulus Mujiran"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300">
                        </div>
                    </div>
                    <center>

                        <h3 class="text-xl font-bold text-gray-900 mb-2">Paulus Mujiran</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">Pimpinan Proyek</p>
                        <div class="flex gap-3 justify-center">
                            <a href="#"
                                class="w-8 h-8 rounded-full bg-gray-200 hover:bg-cyan-500 flex items-center justify-center text-gray-700 hover:text-white transition-all">
                                <i class="fab fa-facebook-f text-xs"></i>
                            </a>
                            <a href="#"
                                class="w-8 h-8 rounded-full bg-gray-200 hover:bg-cyan-500 flex items-center justify-center text-gray-700 hover:text-white transition-all">
                                <i class="fab fa-twitter text-xs"></i>
                            </a>
                            <a href="#"
                                class="w-8 h-8 rounded-full bg-gray-200 hover:bg-cyan-500 flex items-center justify-center text-gray-700 hover:text-white transition-all">
                                <i class="fab fa-linkedin-in text-xs"></i>
                            </a>
                        </div>
                    </center>
                </div>

                <!-- Team Member 2 -->
                <div class="animate-fade-in-up opacity-0 delay-2 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/tim2.png') }}" alt="Francis Weber"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300">
                        </div>
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Francis Weber</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">PIC</p>
                        <div class="flex gap-3 justify-center">
                            <a href="#"
                                class="w-8 h-8 rounded-full bg-gray-200 hover:bg-cyan-500 flex items-center justify-center text-gray-700 hover:text-white transition-all">
                                <i class="fab fa-facebook-f text-xs"></i>
                            </a>
                            <a href="#"
                                class="w-8 h-8 rounded-full bg-gray-200 hover:bg-cyan-500 flex items-center justify-center text-gray-700 hover:text-white transition-all">
                                <i class="fab fa-twitter text-xs"></i>
                            </a>
                            <a href="#"
                                class="w-8 h-8 rounded-full bg-gray-200 hover:bg-cyan-500 flex items-center justify-center text-gray-700 hover:text-white transition-all">
                                <i class="fab fa-linkedin-in text-xs"></i>
                            </a>
                        </div>
                    </center>
                </div>

                <!-- Team Member 3 -->
                <div class="animate-fade-in-up opacity-0 delay-3 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/tim3.png') }}" alt="Kyla Obrien"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300">
                        </div>
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Kyla Obrien</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">PIC</p>
                        <div class="flex gap-3 justify-center">
                            <a href="#"
                                class="w-8 h-8 rounded-full bg-gray-200 hover:bg-cyan-500 flex items-center justify-center text-gray-700 hover:text-white transition-all">
                                <i class="fab fa-facebook-f text-xs"></i>
                            </a>
                            <a href="#"
                                class="w-8 h-8 rounded-full bg-gray-200 hover:bg-cyan-500 flex items-center justify-center text-gray-700 hover:text-white transition-all">
                                <i class="fab fa-twitter text-xs"></i>
                            </a>
                            <a href="#"
                                class="w-8 h-8 rounded-full bg-gray-200 hover:bg-cyan-500 flex items-center justify-center text-gray-700 hover:text-white transition-all">
                                <i class="fab fa-linkedin-in text-xs"></i>
                            </a>
                        </div>
                    </center>
                </div>

                <!-- Team Member 4 -->
                <div class="animate-fade-in-up opacity-0 delay-1 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/tim4.png') }}" alt="Adrian Dixon"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300">
                        </div>
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Adrian Dixon</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">Sponsorship</p>
                        <div class="flex gap-3 justify-center">
                            <a href="#"
                                class="w-8 h-8 rounded-full bg-gray-200 hover:bg-cyan-500 flex items-center justify-center text-gray-700 hover:text-white transition-all">
                                <i class="fab fa-facebook-f text-xs"></i>
                            </a>
                            <a href="#"
                                class="w-8 h-8 rounded-full bg-gray-200 hover:bg-cyan-500 flex items-center justify-center text-gray-700 hover:text-white transition-all">
                                <i class="fab fa-twitter text-xs"></i>
                            </a>
                            <a href="#"
                                class="w-8 h-8 rounded-full bg-gray-200 hover:bg-cyan-500 flex items-center justify-center text-gray-700 hover:text-white transition-all">
                                <i class="fab fa-linkedin-in text-xs"></i>
                            </a>
                        </div>
                    </center>
                </div>

                <!-- Team Member 5 -->
                <div class="animate-fade-in-up opacity-0 delay-2 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/tim5.png') }}" alt="Irma Amalia"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300">
                        </div>
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Irma Amalia</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">PIC</p>
                        <div class="flex gap-3 justify-center">
                            <a href="#"
                                class="w-8 h-8 rounded-full bg-gray-200 hover:bg-cyan-500 flex items-center justify-center text-gray-700 hover:text-white transition-all">
                                <i class="fab fa-facebook-f text-xs"></i>
                            </a>
                            <a href="#"
                                class="w-8 h-8 rounded-full bg-gray-200 hover:bg-cyan-500 flex items-center justify-center text-gray-700 hover:text-white transition-all">
                                <i class="fab fa-twitter text-xs"></i>
                            </a>
                            <a href="#"
                                class="w-8 h-8 rounded-full bg-gray-200 hover:bg-cyan-500 flex items-center justify-center text-gray-700 hover:text-white transition-all">
                                <i class="fab fa-linkedin-in text-xs"></i>
                            </a>
                        </div>
                    </center>
                </div>

                <!-- Team Member 6 -->
                <div class="animate-fade-in-up opacity-0 delay-3 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/tim6.png') }}" alt="Zulfkhar Lintang"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300">
                        </div>
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Zulfikar Lintang</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">PIC</p>
                        <div class="flex gap-3 justify-center">
                            <a href="#"
                                class="w-8 h-8 rounded-full bg-gray-200 hover:bg-cyan-500 flex items-center justify-center text-gray-700 hover:text-white transition-all">
                                <i class="fab fa-facebook-f text-xs"></i>
                            </a>
                            <a href="#"
                                class="w-8 h-8 rounded-full bg-gray-200 hover:bg-cyan-500 flex items-center justify-center text-gray-700 hover:text-white transition-all">
                                <i class="fab fa-twitter text-xs"></i>
                            </a>
                            <a href="#"
                                class="w-8 h-8 rounded-full bg-gray-200 hover:bg-cyan-500 flex items-center justify-center text-gray-700 hover:text-white transition-all">
                                <i class="fab fa-linkedin-in text-xs"></i>
                            </a>
                        </div>
                    </center>

                </div>

                <!-- Team Member 7 -->
                <div class="animate-fade-in-up opacity-0 delay-1 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/tim7.png') }}" alt="Kiya"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300">
                        </div>
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Kiya</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">PIC</p>
                        <div class="flex gap-3 justify-center">
                            <a href="#"
                                class="w-8 h-8 rounded-full bg-gray-200 hover:bg-cyan-500 flex items-center justify-center text-gray-700 hover:text-white transition-all">
                                <i class="fab fa-facebook-f text-xs"></i>
                            </a>
                            <a href="#"
                                class="w-8 h-8 rounded-full bg-gray-200 hover:bg-cyan-500 flex items-center justify-center text-gray-700 hover:text-white transition-all">
                                <i class="fab fa-twitter text-xs"></i>
                            </a>
                            <a href="#"
                                class="w-8 h-8 rounded-full bg-gray-200 hover:bg-cyan-500 flex items-center justify-center text-gray-700 hover:text-white transition-all">
                                <i class="fab fa-linkedin-in text-xs"></i>
                            </a>
                        </div>
                    </center>
                </div>

                <!-- Team Member 8 -->
                <div class="animate-fade-in-up opacity-0 delay-2 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/tim8.png') }}" alt="Mahya"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300">
                        </div>
                    </div>
                    <center>

                        <h3 class="text-xl font-bold text-gray-900 mb-2">Mahya</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">PIC</p>
                        <div class="flex gap-3 justify-center">
                            <a href="#"
                                class="w-8 h-8 rounded-full bg-gray-200 hover:bg-cyan-500 flex items-center justify-center text-gray-700 hover:text-white transition-all">
                                <i class="fab fa-facebook-f text-xs"></i>
                            </a>
                            <a href="#"
                                class="w-8 h-8 rounded-full bg-gray-200 hover:bg-cyan-500 flex items-center justify-center text-gray-700 hover:text-white transition-all">
                                <i class="fab fa-twitter text-xs"></i>
                            </a>
                            <a href="#"
                                class="w-8 h-8 rounded-full bg-gray-200 hover:bg-cyan-500 flex items-center justify-center text-gray-700 hover:text-white transition-all">
                                <i class="fab fa-linkedin-in text-xs"></i>
                            </a>
                        </div>
                    </center>

                </div>

            </div>

        </div>
    </section>

    @include('halaman_depan.components.footer')

    <!-- Styles (tambahkan ke head atau style tag yang sudah ada) -->
    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .delay-1 {
            animation-delay: 0.1s;
        }

        .delay-2 {
            animation-delay: 0.2s;
        }

        .delay-3 {
            animation-delay: 0.3s;
        }
    </style>

    <!-- Script untuk scroll -->
    <script>
        function scrollToNext() {
            const nextSection = document.querySelector('section:nth-of-type(2)');
            if (nextSection) {
                nextSection.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }
    </script>
</body>

</html>
