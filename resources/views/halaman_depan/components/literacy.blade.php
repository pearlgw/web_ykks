<!-- Literacy Corner Section -->
<section class="py-20 bg-[#009ED6]" id="literacy">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6 pb-8">
        <!-- Header -->
        <div class="mb-12">
            <div class="flex items-center space-x-3 mb-6">
                <div class="w-12 h-1 bg-gray-800"></div>
                <span class="text-sm font-semibold text-gray-800 uppercase tracking-wider">LITERACY CORNER</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight max-w-2xl pl-20">
                Ruang digital untuk membaca, merenung, dan bertumbuh
            </h2>
        </div>

        <!-- Cards Grid -->
        <div class="grid md:grid-cols-3 gap-6">
            @foreach($literacys as $literacy)
            <!-- Card -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-lg">
                <div class="h-64 px-3 pt-3">
                    <img src="{{ $literacy->image_backdrop ? asset('storage/' . $literacy->image_backdrop) : 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=400&q=80' }}"
                        alt="{{ $literacy->title }}" class="w-full h-full object-cover rounded-lg">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2">
                        {{ $literacy->title }}
                    </h3>
                    <p class="text-sm text-gray-600 leading-relaxed line-clamp-3 mb-4">
                        {{ $literacy->description }}
                    </p>
                    <a href="{{ asset('storage/' . $literacy->file_pdf) }}"
                       download
                       class="inline-flex items-center px-4 py-2 bg-gray-900 hover:bg-gray-800 text-white text-sm font-semibold rounded-lg transition-colors duration-200">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        Download PDF
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
