<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newsItems = [
            [
                'title' => 'Community Clean-Up Event Success',
                'description' => 'Our recent community clean-up event was a huge success, with over 100 volunteers participating to make our neighborhood cleaner and greener.',
                'from_news' => 'Local News Network',
                'datetime_news' => '2025-11-15 10:00:00',
                'image_backdrop' => 'cleanup_event.jpg',
            ],
            [
                'title' => 'New Library Opens Downtown',
                'description' => 'A new state-of-the-art library has opened in the downtown area, offering a wide range of resources and programs for all ages.',
                'from_news' => 'City Herald',
                'datetime_news' => '2025-11-20 09:30:00',
                'image_backdrop' => 'new_library.jpg',
            ],
            [
                'title' => 'Tech Workshop for Seniors Announced',
                'description' => 'A free tech workshop for seniors is being offered next month to help them navigate modern technology and stay connected with loved ones.',
                'from_news' => 'Senior Times',
                'datetime_news' => '2025-11-25 14:00:00',
                'image_backdrop' => 'tech_workshop.jpg',
            ],
             [
                'title' => 'Community Clean-Up Event Success',
                'description' => 'Our recent community clean-up event was a huge success, with over 100 volunteers participating to make our neighborhood cleaner and greener.',
                'from_news' => 'Local News Network',
                'datetime_news' => '2025-11-15 10:00:00',
                'image_backdrop' => 'cleanup_event.jpg',
            ],
            [
                'title' => 'New Library Opens Downtown',
                'description' => 'A new state-of-the-art library has opened in the downtown area, offering a wide range of resources and programs for all ages.',
                'from_news' => 'City Herald',
                'datetime_news' => '2025-11-20 09:30:00',
                'image_backdrop' => 'new_library.jpg',
            ],
            [
                'title' => 'Tech Workshop for Seniors Announced',
                'description' => 'A free tech workshop for seniors is being offered next month to help them navigate modern technology and stay connected with loved ones.',
                'from_news' => 'Senior Times',
                'datetime_news' => '2025-11-25 14:00:00',
                'image_backdrop' => 'tech_workshop.jpg',
            ],
             [
                'title' => 'Community Clean-Up Event Success',
                'description' => 'Our recent community clean-up event was a huge success, with over 100 volunteers participating to make our neighborhood cleaner and greener.',
                'from_news' => 'Local News Network',
                'datetime_news' => '2025-11-15 10:00:00',
                'image_backdrop' => 'cleanup_event.jpg',
            ],
            [
                'title' => 'New Library Opens Downtown',
                'description' => 'A new state-of-the-art library has opened in the downtown area, offering a wide range of resources and programs for all ages.',
                'from_news' => 'City Herald',
                'datetime_news' => '2025-11-20 09:30:00',
                'image_backdrop' => 'new_library.jpg',
            ],
            [
                'title' => 'Tech Workshop for Seniors Announced',
                'description' => 'A free tech workshop for seniors is being offered next month to help them navigate modern technology and stay connected with loved ones.',
                'from_news' => 'Senior Times',
                'datetime_news' => '2025-11-25 14:00:00',
                'image_backdrop' => 'tech_workshop.jpg',
            ],
             [
                'title' => 'Community Clean-Up Event Success',
                'description' => 'Our recent community clean-up event was a huge success, with over 100 volunteers participating to make our neighborhood cleaner and greener.',
                'from_news' => 'Local News Network',
                'datetime_news' => '2025-11-15 10:00:00',
                'image_backdrop' => 'cleanup_event.jpg',
            ],
            [
                'title' => 'New Library Opens Downtown',
                'description' => 'A new state-of-the-art library has opened in the downtown area, offering a wide range of resources and programs for all ages.',
                'from_news' => 'City Herald',
                'datetime_news' => '2025-11-20 09:30:00',
                'image_backdrop' => 'new_library.jpg',
            ],
            [
                'title' => 'Tech Workshop for Seniors Announced',
                'description' => 'A free tech workshop for seniors is being offered next month to help them navigate modern technology and stay connected with loved ones.',
                'from_news' => 'Senior Times',
                'datetime_news' => '2025-11-25 14:00:00',
                'image_backdrop' => 'tech_workshop.jpg',
            ],
             [
                'title' => 'Community Clean-Up Event Success',
                'description' => 'Our recent community clean-up event was a huge success, with over 100 volunteers participating to make our neighborhood cleaner and greener.',
                'from_news' => 'Local News Network',
                'datetime_news' => '2025-11-15 10:00:00',
                'image_backdrop' => 'cleanup_event.jpg',
            ],
            [
                'title' => 'New Library Opens Downtown',
                'description' => 'A new state-of-the-art library has opened in the downtown area, offering a wide range of resources and programs for all ages.',
                'from_news' => 'City Herald',
                'datetime_news' => '2025-11-20 09:30:00',
                'image_backdrop' => 'new_library.jpg',
            ],
            [
                'title' => 'Tech Workshop for Seniors Announced',
                'description' => 'A free tech workshop for seniors is being offered next month to help them navigate modern technology and stay connected with loved ones.',
                'from_news' => 'Senior Times',
                'datetime_news' => '2025-11-25 14:00:00',
                'image_backdrop' => 'tech_workshop.jpg',
            ],
        ];

        foreach($newsItems as $news){
            News::create($news);
        }
    }
}
