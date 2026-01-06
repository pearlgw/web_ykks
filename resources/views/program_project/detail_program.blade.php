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

        .gradient-orange-pink {
            background: linear-gradient(135deg, #FF9A56 0%, #FF6B9D 50%, #E91E63 100%);
        }
    </style>
</head>

<body class="font-sans">
    @include('halaman_depan.components.navbar')

    <!-- Program Header Section -->
    <section class="pt-24 pb-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-6">
                <a href="{{ url('/program-project') }}"
                    class="inline-flex items-center gap-2 text-gray-600 hover:text-gray-900 transition-colors duration-200 group">
                    <i class="fas fa-arrow-left group-hover:-translate-x-1 transition-transform duration-200"></i>
                    <span class="font-medium">Back to Programs</span>
                </a>
            </div>
            <!-- Breadcrumb -->
            <div class="mb-8">
                <div class="flex items-center space-x-3 mb-6">
                    <div class="w-12 h-1 bg-gray-800"></div>
                    <span class="text-sm font-semibold text-gray-800 uppercase tracking-wider">PROGRAM</span>
                </div>
                {{-- <p class="text-sm text-gray-500 uppercase tracking-wider font-semibold">OUR PROGRAMS</p> --}}
            </div>

            <!-- Title -->
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">
                {{ $program->title }}
            </h1>

            <!-- Description -->
            <div class="prose prose-lg text-gray-700 leading-relaxed">
                {!! nl2br(e($program->description)) !!}
            </div>

            @php
                $gradients = [
                    'from-cyan-500 to-blue-500',
                    'from-pink-500 to-rose-500',
                    'from-amber-500 to-orange-500',
                    'from-emerald-500 to-teal-500',
                    'from-purple-500 to-indigo-500',
                    'from-lime-500 to-green-500',
                ];
                $randomGradient = Arr::random($gradients);
            @endphp

            <!-- Featured Image with Gradient -->
            <div class="mt-12 rounded-2xl overflow-hidden shadow-2xl">
                <div class="bg-gradient-to-r {{ $randomGradient }} p-12 md:p-20 flex items-center justify-center">
                    <div class="text-center text-white">
                        <div class="mb-6">
                            @if ($program->icon_image)
                                <img src="{{ asset('storage/' . $program->icon_image) }}" alt="{{ $program->title }}"
                                    class="w-24 h-24 md:h-32 mx-auto object-contain opacity-90">
                            @else
                                <i class="fas fa-shield-alt text-6xl md:text-7xl opacity-90"></i>
                            @endif
                        </div>
                        <h2 class="text-3xl md:text-5xl font-bold tracking-wide">
                            {{ $program->title }}
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    {{-- <section class="py-16 bg-gradient-to-b bg-cyan-500">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Stat 1 -->
                <div class="group">
                    <div class="flex items-start space-x-3 mb-2">
                        <div
                            class="bg-gray-900 text-white w-6 h-6 rounded flex items-center justify-center flex-shrink-0 mt-1 group-hover:scale-110 transition-all duration-300">
                            <i class="fas fa-school text-xs"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 transition-colors duration-300">
                            30+ schools visit in 2 months
                        </h3>
                    </div>
                    <p class="text-gray-700 text-sm ml-9 leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                    </p>
                </div>

                <!-- Stat 2 -->
                <div class="group">
                    <div class="flex items-start space-x-3 mb-2">
                        <div
                            class="bg-gray-900 text-white w-6 h-6 rounded flex items-center justify-center flex-shrink-0 mt-1 group-hover:scale-110 transition-all duration-300">
                            <i class="fas fa-users text-xs"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 transition-colors duration-300">
                            51K People have donated
                        </h3>
                    </div>
                    <p class="text-gray-700 text-sm ml-9 leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                    </p>
                </div>

                <!-- Stat 3 -->
                <div class="group">
                    <div class="flex items-start space-x-3 mb-2">
                        <div
                            class="bg-gray-900 text-white w-6 h-6 rounded flex items-center justify-center flex-shrink-0 mt-1 group-hover:scale-110 transition-all duration-300">
                            <i class="fas fa-user-friends text-xs"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 transition-colors duration-300">
                            1000+ people joined
                        </h3>
                    </div>
                    <p class="text-gray-700 text-sm ml-9 leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                    </p>
                </div>

                <!-- Stat 4 -->
                <div class="group">
                    <div class="flex items-start space-x-3 mb-2">
                        <div
                            class="bg-gray-900 text-white w-6 h-6 rounded flex items-center justify-center flex-shrink-0 mt-1 group-hover:scale-110 transition-all duration-300">
                            <i class="fas fa-bullhorn text-xs"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 transition-colors duration-300">
                            1.2m Raised from this initiative
                        </h3>
                    </div>
                    <p class="text-gray-700 text-sm ml-9 leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Projects Section -->
    <section class="pt-20 pb-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="mb-12">
                <div class="flex items-center space-x-3 mb-6">
                    <div class="w-12 h-1 bg-gray-800"></div>
                    <span class="text-sm font-semibold text-gray-800 uppercase tracking-wider">PROJECT</span>
                </div>
                <h2 class="text-4xl md:text-4xl font-bold text-gray-900 leading-tight max-w-xl pl-20">
                    Temukan bagaimana program dan kisah komunitas kami menciptakan dampak yang berkelanjutan.
                </h2>
            </div>

            <!-- Project Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
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
                    <div class="col-span-3 text-center py-16">
                        <div class="text-gray-400 mb-4">
                            <i class="fas fa-folder-open text-5xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-600 mb-2">No Projects Available</h3>
                        <p class="text-gray-500">Projects will appear here once they are added.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    @include('halaman_depan.components.footer')
</body>

</html>