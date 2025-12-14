<!-- Programs Section -->
<section class="pb-20 pt-10 bg-[#8DE1FF]" id="program">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16">
        <!-- Header Label -->
        <div class="flex items-center space-x-3 mb-6">
            <div class="w-12 h-1 bg-gray-800"></div>
            <span class="text-sm pl-1 font-semibold text-gray-800 uppercase tracking-wider">PROGRAMS</span>
        </div>

        <!-- Content Grid -->
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Left Content -->
            <div class="md:col-span-2 pl-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight mb-6">
                    Jelajahi program-program utama kami yang mendorong perubahan bermakna
                </h2>
                <p class="text-gray-700 text-sm leading-relaxed mb-8">
                    Program ini merupakan bagian dari komitmen berkelanjutan YKKS dalam meningkatkan kesejahteraan keluarga melalui pendidikan, pemberdayaan, dan keterlibatan masyarakat. Program ini dirancang untuk mendukung perempuan dan anak-anak dengan menyediakan akses terhadap pengetahuan, keterampilan, serta sumber daya yang penting.
                </p>

                <!-- Programs List -->
                <div class="space-y-6 border-l-2 border-gray-800 pl-6 mb-8">
                    @php
                        // Ambil 4 program terbaru
                        $programs = \App\Models\Program::latest()->take(4)->get();
                    @endphp

                    @forelse($programs as $program)
                        <div class="group hover:bg-cyan-600 hover:p-3 hover:rounded-xl transition-all duration-300">
                            <a href="{{ route('detail.program', $program->id) }}"
                                class="flex items-start space-x-3 mb-2 hover:transition group">
                                <div
                                    class="bg-gray-900 text-white w-6 h-6 rounded flex items-center justify-center flex-shrink-0 mt-1">
                                    @if ($program->icon_image)
                                        <img src="{{ asset('storage/' . $program->icon_image) }}"
                                            alt="{{ $program->title }}" class="w-full h-full object-cover rounded">
                                    @else
                                        <i class="fas fa-folder text-xs"></i>
                                    @endif
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 group-hover:text-white transition-colors">
                                    {{ $program->title }}
                                </h3>
                            </a>
                            <p class="text-gray-700 text-sm ml-9 line-clamp-2 group-hover:text-white transition-colors">
                                {{ Str::words($program->description) }}
                            </p>
                        </div>
                    @empty
                        <!-- Fallback jika tidak ada data -->
                        <div class="text-center py-8">
                            <div class="text-gray-400 mb-2">
                                <i class="fas fa-folder-open text-4xl"></i>
                            </div>
                            <p class="text-gray-600 text-sm">Belum ada program</p>
                        </div>
                    @endforelse
                </div>

                <!-- Learn More Button -->
                <div class="ml-9">
                    <a href="{{ url('/program-project') }}"
                        class="inline-flex items-center gap-2 bg-gray-900 hover:bg-gray-800 text-white font-semibold px-6 py-3 rounded-lg transition-all duration-300 group">
                        <span>Lihat Semua Program</span>
                        <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform duration-300"></i>
                    </a>
                </div>
            </div>

            <!-- Right Image -->
            <div class="relative">
                <div class="rounded-2xl overflow-hidden shadow-xl h-full min-h-[600px]">
                    <img src="{{ asset('img/program_child.jpg') }}" alt="Child with headphones"
                        class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project Section -->
<section class="pt-20 pb-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="mb-12">
            <div class="flex items-center space-x-3 mb-6">
                <div class="w-12 h-1 bg-gray-800"></div>
                <span class="text-sm font-semibold text-gray-800 uppercase tracking-wider">PROJECT</span>
            </div>
            <h2 class="text-4xl md:text-4xl font-bold text-gray-900 leading-tight max-w-xl pl-20">
                Temukan bagaimana program-program dan cerita komunitas kami menciptakan dampak yang berkelanjutan.
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
                    <h3 class="text-xl font-semibold text-gray-600 mb-2">Tidak Ada Proyek Tersedia</h3>
                    <p class="text-gray-500">Proyek akan muncul di sini setelah ditambahkan.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
