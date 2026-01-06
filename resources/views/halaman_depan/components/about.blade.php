<!-- About Us Section -->
<section class="py-16 sm:py-20 bg-white overflow-x-hidden" id="about">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-12 gap-10 md:gap-12 pt-12 md:pt-16 items-center">

            <!-- TEXT -->
            <div class="col-span-12 md:col-span-7 order-1">
                <div class="w-full">

                    <div class="mb-6">
                        <div class="flex items-center space-x-3 mb-4">
                            <div class="w-12 h-1 bg-gray-800"></div>
                            <span class="text-sm font-semibold text-gray-800 uppercase tracking-wider">
                                ABOUT US
                            </span>
                        </div>

                        <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-900 leading-tight md:pl-16">
                            Kami menyediakan tempat untuk keluarga dan anak-anak
                        </h2>
                    </div>

                    <p class="text-gray-600 leading-relaxed mb-8 text-justify md:pl-16">
                        Yayasan Kesejahteraan Keluarga Soegijapranata (YKKS), didirikan pada tahun 1977 di Semarang oleh
                        tiga aktivis sosial Bruder Servatius Tjondrohartanto, FIC; Ibu C. Djoeariah, SH; dan Ibu Agnes
                        Kris Sumarsanti. Awalnya merupakan unit kerja Yayasan Sosial Soegijapranata (YSS) Keuskupan
                        Agung Semarang. Menjadi lembaga mandiri pada tahun 2005 melalui akte notaris, YKKS fokus pada
                        pemberdayaan keluarga, perempuan, dan anak melalui berbagai program kolaborasi, antara lain
                        dengan ChildFund International (d/h Christian Children Fund), Fontera Australia, Kemenpora, dan
                        Yayasan Elisabet Belanda. Sejak 2010, YKKS juga mengelola layanan di Kabupaten Semarang setelah
                        menggabungkan Yayasan Sosial Sidomulyo. Saat ini, YKKS aktif di wilayah Kota dan Kabupaten
                        Semarang, termasuk sejumlah kelurahan di Kecamatan Tembalang, Bergas, Pringapus, Tuntang, serta
                        Semarang Utara.
                    </p>

                    <a href="/about"
                        class="inline-block bg-[#009ED6] hover:bg-cyan-700 hover:text-white px-8 py-3 rounded-md font-medium transition md:ml-16">
                        Pelajari Lebih Lanjut
                    </a>
                </div>
            </div>

            <!-- VIDEO -->
            <div class="col-span-12 md:col-span-5 order-2 flex items-center justify-center">
                <div class="w-full max-w-xl rounded-2xl overflow-hidden shadow-xl aspect-video">
                    <iframe src="https://www.youtube.com/embed/Uoqw1PYl6L4" class="w-full h-full" frameborder="0"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Partners Section -->
<section class="pt-12 pb-20 sm:pt-16 sm:pb-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex items-center mb-8">
            <h3 class="text-sm font-semibold text-gray-700 uppercase tracking-wider whitespace-nowrap">
                Mitra Kami
            </h3>
            <div class="flex-grow h-px bg-gray-300 ml-6 sm:ml-16"></div>
        </div>

        <div class="flex flex-wrap items-center justify-center sm:justify-start gap-8 sm:gap-12">
            <img src="{{ asset('img/image 6.png') }}" alt="ChildFund International" class="h-10 sm:h-12 object-contain">
        </div>

        <div class="flex items-center mt-8 mb-8">
            <h3 class="text-sm font-semibold text-gray-700 uppercase tracking-wider whitespace-nowrap">
                Didukung Oleh
            </h3>
            <div class="flex-grow h-px bg-gray-300 ml-6 sm:ml-16"></div>
        </div>
        <div class="relative overflow-hidden w-full">
            <div class="flex items-center space-x-12 animate-marquee whitespace-nowrap py-4">
                @php
                    $logos = [
                        ['src' => 'anantaka.jpg', 'alt' => 'Anantaka'],
                        ['src' => 'kab_smg.jpg', 'alt' => 'Kab Semarang'],
                        ['src' => 'kemensos.png', 'alt' => 'Kemensos'],
                        ['src' => 'kota_semarang.png', 'alt' => 'Kota Semarang'],
                        ['src' => 'lbh_apik.jpg', 'alt' => 'LBH Apik'],
                        ['src' => 'lrc-kjham.png', 'alt' => 'LRC KJHAM'],
                        ['src' => 'pattiro.jpg', 'alt' => 'Pattiro'],
                        ['src' => 'pkbi.png', 'alt' => 'PKBI'],
                        ['src' => 'Prop.png', 'alt' => 'Propinsi'],
                        ['src' => 'sbi.jpg', 'alt' => 'SBI'],
                        ['src' => 'setara.jpg', 'alt' => 'Setara'],
                        ['src' => 'unika.png', 'alt' => 'Unika'],
                        ['src' => 'YSKK.jpg', 'alt' => 'YSKK'],
                    ];
                @endphp

                <div class="flex items-center space-x-12 shrink-0">
                    @foreach ($logos as $logo)
                        <img src="{{ asset('img/didukung/' . $logo['src']) }}" alt="{{ $logo['alt'] }}"
                            class="h-10 sm:h-12 object-contain">
                    @endforeach
                </div>
                <div class="flex items-center space-x-12 shrink-0">
                    @foreach ($logos as $logo)
                        <img src="{{ asset('img/didukung/' . $logo['src']) }}" alt="{{ $logo['alt'] }}"
                            class="h-10 sm:h-12 object-contain">
                    @endforeach
                </div>
            </div>
        </div>

        <style>
            @keyframes marquee {
                0% {
                    transform: translateX(0);
                }

                100% {
                    transform: translateX(-50%);
                }
            }

            .animate-marquee {
                display: flex;
                width: max-content;
                animation: marquee 40s linear infinite;
            }

            .animate-marquee:hover {
                animation-play-state: paused;
            }
        </style>

    </div>
</section>