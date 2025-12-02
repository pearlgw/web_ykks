<section class="py-20 bg-white" id="news">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6">
        <!-- News Section -->
        <h2 class="text-3xl font-bold text-gray-900 mb-8">News</h2>

        <div class="grid md:grid-cols-3 gap-6">
            @forelse($news as $item)
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
                            <button onclick="openNewsModal({{ $item->id }})"
                                class="bg-[#8DE1FF] hover:bg-cyan-700 hover:text-white text-black px-6 py-2 rounded-md text-sm font-medium transition inline-flex items-center space-x-2">
                                <span>Read More</span>
                                <i class="fas fa-arrow-right text-xs"></i>
                            </button>
                        </div>
                    </div>
                </div>
            @empty
                <!-- Fallback jika tidak ada news -->
                <div class="col-span-3 text-center py-16">
                    <div class="text-gray-400 mb-4">
                        <i class="fas fa-newspaper text-5xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-600 mb-2">No News Available</h3>
                    <p class="text-gray-500">News updates will appear here once they are published.</p>
                </div>
            @endforelse
        </div>

        <!-- Modal Detail News -->
        <div id="newsModal"
            class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
            <div class="bg-white rounded-2xl max-w-3xl w-full max-h-[90vh] overflow-hidden">
                <!-- Modal Header -->
                <div class="bg-[#8DE1FF] px-6 py-4 flex items-center justify-between">
                    <h3 id="modalTitle" class="text-2xl font-bold text-gray-900"></h3>
                    <button onclick="closeNewsModal()" class="text-gray-900 hover:text-gray-700 text-2xl font-bold">
                        &times;
                    </button>
                </div>

                <!-- Modal Body - Scrollable -->
                <div class="p-6 overflow-y-auto max-h-[calc(90vh-80px)]">
                    <div class="mb-4">
                        <div class="flex items-center space-x-4 text-sm text-gray-600">
                            <span class="font-semibold uppercase" id="modalSource"></span>
                            <span>•</span>
                            <span id="modalDate"></span>
                        </div>
                    </div>
                    <div class="prose prose-lg max-w-none">
                        <p id="modalDescription" class="text-gray-700 leading-relaxed whitespace-pre-wrap"></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Us Section -->
        <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center mt-16">Contact Us</h2>

        <div class="grid md:grid-cols-2 gap-8">
            <!-- Form -->
            <div>
                <form id="contactForm" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2 uppercase">Name</label>
                        <input type="text" name="name"
                            class="w-full px-4 py-3 bg-gray-200 rounded-lg border-0 focus:outline-none focus:ring-2 focus:ring-cyan-400">
                        <p class="text-red-500 text-sm mt-1 error-name hidden"></p>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2 uppercase">Email</label>
                        <input type="email" name="email"
                            class="w-full px-4 py-3 bg-gray-200 rounded-lg border-0 focus:outline-none focus:ring-2 focus:ring-cyan-400">
                        <p class="text-red-500 text-sm mt-1 error-email hidden"></p>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2 uppercase">Message</label>
                        <textarea rows="4" name="message"
                            class="w-full px-4 py-3 bg-gray-200 rounded-lg border-0 focus:outline-none focus:ring-2 focus:ring-cyan-400 resize-none"></textarea>
                        <p class="text-red-500 text-sm mt-1 error-message hidden"></p>
                    </div>

                    <button type="submit"
                        class="bg-[#00BCD4] hover:bg-cyan-600 text-white px-8 py-3 rounded-lg font-semibold transition">
                        Send Message
                    </button>
                </form>

                <div id="popupSuccess"
                    class="hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                        <h3 class="text-xl font-bold mb-2">Pesan berhasil dikirim!</h3>
                        <p id="popupName" class="text-gray-700 mb-4"></p>
                        <button onclick="closePopup()" class="bg-cyan-500 text-white px-4 py-2 rounded-lg">OK</button>
                    </div>
                </div>
            </div>

            <!-- Map & Address -->
            <div>
                <div class="bg-gray-200 rounded-2xl overflow-hidden h-64 mb-4">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.56347862248!2d110.33907795820312!3d-6.993096800000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4d3f0d024d%3A0x1e0432b9da5cb9f2!2sSemarang%2C%20Semarang%20City%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1234567890123!5m2!1sen!2sid"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
                <div class="text-center">
                    <p class="text-sm font-semibold text-gray-900 leading-relaxed">
                        JL. KARANGRANJANG BARAT NO.VIII,<br>
                        KOTA SEMARANG, JAWA TENGAH
                    </p>
                    <p class="text-sm font-semibold text-gray-900 mt-2">
                        PHONE: 0822 21 1234 5678
                    </p>
                    <p class="text-sm font-semibold text-gray-900">
                        EMAIL: INFO@YKKS.ORG
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Data news untuk modal
    const newsData = @json($news);

    // Fungsi buka modal
    function openNewsModal(newsId) {
        const news = newsData.find(item => item.id === newsId);
        if (news) {
            document.getElementById('modalTitle').textContent = news.title;
            document.getElementById('modalSource').textContent = news.from_news;

            // Format tanggal
            const date = new Date(news.datetime_news);
            const formattedDate = date.toLocaleDateString('id-ID', {
                day: 'numeric',
                month: 'long',
                year: 'numeric',
                hour: '2-digit',
                minute: '2-digit'
            });
            document.getElementById('modalDate').textContent = formattedDate;

            document.getElementById('modalDescription').textContent = news.description;
            document.getElementById('newsModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden'; // Prevent body scroll
        }
    }

    // Fungsi tutup modal
    function closeNewsModal() {
        document.getElementById('newsModal').classList.add('hidden');
        document.body.style.overflow = 'auto'; // Restore body scroll
    }

    // Tutup modal ketika klik di luar modal
    document.getElementById('newsModal')?.addEventListener('click', function(e) {
        if (e.target === this) {
            closeNewsModal();
        }
    });

    // Contact form script
    const form = document.getElementById('contactForm');

    form.addEventListener('submit', async function(e) {
        e.preventDefault();

        // Sembunyikan semua pesan error sebelumnya
        document.querySelectorAll('.error-name, .error-email, .error-message').forEach(el => {
            el.textContent = '';
            el.classList.add('hidden');
        });

        let formData = new FormData(form);

        try {
            let res = await fetch("{{ route('contact.store') }}", {
                method: "POST",
                headers: {
                    "X-Requested-With": "XMLHttpRequest"
                },
                body: formData
            });

            // Jika error validasi
            if (res.status === 422) {
                let data = await res.json();
                if (data.errors) {
                    for (const field in data.errors) {
                        let el = document.querySelector(`.error-${field}`);
                        if (el) {
                            el.textContent = data.errors[field][0];
                            el.classList.remove('hidden');
                        }
                    }
                }
            } else {
                let data = await res.json();
                if (data.success) {
                    // Set nama di popup
                    const nameValue = form.elements['name'].value;
                    document.getElementById('popupName').textContent = `Terima kasih, ${nameValue}!`;

                    document.getElementById('popupSuccess').classList.remove('hidden');
                    form.reset();
                } else {
                    alert(data.message || 'Terjadi kesalahan');
                }
            }
        } catch (err) {
            console.error(err);
            alert("Terjadi kesalahan server. Coba lagi nanti.");
        }
    });

    function closePopup() {
        document.getElementById('popupSuccess').classList.add('hidden');
    }
</script>
