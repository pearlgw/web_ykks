<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semua Berita - {{ config('app.name', 'Yayasan Kesejahteraan Keluarga Soegijapranata') }}</title>
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

    <!-- All News Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="mb-8">
                <div class="flex items-center space-x-3 mb-6">
                    <div class="w-12 h-1 bg-gray-800"></div>
                    <span class="text-2xl font-semibold text-gray-800 uppercase tracking-wider">Semua Berita</span>
                </div>
            </div>

            <!-- News Cards -->
            <div class="grid md:grid-cols-3 gap-6">
                @forelse($allNews as $item)
                    <div class="relative rounded-2xl overflow-hidden shadow-lg h-96 group">
                        <!-- Background Image -->
                        @if ($item->image_backdrop)
                            <img src="{{ asset('storage/' . $item->image_backdrop) }}" alt="{{ $item->title }}"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        @else
                            <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?w=600&q=80"
                                alt="{{ $item->title }}"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        @endif

                        <!-- Gradient Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/60 to-transparent"></div>

                        <!-- Content -->
                        <div class="absolute inset-0 p-6 flex flex-col justify-between text-white">
                            <!-- Top Section: Date & Source -->
                            <div class="flex items-start justify-between">
                                <div class="text-center bg-white/90 backdrop-blur-sm rounded-lg px-4 py-2">
                                    <div class="text-2xl font-bold text-gray-900">
                                        {{ \Carbon\Carbon::parse($item->datetime_news)->format('d') }}
                                    </div>
                                    <div class="text-xs font-semibold text-gray-700 uppercase">
                                        {{ \Carbon\Carbon::parse($item->datetime_news)->format('M') }}
                                    </div>
                                </div>
                                <div
                                    class="flex items-center space-x-2 bg-black/30 backdrop-blur-sm px-3 py-1 rounded-lg">
                                    <div class="w-6 h-0.5 bg-white"></div>
                                    <div class="text-xs font-semibold uppercase">{{ $item->from_news }}</div>
                                </div>
                            </div>

                            <!-- Bottom Section: Title, Description & Button -->
                            <div>
                                <h3 class="text-xl font-bold leading-tight mb-3 line-clamp-2">
                                    {{ $item->title }}
                                </h3>
                                @if ($item->description)
                                    <p class="text-sm text-gray-200 leading-relaxed mb-4 line-clamp-2">
                                        {{ Str::limit(strip_tags($item->description), 100, '...') }}
                                    </p>
                                @endif
                                <a href="{{ route('detail.news', $item->id) }}"
                                    class="bg-[#8DE1FF] hover:bg-cyan-700 hover:text-white text-black px-6 py-2 rounded-md text-sm font-medium transition inline-flex items-center space-x-2">
                                    <span>Baca Selengkapnya</span>
                                    <i class="fas fa-arrow-right text-xs"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-8">
                        <p class="text-gray-500">Belum ada berita tersedia saat ini.</p>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            @if ($allNews->hasPages())
                <div class="flex justify-center mt-12">
                    <nav
                        class="bg-white rounded-lg shadow-sm px-4 py-3 border border-gray-100 inline-flex items-center">
                        <ul class="flex items-center gap-1">
                            {{-- Previous Button --}}
                            @if ($allNews->onFirstPage())
                                <li>
                                    <span class="px-3 py-2 text-gray-400 cursor-not-allowed rounded-lg">
                                        <i class="fas fa-chevron-left text-sm"></i>
                                    </span>
                                </li>
                            @else
                                <li>
                                    <a href="{{ $allNews->previousPageUrl() }}"
                                        class="px-3 py-2 text-blue-600 hover:bg-blue-50 rounded-lg transition duration-200 font-medium">
                                        <i class="fas fa-chevron-left text-sm"></i>
                                    </a>
                                </li>
                            @endif

                            {{-- Page Numbers --}}
                            @foreach ($allNews->getUrlRange(1, $allNews->lastPage()) as $page => $url)
                                @if ($page == $allNews->currentPage())
                                    <li>
                                        <span
                                            class="px-3 py-2 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-lg font-semibold">{{ $page }}</span>
                                    </li>
                                @elseif (
                                    $page == 1 ||
                                        $page == $allNews->lastPage() ||
                                        ($page >= $allNews->currentPage() - 1 && $page <= $allNews->currentPage() + 1))
                                    <li>
                                        <a href="{{ $url }}"
                                            class="px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition duration-200 font-medium">{{ $page }}</a>
                                    </li>
                                @elseif ($page == $allNews->currentPage() - 2 || $page == $allNews->currentPage() + 2)
                                    <li>
                                        <span class="px-2 py-2 text-gray-500">...</span>
                                    </li>
                                @endif
                            @endforeach

                            {{-- Next Button --}}
                            @if ($allNews->hasMorePages())
                                <li>
                                    <a href="{{ $allNews->nextPageUrl() }}"
                                        class="px-3 py-2 text-blue-600 hover:bg-blue-50 rounded-lg transition duration-200 font-medium">
                                        <i class="fas fa-chevron-right text-sm"></i>
                                    </a>
                                </li>
                            @else
                                <li>
                                    <span class="px-3 py-2 text-gray-400 cursor-not-allowed rounded-lg">
                                        <i class="fas fa-chevron-right text-sm"></i>
                                    </span>
                                </li>
                            @endif
                        </ul>
                    </nav>
                </div>
            @endif
        </div>
    </section>

    @include('halaman_depan.components.footer')
</body>

</html>
