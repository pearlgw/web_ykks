<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Yayasan Kesejahteraan Keluarga Soegijapranata') }}</title>
    <link rel="icon" href="{{ asset('img/rel_icon.png') }}" type="image/png">

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        html { scroll-behavior: smooth; }

        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
</head>

<body class="font-poppins bg-white">

@include('halaman_depan.components.navbar')

<section class="bg-white pt-20 pb-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-12 gap-12">

            <!-- Left -->
            <div class="col-span-12 md:col-span-7">
                <div class="mb-6">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-12 h-1 bg-gray-800"></div>
                        <span class="text-sm font-semibold text-gray-800 uppercase tracking-wider">
                            Literacy Corner
                        </span>
                    </div>
                    <h2 class="text-4xl md:text-6xl text-gray-900 leading-tight pl-16">
                        Ruang digital untuk membaca, merenung, dan bertumbuh
                    </h2>
                </div>

                <p class="text-gray-600 leading-relaxed mb-8 pl-16 text-justify">
                    Literacy Corner menyediakan berbagai modul bacaan dan pembelajaran
                    untuk memperluas wawasan, meningkatkan literasi, dan mendukung
                    pengembangan kapasitas individu maupun komunitas.
                </p>
            </div>

            <div class="col-span-12 md:col-span-5">
                <div class="rounded-2xl overflow-hidden shadow-xl h-[380px]">
                    <img src="{{ asset('img/literacy_corner.jpeg') }}"
                         alt="Literacy Corner"
                         class="w-full h-full object-cover">
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-16 bg-cyan-500">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="mb-16">
            <h2 class="text-3xl md:text-5xl font-medium text-gray-900 leading-tight">
                Modul literasi untuk memperkaya pengetahuan dan refleksi
            </h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($literacys as $literacy)

                @php
                    $pdfUrl = $literacy->pdf_link;
                    if ($pdfUrl && !preg_match('/^https?:\/\//i', $pdfUrl)) {
                        $pdfUrl = 'https://' . $pdfUrl;
                    }
                @endphp

                <div class="bg-white rounded-2xl shadow-lg overflow-hidden group">

                    <div class="h-64 px-3 pt-3">
                        <img src="{{ $literacy->image_backdrop
                            ? asset('storage/' . $literacy->image_backdrop)
                            : asset('img/literacy_corner.jpeg') }}"
                             alt="{{ $literacy->title }}"
                             class="w-full h-full object-cover rounded-xl transition-transform duration-500 group-hover:scale-105">
                    </div>

                    <!-- Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2">
                            {{ $literacy->title }}
                        </h3>

                        <p class="text-sm text-gray-600 leading-relaxed mb-4 line-clamp-3">
                            {{ strip_tags($literacy->description) }}
                        </p>

                        @if($pdfUrl)
                            <a href="{{ $pdfUrl }}"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="inline-flex items-center px-4 py-2
                                      bg-red-600 hover:bg-red-700
                                      text-white text-sm font-semibold
                                      rounded-lg transition">
                                <i class="fas fa-file-pdf mr-2"></i>
                                View PDF
                            </a>
                        @endif
                    </div>
                </div>

            @empty
                <div class="col-span-full text-center py-20">
                    <i class="fas fa-book-open text-6xl text-gray-300 mb-4"></i>
                    <h3 class="text-2xl font-bold text-gray-600 mb-2">
                        Belum ada modul literasi
                    </h3>
                    <p class="text-gray-500">
                        Modul literasi akan ditampilkan di sini jika tersedia.
                    </p>
                </div>
            @endforelse
        </div>

        @if ($literacys->hasPages())
            <div class="mt-16 flex justify-center">
                <nav class="inline-flex items-center gap-1 bg-white px-4 py-2 rounded-xl shadow border">

                    @if ($literacys->onFirstPage())
                        <span class="px-3 py-2 text-gray-400 cursor-not-allowed">
                            <i class="fas fa-chevron-left"></i>
                        </span>
                    @else
                        <a href="{{ $literacys->previousPageUrl() }}"
                           class="px-3 py-2 hover:bg-gray-100 rounded">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                    @endif

                    @foreach ($literacys->getUrlRange(1, $literacys->lastPage()) as $page => $url)
                        @if ($page == $literacys->currentPage())
                            <span class="px-3 py-2 bg-gray-900 text-white rounded font-semibold">
                                {{ $page }}
                            </span>
                        @elseif (
                            $page == 1 ||
                            $page == $literacys->lastPage() ||
                            ($page >= $literacys->currentPage() - 1 && $page <= $literacys->currentPage() + 1)
                        )
                            <a href="{{ $url }}"
                               class="px-3 py-2 hover:bg-gray-100 rounded">
                                {{ $page }}
                            </a>
                        @elseif (
                            $page == $literacys->currentPage() - 2 ||
                            $page == $literacys->currentPage() + 2
                        )
                            <span class="px-2 py-2 text-gray-400">…</span>
                        @endif
                    @endforeach

                    @if ($literacys->hasMorePages())
                        <a href="{{ $literacys->nextPageUrl() }}"
                           class="px-3 py-2 hover:bg-gray-100 rounded">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    @else
                        <span class="px-3 py-2 text-gray-400 cursor-not-allowed">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    @endif

                </nav>
            </div>
        @endif

    </div>
</section>

@include('halaman_depan.components.footer')

</body>
</html>
