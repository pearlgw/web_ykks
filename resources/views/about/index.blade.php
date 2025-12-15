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
                    yang berdiri sejak tahun 1977 di Semarang. Didirikan oleh trio aktivis sosial yakni (almarhum)
                    Bruder Servatius Tjondrohartanto, FIC, (almarhum) Ibu C. Djoeariah, SH dan (almarhum) Ibu Agnes Kris
                    Sumarsanti. Pada waktu didirikan lembaga ini merupakan unit kerja dari dari Yayasan Sosial
                    Soegijapranata (YSS) Keuskupan Agung Semarang – yang waktu itu banyak bermitra dengan LSM
                    internasional dan diberi kantor di Jalan Srigunting 10 Semarang. Tahun 2005 menjadi lembaga mandiri
                    dengan akte notaris Subiyanto Putro, SH No 31 Tahun 2005 tanggal 25 Januari 2005. Sejak tahun 2004 –
                    2009 sempat berpindah-pindah kantor antara lain di Jalan Kedungmundu 56, dan kemudian pada tahun
                    2008 mendirikan kantor sendiri di belakang kelurahan Tandang, Kecamatan Tembalang, Kota Semarang di
                    lahan bekas bong/makam Thionghoa.
                    </p>

                    <p class="text-lg text-gray-700 leading-relaxed mb-10 text-justify"></p>
                    Sejak didirikan sampai sekarang Yayasan ini didonori oleh Christian Children Fund (CCF) yang kini
                    berubah menjadi ChildFund International di Indonesia. Pernah bermitra dengan CCF Jerman untuk
                    penanganan anak jalanan Kota Semarang tahun 2005-2009. Bermitra dengan Fontera Australia untuk
                    pengembangan anak usia dini melalui Program ENHANCE di Kota dan Kabupaten Semarang. Pernah
                    bekerjasama dengan Kementerian Pemuda dan Olah Raga untuk Program ROMPI. Bermitra dengan Yayasan
                    Elisabet Belanda untuk pengembangan Panti Asuhan Servatius. Juga mendapat program pencegahan
                    trafficking dalam program GADIS. Tahun 2010 Yayasan Sosial Sidomulyo di Ungaran yang mengelola GSM
                    Sidomulyo yang melayani di wilayah Kabupaten Semarang bergabung dengan YKKS. Saat ini YKKS bekerja
                    di Kalurahan Tandang dan Sendangguwo, Kecamatan Tembalang, Kota Semarang dan di Desa Gondoriyo,
                    Kecamatan Bergas, Desa Wonorejo Kecamatan Pringapus dan Desa Tlompakan Kecamatan Tuntang Kabupaten
                    Semarang. Tahun 2020 mengembangkan pelayanan baru di Kelurahan Tanjung Mas, Dadapsari, Kuningan dan
                    Bandarharjo di Kecamatan Semarang Utara
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
    <section class="pt-16 pb-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center mb-8">
                <h3 class="text-sm font-semibold text-gray-700 uppercase tracking-wider whitespace-nowrap">Mitra Kami
                </h3>
                <div class="flex-grow h-px bg-gray-300 ml-16"></div>
            </div>

            <div class="flex flex-wrap items-center gap-12">
                <!-- ChildFund Logo -->
                <img src="{{ asset('img/image 6.png') }}" alt="ChildFund International" class="h-12 object-contain">

                <!-- USAID Logo -->
                <!-- <img src="{{ asset('img/image 7.png') }}" alt="USAID" class="h-12 object-contain"> -->

                <!-- Tanoto Foundation Logo -->
                <!-- <img src="{{ asset('img/image 8.png') }}" alt="Tanoto Foundation" class="h-12 object-contain"> -->
            </div>
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
                            <span class="text-xs font-bold text-white/80 uppercase tracking-widest">Perjalanan Kami</span>
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
                <!-- <p class="text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius eros in eros elementum
                    tristique.
                </p> -->
            </div>

            <!-- Team Members Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- 16. Paulus Mujiran -->
                <div class="animate-fade-in-up opacity-0 delay-1 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/paulus-mujiran.jpeg') }}" alt="Paulus Mujiran"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300">
                        </div>
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Paulus Mujiran, S.Sos, MSi</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">Pimpinan Proyek</p>
                    </center>
                </div>

                <!-- 1. Antonius Widodo -->
                <div class="animate-fade-in-up opacity-0 delay-1 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/antonius-widodo.jpg') }}" alt="Antonius Widodo"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300">
                        </div>
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Antonius Widodo</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">
                            Koordinator Bagian Hubungan Sponsor (BHS)
                        </p>
                        <div class="flex gap-3 justify-center">
                            <a href="https://www.instagram.com/antonius.widodo.52/"
                                class="w-8 h-8 rounded-full bg-gray-200 hover:bg-cyan-500 flex items-center justify-center text-gray-700 hover:text-white transition-all"
                                target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-instagram text-xs"></i>
                            </a>
                        </div>
                    </center>
                </div>

                <!-- 2. Irma Amalia -->
                <div class="animate-fade-in-up opacity-0 delay-2 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/irma-amalia.jpeg') }}" alt="Irma Amalia"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300">
                        </div>
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Irma Amalia</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">PIC Swipe Safe</p>
                        <div class="flex gap-3 justify-center">
                            <a href="https://www.instagram.com/amlirma?igsh=ZHVucDd2MGdlanJj"
                                class="w-8 h-8 rounded-full bg-gray-200 hover:bg-cyan-500 flex items-center justify-center text-gray-700 hover:text-white transition-all"
                                target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-instagram text-xs"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/irma-amalia-3020a0203"
                                class="w-8 h-8 rounded-full bg-gray-200 hover:bg-cyan-500 flex items-center justify-center text-gray-700 hover:text-white transition-all"
                                target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-linkedin-in text-xs"></i>
                            </a>
                        </div>
                    </center>
                </div>

                <!-- 3. Risma Putri Supriyanto (tidak ingin sosmed) -->
                <div class="animate-fade-in-up opacity-0 delay-3 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/risma-putri-supriyanto.jpeg') }}" alt="Risma Putri Supriyanto"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300">
                        </div>
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Risma Putri Supriyanto</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">Admin Cluster &amp; BHS</p>
                    </center>
                </div>

                <!-- 4. Indah Novita Sari -->
                <div class="animate-fade-in-up opacity-0 delay-1 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/indah-novita-sari.jpg') }}" alt="Indah Novita Sari"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300">
                        </div>
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Indah Novita Sari</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">Monitoring dan Evaluasi (M&amp;E)</p>
                        <div class="flex gap-3 justify-center">
                            <a href="https://www.linkedin.com/in/indah-novita-sari-045825161/"
                                class="w-8 h-8 rounded-full bg-gray-200 hover:bg-cyan-500 flex items-center justify-center text-gray-700 hover:text-white transition-all"
                                target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-linkedin-in text-xs"></i>
                            </a>
                        </div>
                    </center>
                </div>

                <!-- 5. Emi Lestari -->
                <div class="animate-fade-in-up opacity-0 delay-2 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/emi-lestari.jpg') }}" alt="Emi Lestari"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300">
                        </div>
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Emi Lestari</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">Koordinator Komisi BHS</p>
                    </center>
                </div>

                <!-- 6. Sumarni -->
                <div class="animate-fade-in-up opacity-0 delay-3 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/sumarni.jpg') }}" alt="Sumarni"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300">
                        </div>
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Sumarni</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">Koordinator Komisi BHS</p>
                    </center>
                </div>

                <!-- 7. Lusiana Dewi Fibriantin -->
                <div class="animate-fade-in-up opacity-0 delay-1 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/lusiana-dewi-fibriantin.jpg') }}" alt="Lusiana Dewi Fibriantin"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300">
                        </div>
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Lusiana Dewi Fibriantin</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">Koordinator Komisi BHS</p>
                    </center>
                </div>

                <!-- 8. Yeni Rahayu Kasmawati -->
                <div class="animate-fade-in-up opacity-0 delay-2 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/yeni-rahayu-kasmawati.jpg') }}" alt="Yeni Rahayu Kasmawati"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300">
                        </div>
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Yeni Rahayu Kasmawati</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">Koordinator Komisi BHS</p>
                    </center>
                </div>

                <!-- 9. Zulfikar Lintang Nuswantoro -->
                <div class="animate-fade-in-up opacity-0 delay-3 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/zulfikar-lintang-nuswantoro.jpg') }}" alt="Zulfikar Lintang Nuswantoro"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300">
                        </div>
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Zulfikar Lintang Nuswantoro</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">
                            PIC Program Education for Protection and Wellbeing
                        </p>
                        <div class="flex gap-3 justify-center">
                            <a href="https://www.linkedin.com/in/zulfikar-lintang-228469147"
                                class="w-8 h-8 rounded-full bg-gray-200 hover:bg-cyan-500 flex items-center justify-center text-gray-700 hover:text-white transition-all"
                                target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-linkedin-in text-xs"></i>
                            </a>
                        </div>
                    </center>
                </div>

                <!-- 10. Mahya Agfiyani -->
                <div class="animate-fade-in-up opacity-0 delay-1 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/mahya-agfiyani.jpg') }}" alt="Mahya Agfiyani"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300">
                        </div>
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Mahya Agfiyani</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">PIC Program Livelihood</p>
                        <div class="flex gap-3 justify-center">
                            <a href="https://id.linkedin.com/in/mahyaagf"
                                class="w-8 h-8 rounded-full bg-gray-200 hover:bg-cyan-500 flex items-center justify-center text-gray-700 hover:text-white transition-all"
                                target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-linkedin-in text-xs"></i>
                            </a>
                        </div>
                    </center>
                </div>

                <!-- 11. Riska Anggraeni Putri -->
                <div class="animate-fade-in-up opacity-0 delay-2 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/riska-anggraeni-putri.jpg') }}" alt="Riska Anggraeni Putri"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300">
                        </div>
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Riska Anggraeni Putri</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">PIC Program Health</p>
                    </center>
                </div>

                <!-- 12. Fera Wijayanti -->
                <div class="animate-fade-in-up opacity-0 delay-3 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/fera-wijayanti.jpg') }}" alt="Fera Wijayanti"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300">
                        </div>
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Fera Wijayanti</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">Kasir</p>
                    </center>
                </div>

                <!-- 13. Agung Baskoro Prahardian -->
                <!-- <div class="animate-fade-in-up opacity-0 delay-1 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/agung-baskoro-prahardian.jpg') }}" alt="Agung Baskoro Prahardian"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300">
                        </div>
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Agung Baskoro Prahardian</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">Koordinator Keuangan</p>
                    </center>
                </div> -->

                <!-- 14. Dyah Sri Purwaniwati -->
                <div class="animate-fade-in-up opacity-0 delay-2 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/dyah-sri-purwaniwati.jpg') }}" alt="Dyah Sri Purwaniwati"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300">
                        </div>
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Dyah Sri Purwaniwati, SP, S.Pd.AUD</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">Monitoring dan Evaluasi (M&amp;E)</p>
                    </center>
                </div>

                <!-- 15. Rachel Tika Aristiani -->
                <div class="animate-fade-in-up opacity-0 delay-3 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/rachel-tika-aristiani.jpg') }}" alt="Rachel Tika Aristiani"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300">
                        </div>
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Rachel Tika Aristiani</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">Assistant M&amp;E</p>
                    </center>
                </div>

                <!-- 17. Anggela Putri Puspita -->
                <div class="animate-fade-in-up opacity-0 delay-2 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/anggela-putri-puspita.jpg') }}" alt="Anggela Putri Puspita"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300">
                        </div>
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Anggela Putri Puspita</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">PIC Learning</p>
                    </center>
                </div>

                <!-- 18. Parwati Handayani -->
                <div class="animate-fade-in-up opacity-0 delay-3 group">
                    <div class="mb-6 relative overflow-hidden rounded-2xl h-64 md:h-72">
                        <img src="{{ asset('img/parwati-handayani.jpg') }}" alt="Parwati Handayani"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300">
                        </div>
                    </div>
                    <center>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Parwati Handayani</h3>
                        <p class="text-sm text-cyan-600 font-semibold mb-4">PIC Learning</p>
                    </center>
                </div>

            </div>

        </div>
    </section>

    @include('halaman_depan.components.footer')

    <!-- Styles (tambahkan ke head atau style tag yang sudah ada) -->
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