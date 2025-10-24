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
                'title' => 'Program Literasi Digital untuk Pelajar',
                'description' => 'Kegiatan ini bertujuan untuk meningkatkan pemahaman pelajar terhadap literasi digital, terutama dalam penggunaan internet yang sehat, aman, dan produktif. Peserta akan diberikan pelatihan dasar mengenai keamanan digital, privasi data, serta cara memanfaatkan teknologi untuk pembelajaran dan kreativitas. Program ini juga menghadirkan narasumber dari praktisi IT dan guru yang berpengalaman dalam bidang pendidikan digital. Selain sesi materi, peserta juga akan mengikuti praktik langsung membuat konten edukatif. Diharapkan setelah mengikuti program ini, peserta mampu lebih bijak dalam menggunakan media sosial, memahami etika digital, dan mampu beradaptasi dengan perkembangan teknologi yang terus berubah dengan cepat di era modern.',
                'location' => 'Universitas Dian Nuswantoro, Semarang',
                'datetime_project' => now()->addDays(3),
                'participant_count' => rand(30, 100),
                'image_backdrop' => null,
                'user_id' => 2,
                'program_id' => 1,
            ],
            [
                'title' => 'Workshop Inovasi dan Teknologi Ramah Lingkungan',
                'description' => 'Workshop ini dirancang untuk mengajak peserta memahami pentingnya inovasi yang berkelanjutan dalam menjaga lingkungan. Kegiatan ini menggabungkan teori dan praktik dengan menghadirkan pembicara dari kalangan akademisi dan pelaku industri teknologi hijau. Peserta akan mempelajari cara membuat prototipe alat sederhana berbasis energi terbarukan, seperti panel surya mini dan sistem daur ulang air otomatis. Tujuan utama kegiatan ini adalah menumbuhkan kesadaran terhadap isu lingkungan dan mendorong generasi muda untuk menciptakan solusi inovatif yang ramah lingkungan. Melalui kegiatan ini, diharapkan lahir ide-ide baru yang dapat diterapkan dalam kehidupan sehari-hari untuk mendukung program pemerintah dalam pengurangan emisi karbon dan pelestarian alam.',
                'location' => 'Balai Desa Sukorejo, Kendal',
                'datetime_project' => now()->addDays(7),
                'participant_count' => rand(25, 80),
                'image_backdrop' => null,
                'user_id' => 3,
                'program_id' => 2,
            ],
            [
                'title' => 'Pelatihan Dasar Pemrograman untuk Pemuda Desa',
                'description' => 'Pelatihan ini diselenggarakan untuk membantu pemuda desa memahami dasar-dasar pemrograman dan pemanfaatan teknologi informasi dalam bidang kewirausahaan. Selama kegiatan, peserta akan belajar mengenai logika pemrograman, pengenalan bahasa Python dan PHP, serta praktik membuat aplikasi sederhana berbasis web. Kegiatan ini juga memberikan wawasan tentang peluang kerja di dunia digital dan pentingnya literasi teknologi di era globalisasi. Selain itu, pelatihan ini akan mendorong peserta untuk mengembangkan ide kreatif yang dapat bermanfaat bagi masyarakat sekitar. Harapannya, setelah mengikuti pelatihan ini, para peserta mampu meningkatkan kemampuan digital mereka dan dapat berkontribusi dalam pengembangan ekonomi desa melalui pemanfaatan teknologi informasi.',
                'location' => 'Gedung Serbaguna Desa Kalongan, Ungaran',
                'datetime_project' => now()->addDays(10),
                'participant_count' => rand(20, 60),
                'image_backdrop' => null,
                'user_id' => 2,
                'program_id' => 3,
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
