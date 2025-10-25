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

<body class="font-sans">
    @include('halaman_depan.components.navbar')

    <!-- Stats Section -->
    <section class="py-16 bg-cyan-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Title -->
            <h1 class="text-4xl md:text-6xl font-medium text-white mb-8 leading-tight">
                {{ $project->title }}
            </h1>

            <!-- Project Info Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Location -->
                <div
                    class="flex items-center gap-3 bg-white/10 backdrop-blur-sm rounded-lg p-4 hover:bg-white/20 transition-all duration-300">
                    <div class="flex-shrink-0">
                        <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center">
                            <i class="fas fa-map-marker-alt text-cyan-600 text-lg"></i>
                        </div>
                    </div>
                    <div>
                        <p class="text-white/80 text-sm font-medium">Location</p>
                        <p class="text-white text-lg font-semibold">{{ $project->location }}</p>
                    </div>
                </div>

                <!-- Date -->
                <div
                    class="flex items-center gap-3 bg-white/10 backdrop-blur-sm rounded-lg p-4 hover:bg-white/20 transition-all duration-300">
                    <div class="flex-shrink-0">
                        <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center">
                            <i class="fas fa-calendar-alt text-cyan-600 text-lg"></i>
                        </div>
                    </div>
                    <div>
                        <p class="text-white/80 text-sm font-medium">Date</p>
                        <p class="text-white text-lg font-semibold">
                            {{ \Carbon\Carbon::parse($project->datetime_project)->format('d M Y') }}</p>
                    </div>
                </div>

                <!-- Participants -->
                <div
                    class="flex items-center gap-3 bg-white/10 backdrop-blur-sm rounded-lg p-4 hover:bg-white/20 transition-all duration-300">
                    <div class="flex-shrink-0">
                        <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center">
                            <i class="fas fa-users text-cyan-600 text-lg"></i>
                        </div>
                    </div>
                    <div>
                        <p class="text-white/80 text-sm font-medium">Participants</p>
                        <p class="text-white text-lg font-semibold">{{ number_format($project->participant_count) }}
                            People</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Description Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="mb-8">
                <div class="flex items-center space-x-3 mb-6">
                    <div class="w-12 h-1 bg-gray-800"></div>
                    <span class="text-2xl font-semibold text-gray-800 uppercase tracking-wider">ABOUT THIS
                        PROJECT</span>
                </div>
            </div>

            <!-- Full Description -->
            <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed text-xl">
                <style>
                    .prose img {
                        display: block;
                        margin-left: auto;
                        margin-right: auto;
                    }
                </style>
                {!! $project->description !!}
            </div>

        </div>
    </section>

    <!-- Other Projects Section -->
    <section class="pt-20 pb-28 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="mb-12">
                <div class="flex items-center space-x-3 mb-6">
                    <div class="w-12 h-1 bg-gray-800"></div>
                    <span class="text-2xl font-semibold text-gray-800 uppercase tracking-wider">OTHER PROJECTS</span>
                </div>
                <h2 class="text-4xl md:text-4xl font-bold text-gray-900 leading-tight pl-16">
                    Explore more projects from this program
                </h2>
            </div>

            <!-- Project Cards -->
            <div class="grid md:grid-cols-3 gap-6">
                @forelse($projects as $otherProject)
                    <a href="{{ route('detail.project', $otherProject->id) }}">
                        <div class="relative rounded-2xl overflow-hidden shadow-lg h-96 group">
                            @if ($otherProject->image_backdrop)
                                <img src="{{ asset('storage/' . $otherProject->image_backdrop) }}"
                                    alt="{{ $otherProject->title }}"
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                            @else
                                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=600&q=80"
                                    alt="{{ $otherProject->title }}"
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                            @endif

                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent">
                            </div>

                            <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                                <h3 class="text-xl font-bold leading-tight mb-3 line-clamp-3">
                                    {{ $otherProject->title }}
                                </h3>
                                <p class="text-sm text-gray-200 leading-relaxed mb-4 line-clamp-3">
                                    {{ Str::limit(strip_tags($otherProject->description), 120, '...') }}
                                </p>
                                <button
                                    class="bg-[#8DE1FF] hover:bg-cyan-700 hover:text-white text-black px-6 py-2 rounded-md text-sm font-medium transition">
                                    Learn more
                                </button>
                            </div>
                        </div>
                    </a>
                @empty
                    <!-- Fallback jika tidak ada project -->
                    <div class="col-span-3 text-center py-16">
                        <div class="text-gray-400 mb-4">
                            <i class="fas fa-folder-open text-5xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-600 mb-2">No Other Projects Available</h3>
                        <p class="text-gray-500">Other projects from this program will appear here.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    @include('halaman_depan.components.footer')
</body>

</html>
