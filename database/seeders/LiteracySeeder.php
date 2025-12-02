<?php

namespace Database\Seeders;

use App\Models\LiteracyCorner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LiteracySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $literacies = [
            [
                'title' => 'The Joy of Reading',
                'description' => 'Exploring the benefits of reading for personal growth and development.',
                'file_pdf' => 'joy_of_reading.pdf',
                'image_backdrop' => 'reading1.jpg',
            ],
            [
                'title' => 'Digital Literacy in the Modern World',
                'description' => 'Understanding the importance of digital literacy in today\'s society.',
                'file_pdf' => 'digital_literacy.pdf',
                'image_backdrop' => 'digital1.jpg',
            ],
            [
                'title' => 'Promoting Literacy in Communities',
                'description' => 'Strategies and programs to enhance literacy rates in local communities.',
                'file_pdf' => 'community_literacy.pdf',
                'image_backdrop' => 'community1.jpg',
            ],
        ];

        foreach($literacies as $literacy){
            LiteracyCorner::create($literacy);
        }
    }
}
