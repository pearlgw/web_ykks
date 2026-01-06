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

    <!-- Header Section with Background Image -->
    <section class="relative py-16 @if(!$news->image_backdrop) bg-cyan-500 @endif overflow-hidden">
        <!-- Background Image with Dark Gradient Overlay -->
        @if($news->image_backdrop)
        <div class="absolute inset-0">
            <img src="{{ asset('storage/' . $news->image_backdrop) }}"
                 alt="{{ $news->title }}"
                 class="w-full h-full object-cover">
            <!-- Dark gradient overlay untuk membuat text lebih terbaca -->
            <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/60 to-black/80"></div>
        </div>
        @endif

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Title -->
            <h1 class="text-4xl md:text-6xl font-medium text-white mb-8 leading-tight">
                {{ $news->title }}
            </h1>

            <!-- News Info Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Source -->
                <div
                    class="flex items-center gap-3 bg-white/10 backdrop-blur-sm rounded-lg p-4 hover:bg-white/20 transition-all duration-300">
                    <div class="flex-shrink-0">
                        <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center">
                            <i class="fas fa-newspaper text-cyan-600 text-lg"></i>
                        </div>
                    </div>
                    <div>
                        <p class="text-white/80 text-sm font-medium">Source</p>
                        @php
                            $sourceUrl = $news->from_news;
                            if (!preg_match('/^https?:\/\//i', $sourceUrl)) {
                                $sourceUrl = 'https://' . $sourceUrl;
                            }
                        @endphp

                        <a href="{{ $sourceUrl }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="text-white text-lg font-semibold">
                            {{ $news->from_news }}
                        </a>

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
                        <p class="text-white/80 text-sm font-medium">Published Date</p>
                        <p class="text-white text-lg font-semibold">
                            {{ \Carbon\Carbon::parse($news->datetime_news)->format('d M Y, H:i') }}</p>
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
                    <span class="text-2xl font-semibold text-gray-800 uppercase tracking-wider">NEWS DETAILS</span>
                </div>
            </div>

            <!-- Full Description -->
            <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed text-xl">
                <style>
                    .prose img {
                        display: block;
                        margin-left: auto;
                        margin-right: auto;
                        max-width: 100%;
                        height: auto;
                        border-radius: 0.5rem;
                        margin-top: 1.5rem;
                        margin-bottom: 1.5rem;
                    }
                </style>
                {!! nl2br(e($news->description)) !!}
            </div>

            <!-- Back Button -->
            <div class="mt-12">
                <a href="/#news"
                   class="inline-flex items-center gap-2 bg-cyan-500 text-white px-6 py-3 rounded-lg hover:bg-cyan-600 transition-all duration-300 font-medium">
                    <i class="fas fa-arrow-left"></i>
                    <span>Back to News</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Other News Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="mb-8">
                <div class="flex items-center space-x-3 mb-6">
                    <div class="w-12 h-1 bg-gray-800"></div>
                    <span class="text-2xl font-semibold text-gray-800 uppercase tracking-wider">OTHER NEWS</span>
                </div>
            </div>

            <!-- News Cards -->
            <div class="grid md:grid-cols-3 gap-6">
                @forelse($otherNews as $item)
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
                                <div class="flex items-center space-x-2 bg-black/30 backdrop-blur-sm px-3 py-1 rounded-lg">
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
                                    <span>Read More</span>
                                    <i class="fas fa-arrow-right text-xs"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-8">
                        <p class="text-gray-500">No other news available at the moment.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    @include('halaman_depan.components.footer')
</body>

</html>
