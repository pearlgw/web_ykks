<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $programs = [
            [
                'title' => 'Exploring the Future of Artificial Intelligence',
                'description' => 'Program ini membahas secara mendalam perkembangan terbaru dalam dunia kecerdasan buatan (Artificial Intelligence) dan bagaimana teknologi ini akan membentuk masa depan berbagai industri, mulai dari kesehatan, pendidikan, manufaktur, hingga hiburan. Peserta akan mempelajari konsep dasar AI, seperti machine learning, deep learning, dan natural language processing, disertai studi kasus penerapan nyata di perusahaan besar dunia. Selain itu, akan dibahas pula isu etika, keamanan data, serta dampak sosial dari implementasi AI dalam kehidupan sehari-hari. Program ini dirancang agar peserta dapat memahami potensi sekaligus risiko yang dibawa oleh kemajuan AI, serta bagaimana manusia dapat tetap relevan di tengah perkembangan teknologi yang pesat. Dengan pendekatan praktikal dan interaktif, peserta juga diajak membuat mini proyek berbasis AI sederhana.',
            ],
            [
                'title' => 'Digital Transformation for Modern Businesses',
                'description' => 'Pelatihan ini dirancang untuk membantu para pemilik bisnis dan profesional memahami konsep transformasi digital secara komprehensif. Peserta akan belajar tentang penerapan teknologi dalam meningkatkan efisiensi operasional, memperkuat hubungan pelanggan, dan memperluas jangkauan pasar. Materi meliputi pengenalan terhadap cloud computing, analitik data, automasi proses bisnis, serta strategi pemasaran digital berbasis data. Selain itu, program ini menyoroti pentingnya perubahan budaya organisasi agar mampu beradaptasi dengan disrupsi digital. Peserta juga akan mendapatkan sesi simulasi implementasi digital roadmap untuk bisnis kecil, menengah, dan besar. Dengan pendekatan berbasis studi kasus, pelatihan ini memberikan wawasan nyata tentang bagaimana perusahaan sukses di era digital mampu bertahan dan berkembang.',
            ],
            [
                'title' => 'Web Development Bootcamp 2025',
                'description' => 'Bootcamp ini merupakan pelatihan intensif full-stack web development menggunakan Laravel, React, dan Next.js. Peserta akan belajar mulai dari dasar HTML, CSS, dan JavaScript, hingga membangun aplikasi web yang kompleks dengan backend yang aman dan performa tinggi. Setiap peserta akan membuat proyek nyata seperti website portofolio, sistem manajemen data, hingga e-commerce sederhana. Program ini juga memperkenalkan konsep DevOps dasar, termasuk version control dengan Git dan deployment menggunakan Docker. Selain materi teknis, bootcamp ini memberikan mentoring terkait praktik kerja profesional di industri IT. Dengan durasi pelatihan selama beberapa minggu, peserta akan memiliki kemampuan yang solid untuk memulai karier sebagai web developer profesional.',
            ],
            [
                'title' => 'Building Smart IoT Systems',
                'description' => 'Program ini mengajak peserta untuk memahami cara membangun sistem Internet of Things (IoT) yang efisien dan cerdas. Peserta akan mempelajari arsitektur IoT, komunikasi antar perangkat, serta integrasi dengan cloud computing. Materi praktikum mencakup penggunaan sensor, mikrokontroler seperti Arduino dan ESP32, hingga pemrograman untuk mengirim dan menganalisis data sensor secara real-time. Selain aspek teknis, peserta juga dibekali dengan wawasan tentang keamanan IoT dan etika dalam pengumpulan data pengguna. Program ini cocok bagi mahasiswa teknik, pengembang software, maupun penggiat teknologi yang ingin menciptakan solusi pintar di bidang pertanian, energi, kesehatan, atau transportasi. Di akhir sesi, peserta akan membangun proyek akhir berupa sistem pemantauan lingkungan berbasis IoT.',
            ],
            [
                'title' => 'Creative Coding with JavaScript',
                'description' => 'Kelas ini mengajarkan peserta cara berkreasi menggunakan JavaScript untuk membuat animasi interaktif, visualisasi data, hingga karya seni digital. Peserta akan mengenal pustaka populer seperti p5.js dan Three.js yang digunakan untuk menciptakan efek visual dan pengalaman pengguna yang menarik di web. Program ini menekankan pada eksplorasi ide, estetika, dan ekspresi kreatif melalui kode. Selain itu, peserta juga akan mempelajari dasar-dasar logika pemrograman, manipulasi DOM, serta pengelolaan event di browser. Setiap sesi diakhiri dengan proyek mini yang mendorong peserta untuk bereksperimen dan mengekspresikan kreativitasnya secara bebas. Kelas ini sangat cocok bagi desainer, seniman digital, maupun pemula yang ingin belajar ngoding dengan cara yang menyenangkan.',
            ],
            [
                'title' => 'Cybersecurity Awareness Program',
                'description' => 'Program ini bertujuan meningkatkan kesadaran masyarakat terhadap pentingnya keamanan siber di era digital. Peserta akan diajarkan mengenai ancaman umum seperti phishing, malware, social engineering, dan serangan siber lainnya yang dapat merugikan individu maupun organisasi. Melalui simulasi dan studi kasus, peserta akan belajar bagaimana melindungi data pribadi, mengenali serangan, serta menerapkan langkah pencegahan sederhana di perangkat mereka. Program juga menyoroti peran penting kebijakan keamanan informasi dan etika digital di dunia kerja. Dengan mengikuti program ini, diharapkan peserta menjadi lebih waspada dan memiliki kebiasaan digital yang lebih aman dalam kehidupan sehari-hari.',
            ],
            [
                'title' => 'Data Science Essentials',
                'description' => 'Pelatihan ini memperkenalkan peserta pada konsep dasar data science mulai dari pengumpulan, pembersihan, analisis, hingga visualisasi data. Peserta akan menggunakan Python dan pustaka populer seperti Pandas, NumPy, dan Matplotlib untuk menganalisis dataset nyata. Program ini juga mencakup pengenalan machine learning dasar, termasuk regresi linier dan klasifikasi sederhana. Selain aspek teknis, peserta akan belajar cara berpikir analitis dan mengubah data mentah menjadi informasi yang berguna untuk pengambilan keputusan. Pelatihan ini dirancang agar peserta memahami alur kerja data scientist dan siap mengembangkan keterampilan lebih lanjut di bidang analisis data profesional.',
            ],
            [
                'title' => 'Mobile App Development with Flutter',
                'description' => 'Program ini ditujukan bagi peserta yang ingin mempelajari cara membangun aplikasi mobile lintas platform menggunakan Flutter dan Dart. Peserta akan belajar mulai dari dasar UI widget, state management, hingga integrasi API. Program juga membahas deployment ke Google Play dan App Store. Dengan pendekatan praktikal, setiap peserta akan mengembangkan satu aplikasi lengkap sebagai proyek akhir. Selain aspek teknis, peserta juga akan mendapatkan wawasan mengenai desain antarmuka pengguna (UI/UX) dan praktik terbaik dalam pengembangan aplikasi mobile modern. Setelah mengikuti program ini, peserta diharapkan mampu membuat aplikasi fungsional dan responsif dengan performa tinggi.',
            ],
            [
                'title' => 'Tech Innovation Challenge 2025',
                'description' => 'Kompetisi ini dirancang untuk mendorong generasi muda agar menciptakan solusi inovatif berbasis teknologi. Peserta akan dibagi dalam tim dan ditantang untuk mengembangkan produk digital yang mampu memecahkan masalah sosial di masyarakat. Program ini terdiri dari serangkaian workshop, mentoring, dan sesi pitching di depan juri profesional dari industri teknologi. Tema besar kompetisi mencakup isu lingkungan, pendidikan, kesehatan, dan ekonomi kreatif. Selain hadiah menarik, peserta juga berkesempatan mendapatkan inkubasi startup dan networking dengan investor. Acara ini menjadi wadah bagi inovator muda untuk menunjukkan potensi dan kontribusi nyata mereka terhadap pembangunan berkelanjutan.',
            ],
            [
                'title' => 'Leadership in the Digital Era',
                'description' => 'Pelatihan ini dirancang untuk melatih kemampuan kepemimpinan modern yang adaptif terhadap perubahan teknologi. Peserta akan belajar tentang gaya kepemimpinan transformasional, komunikasi efektif, dan manajemen tim virtual. Program ini menekankan pentingnya empati, kolaborasi lintas generasi, serta penggunaan teknologi untuk memperkuat strategi organisasi. Melalui studi kasus dan simulasi, peserta akan dilatih menghadapi tantangan nyata dalam memimpin di era digital. Selain itu, peserta akan mendapatkan sesi khusus mengenai personal branding dan pengembangan karier di lingkungan kerja yang dinamis dan berbasis data.',
            ],
            [
                'title' => 'AI for Everyone',
                'description' => 'Kursus ini memperkenalkan konsep kecerdasan buatan kepada peserta dari berbagai latar belakang, tanpa memerlukan kemampuan pemrograman. Peserta akan memahami bagaimana AI bekerja, apa saja aplikasinya dalam kehidupan sehari-hari, dan bagaimana cara memanfaatkan AI secara etis dan bertanggung jawab. Melalui kombinasi video pembelajaran, studi kasus, dan diskusi interaktif, peserta akan diajak untuk berpikir kritis tentang dampak sosial dari otomatisasi dan penggunaan algoritma dalam pengambilan keputusan. Kursus ini sangat cocok untuk profesional, pendidik, dan mahasiswa yang ingin memahami dasar AI secara praktis tanpa aspek teknis yang kompleks.',
            ],
            [
                'title' => 'Smart Waste Management Project',
                'description' => 'Program ini berfokus pada penerapan teknologi pintar untuk pengelolaan sampah yang lebih efisien dan berkelanjutan. Peserta akan belajar tentang integrasi sensor IoT, machine learning untuk klasifikasi sampah, dan sistem monitoring berbasis web. Selain aspek teknis, program juga mengajarkan pendekatan sosial-ekologis dalam pengelolaan limbah. Tujuannya adalah menciptakan solusi nyata yang membantu pemerintah dan masyarakat dalam mengurangi volume sampah dan meningkatkan daur ulang. Melalui proyek kolaboratif, peserta akan menghasilkan prototipe sistem yang mampu mendeteksi, mengelompokkan, dan memberikan rekomendasi pengelolaan sampah secara otomatis.',
            ],
            [
                'title' => 'Cloud Computing Fundamentals',
                'description' => 'Pelatihan ini memberikan pemahaman mendalam tentang konsep dasar komputasi awan dan penerapannya dalam pengelolaan sistem modern. Peserta akan mengenal berbagai model layanan cloud seperti IaaS, PaaS, dan SaaS serta memahami cara kerja penyimpanan data dan skalabilitas aplikasi di lingkungan cloud. Program ini juga mencakup latihan langsung menggunakan platform populer seperti AWS, Google Cloud, dan Azure. Dengan pendekatan berbasis proyek, peserta akan membangun aplikasi sederhana dan melakukan deployment ke cloud. Selain itu, dibahas pula aspek keamanan dan efisiensi biaya dalam pengelolaan infrastruktur cloud yang berkelanjutan.',
            ],
        ];

        foreach ($programs as $program) {
            Program::create($program);
        }
    }
}
