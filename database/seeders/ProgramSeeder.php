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
                'description' => 'Program ini membahas perkembangan terbaru dalam dunia kecerdasan buatan dan bagaimana AI akan membentuk masa depan industri teknologi.',
            ],
            [
                'title' => 'Digital Transformation for Modern Businesses',
                'description' => 'Pelatihan intensif untuk memahami konsep transformasi digital dan implementasinya pada bisnis skala kecil hingga enterprise.',
            ],
            [
                'title' => 'Web Development Bootcamp 2025',
                'description' => 'Program belajar full-stack web development menggunakan Laravel dan Next.js dari dasar hingga siap proyek nyata.',
            ],
            [
                'title' => 'Building Smart IoT Systems',
                'description' => 'Pelajari cara menghubungkan sensor dan perangkat cerdas dengan cloud menggunakan teknologi IoT modern.',
            ],
            [
                'title' => 'Creative Coding with JavaScript',
                'description' => 'Kelas ini mengajarkan konsep pemrograman kreatif dengan JavaScript untuk membuat animasi, interaksi web, dan karya seni digital.',
            ],
            [
                'title' => 'Cybersecurity Awareness Program',
                'description' => 'Program edukasi untuk meningkatkan kesadaran keamanan siber bagi pelajar dan profesional IT.',
            ],
            [
                'title' => 'Data Science Essentials',
                'description' => 'Pelatihan dasar dalam analisis data, visualisasi, dan pengenalan machine learning menggunakan Python dan Pandas.',
            ],
            [
                'title' => 'Mobile App Development with Flutter',
                'description' => 'Program praktikal untuk membangun aplikasi mobile lintas platform menggunakan framework Flutter.',
            ],
            [
                'title' => 'Tech Innovation Challenge 2025',
                'description' => 'Kompetisi terbuka bagi mahasiswa dan profesional muda untuk menciptakan solusi inovatif berbasis teknologi.',
            ],
            [
                'title' => 'Leadership in the Digital Era',
                'description' => 'Program pengembangan kepemimpinan modern dengan fokus pada strategi adaptasi di era digital.',
            ],
            [
                'title' => 'AI for Everyone',
                'description' => 'Kursus pengenalan AI yang ramah untuk pemula, tanpa perlu latar belakang teknis mendalam.',
            ],
            [
                'title' => 'Smart Waste Management Project',
                'description' => 'Program riset dan implementasi teknologi pintar untuk pengelolaan sampah berbasis machine learning dan IoT.',
            ],
            [
                'title' => 'Cloud Computing Fundamentals',
                'description' => 'Pelajari konsep dasar komputasi awan dan cara mengelola aplikasi di platform seperti AWS, GCP, dan Azure.',
            ],
        ];

        foreach ($programs as $program) {
            Program::create($program);
        }
    }
}
