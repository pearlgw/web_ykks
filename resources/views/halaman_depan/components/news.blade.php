<section class="py-20 bg-white" id="news">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6">
        <!-- News Section -->
        <h2 class="text-3xl font-bold text-gray-900 mb-8">News</h2>

        <div class="grid md:grid-cols-2 gap-6">
            <!-- News Card 1 -->
            <div class="bg-[#8DE1FF] rounded-2xl p-6 flex items-center justify-between">
                <div class="flex items-start space-x-4">
                    <div class="text-center">
                        <div class="text-4xl font-bold text-gray-900">13</div>
                        <div class="text-xs font-semibold text-gray-700 uppercase">APR</div>
                    </div>
                    <div>
                        <div class="flex items-center space-x-2">
                            <div class="text-xs font-semibold text-gray-700 uppercase">COMPAS.COM</div>
                            <div class="w-12 h-1 bg-gray-800"></div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 leading-tight">
                            YKKS Dampingi Anak dalam Kegiatan Kegiatan Edukatif.....
                        </h3>
                    </div>
                </div>
                <button
                    class="bg-white rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 hover:bg-gray-100 transition">
                    <i class="fas fa-arrow-right text-gray-900"></i>
                </button>
            </div>

            <!-- News Card 2 -->
            <div class="bg-[#8DE1FF] rounded-2xl p-6 flex items-center justify-between">
                <div class="flex items-start space-x-4">
                    <div class="text-center">
                        <div class="text-4xl font-bold text-gray-900">25</div>
                        <div class="text-xs font-semibold text-gray-700 uppercase">APR</div>
                    </div>
                    <div>
                        <div class="text-xs font-semibold text-gray-700 uppercase mb-2">DETIK.COM</div>
                        <h3 class="text-lg font-bold text-gray-900 leading-tight">
                            YKKS Gelar Aktivitas Bersama Anak untuk Tumbuhkan.....
                        </h3>
                    </div>
                </div>
                <button
                    class="bg-white rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 hover:bg-gray-100 transition">
                    <i class="fas fa-arrow-right text-gray-900"></i>
                </button>
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
