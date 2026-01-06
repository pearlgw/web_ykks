<section class="py-20 bg-[#009ED6]" id="literacy">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="mb-12">
            <div class="flex items-center space-x-3 mb-6">
                <div class="w-12 h-1 bg-gray-800"></div>
                <span class="text-sm font-semibold text-gray-800 uppercase tracking-wider">LITERACY CORNER</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight max-w-2xl pl-0 md:pl-20">
                Ruang digital untuk membaca, merenung, dan bertumbuh
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($literacys as $literacy)
                @php
                    // Logic normalization URL
                    $pdfUrl = $literacy->pdf_link;
                    if ($pdfUrl && !preg_match('/^https?:\/\//i', $pdfUrl)) {
                        $pdfUrl = 'https://' . $pdfUrl;
                    }
                @endphp

                <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 flex flex-col h-full transform hover:-translate-y-1">
                    
                    <div class="h-64 px-3 pt-3">
                        <div class="w-full h-full overflow-hidden rounded-lg relative">
                            <img src="{{ $literacy->image_backdrop ? asset('storage/' . $literacy->image_backdrop) : 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=400&q=80' }}"
                                 alt="{{ $literacy->title }}"
                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        </div>
                    </div>

                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2">
                            {{ $literacy->title }}
                        </h3>

                        <div class="flex-grow">
                            <p class="text-sm text-gray-600 leading-relaxed line-clamp-3 mb-6">
                                {{ Str::limit(strip_tags($literacy->description), 120) }}
                            </p>
                        </div>

                        @if(!empty($pdfUrl))
                            <div class="mt-auto pt-4 border-t border-gray-100">
                                <a href="{{ $pdfUrl }}"
                                   target="_blank"
                                   rel="noopener noreferrer"
                                   class="inline-flex items-center justify-center w-full px-4 py-3 bg-red-600 hover:bg-red-700 text-white text-sm font-semibold rounded-xl transition-colors duration-200">
                                    <i class="fas fa-file-pdf mr-2"></i>
                                    View PDF
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

        <div class="flex justify-center mt-12">
            <a href="{{ route('literacy.public.index') }}"
            class="inline-flex items-center gap-3 bg-gray-900 hover:bg-gray-800
                    text-white font-semibold px-8 py-4 rounded-xl
                    transition duration-300 shadow-lg hover:shadow-xl">
                <i class="fas fa-book-open"></i>
                Lihat Semua Modul
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>


    </div>
</section>