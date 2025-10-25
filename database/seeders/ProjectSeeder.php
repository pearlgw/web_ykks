<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Pelatihan Kewirausahaan Berbasis Teknologi untuk UMKM',
                'description' => 'Program ini bertujuan untuk membantu pelaku UMKM memahami pentingnya digitalisasi dalam pengelolaan usaha mereka. Peserta akan mendapatkan pelatihan dalam hal penggunaan media sosial untuk promosi, manajemen keuangan digital, serta pembuatan website sederhana untuk toko online. Selain itu, kegiatan ini akan menghadirkan praktisi bisnis digital yang akan berbagi pengalaman tentang strategi membangun brand di era industri 4.0. Diharapkan melalui pelatihan ini, pelaku UMKM mampu meningkatkan daya saing bisnis dan memperluas jangkauan pasar mereka dengan memanfaatkan teknologi secara efektif dan beretika.',
                'location' => 'Balai Pelatihan Industri, Semarang',
                'datetime_project' => now()->addDays(2),
                'participant_count' => 45,
                'image_backdrop' => null,
                'user_id' => 2,
                'program_id' => 1,
            ],
            [
                'title' => 'Gerakan Peduli Sampah Sekolah Hijau',
                'description' => 'Gerakan ini mengedukasi siswa mengenai pentingnya pengelolaan sampah dan pelestarian lingkungan. Peserta akan mengikuti berbagai kegiatan seperti workshop daur ulang, lomba inovasi eco-brick, serta pembentukan tim pelajar hijau yang bertugas menjaga kebersihan sekolah. Selain itu, program ini bekerja sama dengan dinas lingkungan hidup setempat untuk memberikan pembekalan teknis mengenai pengelolaan sampah organik dan anorganik. Tujuan utama kegiatan ini adalah menumbuhkan kesadaran lingkungan sejak dini serta membangun budaya cinta kebersihan di kalangan pelajar.',
                'location' => 'SMPN 2 Banyumanik, Semarang',
                'datetime_project' => now()->addDays(3),
                'participant_count' => 60,
                'image_backdrop' => null,
                'user_id' => 3,
                'program_id' => 2,
            ],
            [
                'title' => 'Seminar Nasional Literasi Finansial bagi Mahasiswa',
                'description' => 'Seminar ini membahas pentingnya literasi finansial di kalangan mahasiswa agar mampu mengelola keuangan secara bijak. Narasumber terdiri dari pakar ekonomi, praktisi perbankan, dan influencer keuangan muda. Peserta akan belajar bagaimana mengatur pengeluaran bulanan, berinvestasi sejak dini, hingga mengenal konsep financial freedom. Dalam sesi diskusi interaktif, mahasiswa dapat bertanya langsung terkait masalah keuangan pribadi. Harapannya, kegiatan ini dapat membantu generasi muda Indonesia menjadi lebih cerdas dan mandiri secara finansial.',
                'location' => 'Auditorium Gedung E Universitas Diponegoro',
                'datetime_project' => now()->addDays(5),
                'participant_count' => 120,
                'image_backdrop' => null,
                'user_id' => 4,
                'program_id' => 3,
            ],
            [
                'title' => 'Pelatihan Desain Grafis untuk Komunitas Pemuda Kreatif',
                'description' => 'Kegiatan ini memberikan pelatihan intensif dalam bidang desain grafis menggunakan perangkat lunak seperti Canva dan Adobe Illustrator. Peserta akan diajarkan teknik dasar desain, pembuatan logo, serta cara membuat konten visual untuk media sosial. Pelatihan ini ditujukan bagi pemuda yang ingin mengembangkan keterampilan kreatif dan berpotensi menjadi desainer profesional. Selain praktik, kegiatan ini juga menekankan pentingnya hak cipta dan etika dalam karya digital.',
                'location' => 'Coworking Space Dinus, Semarang',
                'datetime_project' => now()->addDays(6),
                'participant_count' => 40,
                'image_backdrop' => null,
                'user_id' => 5,
                'program_id' => 4,
            ],
            [
                'title' => 'Workshop Pengembangan Website untuk Pelajar SMK',
                'description' => 'Workshop ini dirancang untuk membekali pelajar SMK dengan keterampilan dasar dalam membuat website menggunakan HTML, CSS, dan Laravel. Peserta akan mengikuti sesi teori dan praktik langsung selama dua hari, dengan bimbingan mentor dari kalangan profesional. Tujuan kegiatan ini adalah memberikan bekal kemampuan teknis agar siswa siap bersaing di dunia kerja digital dan mampu membuat portofolio web yang menarik.',
                'location' => 'SMK N 5 Semarang',
                'datetime_project' => now()->addDays(8),
                'participant_count' => 35,
                'image_backdrop' => null,
                'user_id' => 6,
                'program_id' => 5,
            ],
            [
                'title' => 'Pelatihan Content Creator untuk Generasi Milenial',
                'description' => 'Program ini mengajarkan peserta cara membuat konten menarik di media sosial dengan pendekatan storytelling dan strategi digital marketing. Peserta akan diajarkan teknik editing video dasar, cara menulis caption efektif, serta etika publikasi online. Selain pelatihan, akan ada sesi evaluasi karya di mana peserta dapat mendapatkan masukan langsung dari mentor profesional.',
                'location' => 'Dinus Tower, Semarang',
                'datetime_project' => now()->addDays(10),
                'participant_count' => 50,
                'image_backdrop' => null,
                'user_id' => 7,
                'program_id' => 6,
            ],
            [
                'title' => 'Kampanye Sosial Anti Perundungan Digital',
                'description' => 'Kegiatan ini bertujuan untuk meningkatkan kesadaran masyarakat tentang bahaya perundungan digital dan dampaknya terhadap kesehatan mental. Peserta akan diajak memahami cara menangani kasus perundungan di dunia maya, serta bagaimana menciptakan ruang digital yang aman dan inklusif. Kampanye ini akan disebarkan melalui media sosial dan kegiatan offline di sekolah-sekolah dengan melibatkan siswa dan guru.',
                'location' => 'Kampus UNNES, Sekaran',
                'datetime_project' => now()->addDays(12),
                'participant_count' => 75,
                'image_backdrop' => null,
                'user_id' => 8,
                'program_id' => 7,
            ],
            [
                'title' => 'Pelatihan Digital Marketing untuk Komunitas Perempuan',
                'description' => 'Program ini ditujukan untuk membantu perempuan pelaku usaha rumahan memahami strategi pemasaran digital. Mereka akan diajarkan bagaimana menggunakan Instagram, TikTok, dan WhatsApp Business untuk memperluas jangkauan pasar. Selain itu, peserta juga akan mendapatkan pelatihan analisis data penjualan agar dapat membuat keputusan bisnis yang lebih efektif.',
                'location' => 'Kantor Kecamatan Tembalang',
                'datetime_project' => now()->addDays(13),
                'participant_count' => 55,
                'image_backdrop' => null,
                'user_id' => 9,
                'program_id' => 8,
            ],
            [
                'title' => 'Pelatihan IoT untuk Petani Cerdas',
                'description' => 'Pelatihan ini memperkenalkan teknologi Internet of Things (IoT) dalam dunia pertanian modern. Peserta akan belajar bagaimana menggunakan sensor untuk memantau kelembapan tanah, suhu, dan kualitas air secara otomatis. Dengan teknologi ini, petani dapat meningkatkan hasil panen dan efisiensi penggunaan sumber daya. Program ini juga mendorong lahirnya generasi petani muda yang adaptif terhadap perkembangan teknologi.',
                'location' => 'Balai Pertanian Kabupaten Demak',
                'datetime_project' => now()->addDays(14),
                'participant_count' => 30,
                'image_backdrop' => null,
                'user_id' => 10,
                'program_id' => 9,
            ],
            [
                'title' => 'Seminar Nasional Keamanan Siber',
                'description' => 'Seminar ini menghadirkan para pakar keamanan siber untuk membahas tren ancaman digital terkini dan cara melindungi data pribadi. Topik meliputi keamanan jaringan, enkripsi, serta penanggulangan serangan phishing. Peserta akan mendapatkan sertifikat resmi serta kesempatan mengikuti pelatihan lanjutan mengenai keamanan informasi. Kegiatan ini juga menjadi wadah bagi mahasiswa IT untuk berjejaring dengan profesional keamanan digital.',
                'location' => 'Auditorium Udinus',
                'datetime_project' => now()->addDays(15),
                'participant_count' => 100,
                'image_backdrop' => null,
                'user_id' => 11,
                'program_id' => 10,
            ],
            [
                'title' => 'Program Sosialisasi Penggunaan AI untuk Pendidikan',
                'description' => 'Kegiatan ini mengajak guru dan pelajar untuk memahami potensi serta etika penggunaan kecerdasan buatan (AI) dalam dunia pendidikan. Peserta akan dikenalkan dengan berbagai aplikasi AI seperti ChatGPT, Google Bard, dan tools edukasi berbasis AI yang dapat membantu proses belajar mengajar. Selain itu, kegiatan ini juga membahas potensi risiko misinformasi dan cara memanfaatkannya secara bertanggung jawab.',
                'location' => 'Gedung Serbaguna Dinas Pendidikan, Semarang',
                'datetime_project' => now()->addDays(16),
                'participant_count' => 80,
                'image_backdrop' => null,
                'user_id' => 12,
                'program_id' => 1,
            ],
            [
                'title' => 'Pelatihan Fotografi Digital untuk Remaja Kreatif',
                'description' => 'Program ini mengajarkan dasar-dasar fotografi digital bagi remaja, mulai dari teknik pengambilan gambar, komposisi, pencahayaan, hingga editing foto. Selain itu, peserta juga akan mengikuti kompetisi foto bertema lingkungan yang hasilnya akan dipamerkan di ruang publik. Tujuan kegiatan ini adalah mendorong kreativitas remaja sekaligus menumbuhkan kepedulian terhadap lingkungan sekitar.',
                'location' => 'Studio Dinus Creative, Semarang',
                'datetime_project' => now()->addDays(17),
                'participant_count' => 65,
                'image_backdrop' => null,
                'user_id' => 13,
                'program_id' => 1,
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
