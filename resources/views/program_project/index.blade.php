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
                                Membangun dampak sejak awal
                            </h2>
                        </div>

                        <p class="text-gray-600 leading-relaxed mb-8 pl-16 text-justify">
                            Program ini merupakan bagian dari komitmen berkelanjutan YKKS dalam meningkatkan kesejahteraan keluarga melalui pendidikan, pemberdayaan, dan keterlibatan masyarakat. Program ini dirancang untuk mendukung kelompok rentan terutama perempuan dan anak-anak dengan menyediakan akses terhadap pengetahuan, keterampilan, serta sumber daya yang esensial. Melalui kegiatan yang terstruktur, program ini bertujuan membangun keluarga yang lebih kuat dan tangguh, sehingga mampu berkembang secara sosial dan ekonomi di dalam komunitasnya.
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
                    Program-program yang memberdayakan, melindungi, dan merawat seluruh lapisan masyarakat
                </h2>
            </div>

            <!-- Programs Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($programs as $program)
                    <!-- Program Card -->
                    <a href="{{ route('detail.program', $program->id) }}">
                        <div class="group hover:bg-cyan-900 hover:p-6 hover:rounded-2xl transition-all duration-300">
                            <div class="flex items-start space-x-3 mb-2">
                                <div
                                    class="bg-gray-900 text-white w-6 h-6 rounded flex items-center justify-center flex-shrink-0 mt-1 group-hover:scale-110 transition-all duration-300">
                                    @if ($program->icon_image)
                                        <img src="{{ asset('storage/' . $program->icon_image) }}"
                                            alt="{{ $program->title }}" class="w-full h-full object-cover rounded">
                                    @else
                                        <i class="fas fa-folder text-xs"></i>
                                    @endif
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 group-hover:text-white transition-colors duration-300">
                                    {{ $program->title }}
                                </h3>
                            </div>
                            <p class="text-gray-700 text-sm ml-9 leading-relaxed group-hover:text-white">
                                {{ Str::words($program->description, 20, '...') }}
                            </p>
                        </div>
                    </a>
                @empty
                    <!-- Empty State -->
                    <div class="col-span-full text-center py-16">
                        <div class="mb-4">
                            <i class="fas fa-folder-open text-6xl text-gray-300"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-600 mb-2">Belum ada program</h3>
                        <p class="text-gray-500 mb-6">Program yang ditambahkan akan keluar disini.</p>
                        @auth
                            <a href="{{ route('program.create') }}"
                                class="inline-flex items-center gap-2 bg-cyan-500 hover:bg-cyan-600 text-white font-semibold px-6 py-3 rounded-lg transition-colors duration-200">
                                <i class="fas fa-plus"></i>
                                <span>Tambah Program Pertamamu</span>
                            </a>
                        @endauth
                    </div>
                @endforelse
            </div>

            @if ($programs->count() > 0)
                <!-- Programs Count -->
                <div class="mt-8 text-center">
                    <p class="text-sm text-gray-600">
                        Showing <span class="font-semibold text-gray-900">{{ $programs->count() }}</span>
                        {{ Str::plural('program', $programs->count()) }}
                    </p>
                </div>
            @endif

        </div>
    </section>

    <section class="pt-20 pb-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="mb-12">
                <div class="flex items-center space-x-3 mb-6">
                    <div class="w-12 h-1 bg-gray-800"></div>
                    <span class="text-sm font-semibold text-gray-800 uppercase tracking-wider">PROJECT</span>
                </div>
                <h2 class="text-4xl md:text-4xl font-bold text-gray-900 leading-tight max-w-xl pl-20">
                    Temukan bagaimana program-program kami dan kisah komunitas menciptakan dampak yang berkelanjutan.
                </h2>
            </div>

            <!-- Project Cards -->
            <div class="grid md:grid-cols-3 gap-6">
                @forelse($projects as $project)
                    <div class="relative rounded-2xl overflow-hidden shadow-lg h-96 group">
                        @if ($project->image_backdrop)
                            <img src="{{ asset('storage/' . $project->image_backdrop) }}" alt="{{ $project->title }}"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        @else
                            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=600&q=80"
                                alt="{{ $project->title }}"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        @endif

                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent"></div>

                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <h3 class="text-xl font-bold leading-tight mb-3 line-clamp-3">
                                {{ $project->title }}
                            </h3>
                            <p class="text-sm text-gray-200 leading-relaxed mb-4 line-clamp-3">
                                {{ Str::limit(strip_tags($project->description), 120, '...') }}
                            </p>
                            <a href="{{ route('detail.project', $project->id) }}"
                                class="bg-[#8DE1FF] hover:bg-cyan-700 hover:text-white text-black px-6 py-2 rounded-md text-sm font-medium transition">
                                Learn more
                            </a>
                        </div>
                    </div>
                @empty
                    <!-- Fallback jika tidak ada project -->
                    <div class="col-span-3 text-center py-16">
                        <div class="text-gray-400 mb-4">
                            <i class="fas fa-folder-open text-5xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-600 mb-2">Belum ada project tersedia</h3>
                        <p class="text-gray-500">Projects akan muncul disini jika tersedia.</p>
                    </div>
                @endforelse
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
