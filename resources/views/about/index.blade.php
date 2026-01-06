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

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .delay-1 {
            animation-delay: 0.1s;
        }

        .delay-2 {
            animation-delay: 0.2s;
        }

        .delay-3 {
            animation-delay: 0.3s;
        }
    </style>
</head>

<body class="font-poppins">
    @include('halaman_depan.components.navbar')

    <!-- About & History Section -->
    <section class="pt-10 pb-24 bg-white" id="about">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Header -->
            <div class="mb-16 animate-fade-in-up opacity-0">
                <div class="inline-flex items-center gap-3 mb-6">
                    <div class="w-12 h-1 bg-cyan-500"></div>
                    <span class="text-xs font-bold text-cyan-500 uppercase tracking-widest">About Us</span>
                </div>
                <h2 class="text-5xl md:text-6xl font-bold text-gray-900 leading-tight">
                    Sejarah Kami
                </h2>
            </div>

            <!-- Main Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center text-justify">

                <!-- Left: Description -->
                <div class="animate-fade-in-up opacity-0 delay-1">
                    <p class="text-lg text-gray-700 leading-relaxed mb-6 text-justify"></p>
                    </p>
                    Yayasan Kesejahteraan Keluarga Soegijapranata disingkat YKKS merupakan organisasi non pemerintah
                    yang berdiri sejak tahun 1977 di Semarang. Dirintis oleh yakni (almarhum) Bruder Servatius
                    Tjondrohartanto, FIC, (almarhum) dan Ibu C. Djoeariah, SH dan (almarhum) Ibu Agnes Kris Sumarsanti.
                    Pada waktu didirikan lembaga ini merupakan unit kerja alias menginduk di Yayasan Sosial
                    Soegijapranata (YSS) Keuskupan Agung Semarang –dari tahun 1977 - 2004 dan diberi kantor di Jalan
                    Srigunting 10 Semarang. Tahun 2004 Bapak Paulus Mujiran, Ibu C Djuariah, Ibu Prof Dr. Djuliati
                    Surojo dan Ibu Sartini Djoko Moelyanto merintis YKKS menjadi lembaga badan bukum mandiri dengan akte
                    notaris Subiyanto Putro, SH No 31 Tahun 2005 tanggal 25 Januari 2005 dengan SK pengesahan dari
                    Kementerian Hukum dan Hak Asasi Manusia Nomor C-346.HT.01.02.TH 2006. Sejak tahun 2004 – 2009 sempat
                    berpindah-pindah kantor antara lain di Jalan Kedungmundu 56, dan kemudian pada tahun 2008 mendirikan
                    kantor sendiri di belakang kelurahan Tandang, Kecamatan Tembalang, Kota Semarang di lahan bekas
                    bong/makam Thionghoa hingga sekarang.
                    </p>

                    <p class="text-lg text-gray-700 leading-relaxed mb-10 text-justify"></p>
                    Sejak didirikan sampai sekarang Yayasan ini didonori oleh Christian Children Fund (CCF) yang kini
                    berubah menjadi ChildFund International di Indonesia. Pernah bermitra dengan CCF Jerman untuk
                    penanganan anak jalanan Kota Semarang tahun 2005-2009. Bermitra dengan Fontera Australia untuk
                    pengembangan anak usia dini melalui Program ENHANCE di Kota dan Kabupaten Semarang. Pernah
                    bekerjasama dengan Kementerian Pemuda dan Olah Raga untuk Program ROMPI. Bermitra dengan Yayasan
                    Elisabeth Belanda untuk pengembangan Panti Asuhan Servatius. Panti Asuhan Servatius ditutup pada
                    tahun 2018 karena kekurangan penghuni disamping juga pendanaan. Juga pernah mendapat program
                    pencegahan trafficking dalam program GADIS. Tahun 2010 Yayasan Sosial Sidomulyo di Ungaran yang
                    mengelola GSM Sidomulyo yang melayani di wilayah Kabupaten Semarang bergabung dengan YKKS. Pernah
                    bermitra dengan USAID-CCBO 2022-2024 untuk kegiatan pemberdayaan perempuan di sektor persampahan di
                    Kota Semarang, pencegahan stunting kerjasama dengan Tanoto Foundation 2022-2024 di Kota Semarang dan
                    Kabupaten Banyumas. Disamping mengelola program kerjasama dengan ChildFund International YKKS juga
                    mengelola Wisma Servatius di Jalan Gatotkaca, Dampu, Ungaran Timur Kabupaten Semarang. Saat ini YKKS
                    bekerja di Kalurahan Tandang. Tahun 2020 mengembangkan pelayanan baru di Kelurahan Tanjung Mas,
                    Dadapsari, Kuningan dan Bandarharjo di Kecamatan Semarang Utara. Dan tahun 2025 ini mengembangkan
                    sayapnya pelayanan baru di Kelurahan Kemijen Kecamatan Semarang Timur Kota Semarang. YKKS terbuka
                    untuk bermitra dengan siapapun untuk pemberdayaan masyarakat.
                    </p>

                    <!-- Scroll Down Button -->
                    <button onclick="scrollToNext()"
                        class="inline-flex items-center gap-2 bg-cyan-500 hover:bg-cyan-600 text-white font-semibold px-8 py-3 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg group">
                        <span>Visi & Misi</span>
                        <i class="fas fa-chevron-down group-hover:translate-y-1 transition-transform"></i>
                    </button>
                </div>

                <!-- Right: Image with Overlay -->
                <!-- PPT Section -->
                <div class="relative w-full max-w-xl mx-auto overflow-hidden rounded-3xl shadow-2xl">
                    <!-- Tetap 16:9 tapi fisiknya lebih kecil -->
                    <div class="relative w-full" style="padding-top: 56.25%;">
                        <iframe
                            src="https://docs.google.com/presentation/d/1zxPoZqJuO8mbEtSrn3Yj7NwbSEM6reFJ/embed?start=false&loop=false&delayms=3000"
                            class="absolute inset-0 w-full h-full" style="border:0;" frameborder="0" allowfullscreen>
                        </iframe>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="py-24 bg-gradient-to-br from-cyan-400 to-cyan-300 relative overflow-hidden">
        <!-- Background Decoration -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-white/10 rounded-full -mr-48 -mt-48"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-white/10 rounded-full -ml-48 -mb-48"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

            <!-- Section Header -->
            <div class="text-center mb-16 animate-fade-in-up opacity-0">
                <h2 class="text-3xl md:text-6xl font-bold text-gray-800 mb-4">
                    Visi dan Misi Kami
                </h2>
                <p class="text-xl text-gray-800 max-w-2xl mx-auto">
                    Komitmen kami untuk masa depan yang lebih baik
                </p>
            </div>

            <!-- Video Section -->
            <!-- <div class="mb-20 animate-fade-in-up opacity-0 delay-1">
                <div class="rounded-3xl overflow-hidden shadow-2xl h-[400px] md:h-[500px] relative group">
                    <img src="{{ asset('img/video.png') }}" alt="Our Team" class="w-full h-full object-cover">
                </div>
            </div> -->

            <!-- Mission & Vision Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">

                <!-- Mission Card -->
                <div
                    class="backdrop-blur-md rounded-2xl p-10 hover:border-cyan-300 transition-all duration-300 animate-fade-in-up opacity-0 delay-2 group hover:shadow-2xl">
                    <div class="flex items-center gap-4 mb-6">
                        <div
                            class="w-14 h-14 bg-cyan-100 rounded-xl flex items-center justify-center group-hover:bg-cyan-200 transition-all">
                            <i class="fas fa-bullseye text-cyan-500 text-2xl"></i>
                        </div>
                        <h3 class="text-3xl font-bold text-gray-900">VISI KAMI</h3>
                    </div>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-4 text-gray-700">
                            <span class="text-cyan-500 font-bold mt-1">✓</span>
                            <span>Memfasilitasi upaya perlindungan anak dengan memperhatikan hak anak.</span>
                        </li>
                        <li class="flex items-start gap-4 text-gray-700">
                            <span class="text-cyan-500 font-bold mt-1">✓</span>
                            <span>Memberdayakan perempuan dalam bidang ekonomi, sosial, budaya dan politik.</span>
                        </li>
                        <li class="flex items-start gap-4 text-gray-700">
                            <span class="text-cyan-500 font-bold mt-1">✓</span>
                            <span>Mengurangi dampak perubahan iklim dengan mendorong upaya pelestarian
                                lingkungan.</span>
                        </li>
                        <li class="flex items-start gap-4 text-gray-700">
                            <span class="text-cyan-500 font-bold mt-1">✓</span>
                            <span>Menciptakan lingkungan yang mendukung peningkatan kesejahteraan keluarga.</span>
                        </li>
                    </ul>
                </div>

                <!-- Vision Card -->
                <div
                    class="bg-backdrop-blur-md rounded-2xl p-10 hover:border-cyan-300 transition-all duration-300 animate-fade-in-up opacity-0 delay-3 group hover:shadow-2xl">
                    <div class="flex items-center gap-4 mb-6">
                        <div
                            class="w-14 h-14 bg-cyan-100 rounded-xl flex items-center justify-center group-hover:bg-cyan-200 transition-all">
                            <i class="fas fa-lightbulb text-cyan-500 text-2xl"></i>
                        </div>
                        <h3 class="text-3xl font-bold text-gray-900">VISI KAMI</h3>
                    </div>
                    <div class="space-y-4 text-gray-700 leading-relaxed">
                        <p>
                            Terwujudnya perlindungan anak, kesetaraan gender, kelestarian lingkungan, serta peningkatan
                            kesejahteraan keluarga.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Partners Section -->
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
                <img src="{{ asset('img/image 6.png') }}" alt="ChildFund International"
                    class="h-10 sm:h-12 object-contain">
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

    <!-- Awards & Recognitions Section -->
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Header -->
            <!-- <div class="text-center mb-16 animate-fade-in-up opacity-0">
                <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">
                    Awards & Recognition
                </h2>
            </div>

            <!-- Awards Grid -->
            <!-- <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-24">

                <!-- Award 1 -->
            <!-- <div class="text-center animate-fade-in-up opacity-0 delay-1 group">
                    <div class="mb-6 transform group-hover:scale-110 transition-transform duration-300">
                        <img src="{{ asset('img/award.png') }}" alt="award" class="inline-block h-20">
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Best NGO Award</h3>
                    <p class="text-cyan-600 font-semibold mb-1">2021</p>
                    <p class="text-gray-600">Jakarta</p>
                </div>

                <!-- Award 2 -->
            <!-- <div class="text-center animate-fade-in-up opacity-0 delay-2 group">
                    <div class="mb-6 transform group-hover:scale-110 transition-transform duration-300">
                        <img src="{{ asset('img/award.png') }}" alt="award" class="inline-block h-20">
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Best NGO Award</h3>
                    <p class="text-cyan-600 font-semibold mb-1">2018</p>
                    <p class="text-gray-600">Semarang</p>
                </div>

                <!-- Award 3 -->
            <!-- <div class="text-center animate-fade-in-up opacity-0 delay-3 group">
                    <div class="mb-6 transform group-hover:scale-110 transition-transform duration-300">
                        <img src="{{ asset('img/award.png') }}" alt="award" class="inline-block h-20">
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Best NGO Award</h3>
                    <p class="text-cyan-600 font-semibold mb-1">2014</p>
                    <p class="text-gray-600">Semarang</p>
                </div>

            </div> -->

            <!-- Journey Section -->
            <div class="bg-[#009ED6] rounded-3xl p-12 md:p-16 overflow-hidden animate-fade-in-up opacity-0 delay-1">

                <!-- Background Decoration -->
                <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center relative z-10">

                    <!-- Left: Content -->
                    <div>
                        <div class="mb-6">
                            <span class="text-xs font-bold text-white/80 uppercase tracking-widest">Perjalanan
                                Kami</span>
                        </div>
                        <h3 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">
                            Bagaimana kami memberdayakan masyarakat
                        </h3>
                        <p class="text-white/90 text-lg leading-relaxed mb-8">
                            Yayasan Kesejahteraan Keluarga Soegijapranata (YKKS) telah melayani keluarga dan anak-anak
                            melalui berbagai program berdampak di bidang pendidikan, pengembangan keluarga, kesehatan,
                            dan layanan sosial. Dengan visi yang berlandaskan kepedulian dan komitmen, kami terus
                            mendukung dan membangun komunitas yang kuat di seluruh Indonesia.
                        </p>

                        <!-- Stats -->
                        <div class="grid grid-cols-3 gap-8">
                            <div>
                                <div class="text-3xl md:text-4xl font-bold text-white mb-2">30.000</div>
                                <p class="text-white/80 text-sm font-medium">Kepala Keluarga</p>
                            </div>
                            <div>
                                <div class="text-3xl md:text-4xl font-bold text-white mb-2">2.000+</div>
                                <p class="text-white/80 text-sm font-medium">Lembaga Perlindungan Anak</p>
                            </div>
                            <div>
                                <div class="text-3xl md:text-4xl font-bold text-white mb-2">500</div>
                                <p class="text-white/80 text-sm font-medium">Fasilitator Komunitas</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Image -->
                    <div class="relative">
                        <div class="rounded-2xl overflow-hidden shadow-2xl">
                            <img src="{{ asset('img/image_19.png') }}" alt="Our Community"
                                class="w-full h-full object-cover">
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- Meet Our Team Section -->
    <section class="pb-24 bg-gray-50" id="team">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Header -->
            <div class="text-center mb-16 animate-fade-in-up opacity-0">
                <h2 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6">
                    Kenali Tim Kami
                </h2>
            </div>

            <!-- Team Members Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- 1 -->
                <div class="animate-fade-in-up opacity-0 delay-1 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/team/1.jpg') }}" alt="Paulus Mujiran"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Paulus Mujiran, S.Sos, MSi</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">Pimpinan Proyek YKKS</p>
                    </center>
                </div>

                <!-- 2 -->
                <div class="animate-fade-in-up opacity-0 delay-1 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/team/2.jpg') }}" alt="Dyah Sri Purwaningwati"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Dyah Sri Purwaningwati, S.Pd</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">Koordinator Program</p>
                    </center>
                </div>

                <!-- 3 -->
                <div class="animate-fade-in-up opacity-0 delay-1 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/team/3.jpg') }}" alt="Antonius Widodo"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Antonius Widodo, S.S</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">Koordinator BHS</p>

                        <div class="flex gap-3 justify-center">
                            <a href="https://www.instagram.com/antonius.widodo.52/" target="_blank"
                                rel="noopener noreferrer" class="w-8 h-8 rounded-full bg-gray-200 hover:bg-cyan-500
                                  flex items-center justify-center text-gray-700 hover:text-white transition-all">
                                <i class="fab fa-instagram text-xs"></i>
                            </a>
                        </div>
                    </center>
                </div>

                <!-- 4 -->
                <div class="animate-fade-in-up opacity-0 delay-2 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/team/4.jpg') }}" alt="Indah Novita Sari"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Indah Novita Sari, S.Pd</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">Koordinator Monitoring &amp; Evaluasi</p>

                        <div class="flex gap-3 justify-center">
                            <a href="https://www.linkedin.com/in/indah-novita-sari-045825161/" target="_blank"
                                rel="noopener noreferrer" class="w-8 h-8 rounded-full bg-gray-200 hover:bg-cyan-500
                                  flex items-center justify-center text-gray-700 hover:text-white transition-all">
                                <i class="fab fa-linkedin-in text-xs"></i>
                            </a>
                        </div>
                    </center>
                </div>

                <!-- 5 -->
                <div class="animate-fade-in-up opacity-0 delay-3 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/team/5.jpg') }}" alt="Rachel Tika Aristiani"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Rachel Tika Aristiani, S.Tr.P, M.P</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">Asisten Monitoring &amp; Evaluasi</p>
                    </center>
                </div>

                <!-- 6 -->
                <div class="animate-fade-in-up opacity-0 delay-1 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/team/6.jpg') }}" alt="Fera Wijayanti"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Fera Wijayanti, S.M</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">Asisten Keuangan / Kasir</p>
                    </center>
                </div>

                <!-- 7 -->
                <div class="animate-fade-in-up opacity-0 delay-2 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/team/7.jpg') }}" alt="Irma Amalia"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Irma Amalia, A.Md</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">PIC Program Swipe Safe</p>

                        <div class="flex gap-3 justify-center">
                            <a href="https://www.instagram.com/amlirma?igsh=ZHVucDd2MGdlanJj" target="_blank"
                                rel="noopener noreferrer" class="w-8 h-8 rounded-full bg-gray-200 hover:bg-cyan-500
                                  flex items-center justify-center text-gray-700 hover:text-white transition-all">
                                <i class="fab fa-instagram text-xs"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/irma-amalia-3020a0203" target="_blank"
                                rel="noopener noreferrer" class="w-8 h-8 rounded-full bg-gray-200 hover:bg-cyan-500
                                  flex items-center justify-center text-gray-700 hover:text-white transition-all">
                                <i class="fab fa-linkedin-in text-xs"></i>
                            </a>
                        </div>
                    </center>
                </div>


                <!-- 8 -->
                <div class="animate-fade-in-up opacity-0 delay-3 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/team/8.jpg') }}" alt="Parwati Handayani"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Parwati Handayani</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">PIC Program Learning</p>
                    </center>
                </div>

                <!-- 9 -->
                <div class="animate-fade-in-up opacity-0 delay-1 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/team/9.jpg') }}" alt="Anggela Putri Puspita"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Anggela Putri Puspita, S.E</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">PIC Program Learning</p>
                    </center>
                </div>

                <!-- 10 -->
                <div class="animate-fade-in-up opacity-0 delay-2 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/team/10.jpg') }}" alt="Riska Anggraeni Putri"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Riska Anggraeni Putri, A.Md.Keb</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">PIC Program Health</p>
                    </center>
                </div>

                <!-- 11 -->
                <div class="animate-fade-in-up opacity-0 delay-3 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/team/11.jpg') }}" alt="Mahya Agfiyani"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Mahya Agfiyani, S.Pd</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">PIC Program Livelihood</p>
                    </center>
                    <div class="flex gap-3 justify-center">

                        <!-- LinkedIn -->
                        <a href="https://id.linkedin.com/in/mahyaagf" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full bg-gray-200 hover:bg-cyan-500
                    flex items-center justify-center text-gray-700 hover:text-white transition-all">
                            <i class="fab fa-linkedin-in text-xs"></i>
                        </a>
                    </div>
                </div>

                <!-- 12 -->
                <div class="animate-fade-in-up opacity-0 delay-1 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/team/12.jpg') }}" alt="Zulfikar Lintang Nuswantoro"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Zulfikar Lintang N, S.S</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">PIC Program EPW</p>
                    </center>
                    <div class="flex gap-3 justify-center">

                        <!-- LinkedIn -->
                        <a href="https://www.linkedin.com/in/zulfikar-lintang-228469147" target="_blank"
                            rel="noopener noreferrer" class="w-8 h-8 rounded-full bg-gray-200 hover:bg-cyan-500
                    flex items-center justify-center text-gray-700 hover:text-white transition-all">
                            <i class="fab fa-linkedin-in text-xs"></i>
                        </a>
                    </div>
                </div>

                <!-- 13 -->
                <div class="animate-fade-in-up opacity-0 delay-2 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/team/13.jpg') }}" alt="Siti Nur Dzakiyyatul"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Siti Nur Dzakiyyatul K, S.Psi</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">PIC Program Protection</p>
                    </center>
                </div>

                <!-- 14 -->
                <div class="animate-fade-in-up opacity-0 delay-3 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/team/14.jpg') }}" alt="Risma Putri Supriyanto"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Risma Putri Supriyanto</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">Admin Klaster &amp; BHS</p>
                    </center>
                </div>

                <!-- 15 -->
                <div class="animate-fade-in-up opacity-0 delay-1 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/team/15.jpg') }}" alt="Yeni Rahayu Kasmawati"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Yeni Rahayu Kasmawati</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">Koordinator Komisi BHS</p>
                    </center>
                </div>

                <!-- 16 -->
                <div class="animate-fade-in-up opacity-0 delay-2 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/team/16.jpg') }}" alt="Lusiana Dewi Fibriantin"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Lusiana Dewi Fibriantin</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">Koordinator Komisi BHS</p>
                    </center>
                </div>

                <!-- 17 -->
                <div class="animate-fade-in-up opacity-0 delay-3 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/team/17.jpg') }}" alt="Emi Lestari"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Emi Lestari</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">Koordinator Komisi BHS</p>
                    </center>
                </div>

                <!-- 18 -->
                <div class="animate-fade-in-up opacity-0 delay-1 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/team/18.jpg') }}" alt="Sumarni"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Sumarni</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">Koordinator Komisi BHS</p>
                    </center>

                </div>
            </div>
    </section>


    @include('halaman_depan.components.footer')

    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .delay-1 {
            animation-delay: 0.1s;
        }

        .delay-2 {
            animation-delay: 0.2s;
        }

        .delay-3 {
            animation-delay: 0.3s;
        }
    </style>

    <!-- Script untuk scroll -->
    <script>
        function scrollToNext() {
            const nextSection = document.querySelector('section:nth-of-type(2)');
            if (nextSection) {
                nextSection.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }
    </script>
</body>

</html>