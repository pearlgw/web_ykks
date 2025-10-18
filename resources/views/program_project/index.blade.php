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
    </style>
</head>

<body class="font-poppins">
    @include('halaman_depan.components.navbar')

    <!-- Program Section -->
    <section class=" bg-white" id="about">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-12 gap-12 pt-16">

                <!-- Left Content (col-span-7) -->
                <div class="col-span-12 md:col-span-7 flex items-end">
                    <div class="w-full">
                        <div class="mb-6">
                            <div class="flex items-center space-x-3 mb-4">
                                <div class="w-12 h-1 bg-gray-800"></div>
                                <span
                                    class="text-sm font-semibold text-gray-800 uppercase tracking-wider pl-1">Programs</span>
                            </div>
                            <h2 class="text-4xl md:text-6xl text-gray-900 leading-tight pl-16">
                                Building impact from the ground up
                            </h2>
                        </div>

                        <p class="text-gray-600 leading-relaxed mb-8 pl-16 text-justify">
                            This program is part of YKKS’s ongoing commitment to improving family welfare through
                            education, empowerment, and community engagement. It is designed to support vulnerable
                            groups—especially women and children—by providing access to essential knowledge, skills, and
                            resources. Through structured activities, the program aims to build stronger, more resilient
                            families who can thrive both socially and economically within their communities.
                        </p>
                    </div>
                </div>

                <!-- Right Image (col-span-5) -->
                <div class="col-span-12 md:col-span-5 relative">
                    <div class="rounded-2xl overflow-hidden shadow-xl h-[380px]">
                        <img src="{{ asset('img/program_page.png') }}" alt="Children playing outdoor"
                            class="w-full h-full object-cover">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section class="py-12 bg-cyan-500 my-16" id="program">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Header -->
            <div class="mb-16 animate-fade-in-up opacity-0">
                <h2 class="text-3xl md:text-5xl font-medium text-gray-900 leading-tight">
                    Programs that empower, protect, and nurture every part of society
                </h2>
            </div>

            <!-- Programs Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Program 1 -->
                <div>
                    <div class="flex items-start space-x-3 mb-2">
                        <div
                            class="bg-gray-900 text-white w-6 h-6 rounded flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-mobile-alt text-xs"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Swipe Safe</h3>
                    </div>
                    <p class="text-gray-700 text-sm ml-9">
                        A digital literacy program for children and youth to promote safer and wiser use of
                        social media and understanding online safety.
                    </p>
                </div>

                <!-- Program 2 -->
                <div>
                    <div class="flex items-start space-x-3 mb-2">
                        <div
                            class="bg-gray-900 text-white w-6 h-6 rounded flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-mobile-alt text-xs"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Voice Now</h3>
                    </div>
                    <p class="text-gray-700 text-sm ml-9">
                        A creative space for children and youth to express their thoughts and feelings through art,
                        storytelling, and media as part of healing and empowerment efforts.
                    </p>
                </div>

                <!-- Program 3 -->
                <div>
                    <div class="flex items-start space-x-3 mb-2">
                        <div
                            class="bg-gray-900 text-white w-6 h-6 rounded flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-mobile-alt text-xs"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Education</h3>
                    </div>
                    <p class="text-gray-700 text-sm ml-9">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros
                        elementum tristique.
                    </p>
                </div>

                <!-- Program 4 -->
                <div>
                    <div class="flex items-start space-x-3 mb-2">
                        <div
                            class="bg-gray-900 text-white w-6 h-6 rounded flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-mobile-alt text-xs"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Indo Youth Advisory</h3>
                    </div>
                    <p class="text-gray-700 text-sm ml-9">
                        A participatory forum that empowers young people to voice their opinions and propose solutions
                        to social issues in their communities.
                    </p>
                </div>

                <!-- Program 5 -->
                <div>
                    <div class="flex items-start space-x-3 mb-2">
                        <div
                            class="bg-gray-900 text-white w-6 h-6 rounded flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-mobile-alt text-xs"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">WWEE</h3>
                    </div>
                    <p class="text-gray-700 text-sm ml-9">
                        A program that focuses on empowering women in conservation areas through education, livelihood
                        support, and environmental awareness to promote sustainable living.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <section class="pb-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="mb-12">
                <div class="flex items-center space-x-3 mb-6">
                    <div class="w-14 h-1 bg-gray-800"></div>
                    <span class="text-sm font-semibold text-gray-800 uppercase tracking-wider">Projects we have
                        done</span>
                </div>
                <h2 class="text-4xl md:text-4xl font-bold text-gray-900 leading-tight max-w-xl pl-20">
                    We are creating a place where children with special needs can thrive
                </h2>
            </div>

            <!-- Project Cards -->
            <div class="grid md:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="relative rounded-2xl overflow-hidden shadow-lg h-96 group">
                    <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?w=600&q=80"
                        alt="Swipe Safe Training" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold leading-tight mb-3 line-clamp-3">
                            Swipe Safe Training Session for Students at SMA Negeri 15 Semarang
                        </h3>
                        <p class="text-sm text-gray-200 leading-relaxed mb-4 line-clamp-3">
                            A workshop aimed at teaching students safe and responsible behavior in the digital world.
                            Empowering teens with knowledge to protect themselves online.
                        </p>
                        <button
                            class="bg-[#8DE1FF] hover:bg-cyan-700 hover:text-white text-black px-6 py-2 rounded-md text-sm font-medium transition">
                            Learn more
                        </button>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="relative rounded-2xl overflow-hidden shadow-lg h-96 group">
                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=600&q=80"
                        alt="Voice Now Training" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold leading-tight mb-3 line-clamp-3">
                            Voice Now Training Session for Students at SMA Negeri 1 Semarang
                        </h3>
                        <p class="text-sm text-gray-200 leading-relaxed mb-4 line-clamp-3">
                            An engaging session to help students express their thoughts confidently and respectfully,
                            building communication and advocacy skills for the future.
                        </p>
                        <button
                            class="bg-[#8DE1FF] hover:bg-cyan-700 hover:text-white text-black px-6 py-2 rounded-md text-sm font-medium transition">
                            Learn more
                        </button>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="relative rounded-2xl overflow-hidden shadow-lg h-96 group">
                    <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=600&q=80"
                        alt="Voice Now Training" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold leading-tight mb-3 line-clamp-3">
                            Voice Now Training Session for
                        </h3>
                        <p class="text-sm text-gray-200 leading-relaxed mb-4 line-clamp-3">
                            Equipping students with the tools to speak up and share their stories. Encouraging youth to
                            become active voices in their communities.
                        </p>
                        <button
                            class="bg-[#8DE1FF] hover:bg-cyan-700 hover:text-white text-black px-6 py-2 rounded-md text-sm font-medium transition">
                            Learn more
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('halaman_depan.components.footer')

    <!-- Styles -->
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
</body>

</html>
