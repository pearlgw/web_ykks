<?php

namespace Database\Seeders;

use App\Models\Content;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contents = [
            [
                'title' => 'Exploring the Future of Artificial Intelligence',
                'description' => 'Artificial Intelligence (AI) continues to evolve rapidly, transforming industries and redefining how humans interact with technology. From automation to predictive analytics, AI offers endless possibilities. However, with great power comes great responsibility, and it is essential to ensure ethical practices in its development and deployment.',
                'user_id' => rand(2, 3),
            ],
            [
                'title' => 'Building Scalable Web Applications with Laravel',
                'description' => 'Laravel has become one of the most popular PHP frameworks due to its elegant syntax and powerful ecosystem. Developers can easily build scalable and maintainable web applications by leveraging features like Eloquent ORM, Blade templating, and robust authentication. The framework also integrates well with tools like Livewire and Inertia for modern web experiences.',
                'user_id' => rand(2, 3),
            ],
            [
                'title' => 'The Importance of Cybersecurity in the Digital Age',
                'description' => 'In today’s interconnected world, cybersecurity plays a crucial role in protecting data, privacy, and digital assets. Organizations must adopt proactive measures such as encryption, regular audits, and employee training to prevent cyberattacks. As threats become more sophisticated, continuous innovation in security technology is essential.',
                'user_id' => rand(2, 3),
            ],
            [
                'title' => 'Why Developers Should Learn Docker and Containers',
                'description' => 'Docker revolutionized software development by making it easy to package, deploy, and run applications in isolated environments called containers. Developers who understand Docker gain better control over dependencies and can ensure consistent behavior across multiple environments — from local development to production servers.',
                'user_id' => rand(2, 3),
            ],
            [
                'title' => 'Mastering Version Control with Git and GitHub',
                'description' => 'Version control systems like Git are indispensable for modern developers. They allow teams to collaborate efficiently, track changes, and manage project versions seamlessly. GitHub, being the most popular platform for hosting repositories, also provides features like pull requests, issues, and actions to enhance development workflows.',
                'user_id' => rand(2, 3),
            ],
            [
                'title' => 'The Rise of Remote Work and Its Impact on Productivity',
                'description' => 'Remote work has shifted from being a temporary solution to a long-term trend that reshapes how organizations operate. While it offers flexibility and work-life balance, it also introduces challenges in communication, collaboration, and mental health. Companies must invest in digital tools and inclusive culture to maintain productivity.',
                'user_id' => rand(2, 3),
            ],
            [
                'title' => 'Understanding RESTful API Design Principles',
                'description' => 'RESTful APIs are the backbone of modern web and mobile applications. They enable smooth communication between client and server through standard HTTP methods. A well-designed API should be consistent, predictable, and easy to understand. Developers must also handle errors gracefully and include proper documentation.',
                'user_id' => rand(2, 3),
            ],
            [
                'title' => 'The Power of Open Source Communities',
                'description' => 'Open source has fueled innovation by allowing developers worldwide to collaborate freely on shared projects. These communities not only produce high-quality software but also foster learning, mentorship, and networking. Contributing to open source can significantly improve a developer’s skills and professional growth.',
                'user_id' => rand(2, 3),
            ],
            [
                'title' => 'How Machine Learning is Changing Everyday Life',
                'description' => 'Machine learning, a subset of AI, powers many of the tools and services we use daily — from recommendation systems to voice assistants. It works by analyzing data patterns and improving over time without explicit programming. As models become more advanced, ethical considerations like bias and transparency become critical.',
                'user_id' => rand(2, 3),
            ],
            [
                'title' => 'A Beginner’s Guide to Cloud Computing',
                'description' => 'Cloud computing allows businesses and developers to access computing resources on demand without owning physical infrastructure. Services like AWS, Google Cloud, and Azure offer scalable solutions for storage, computation, and networking. Understanding the cloud is now a fundamental skill for developers and IT professionals.',
                'user_id' => rand(2, 3),
            ],
            [
                'title' => 'Optimizing Web Performance for Better User Experience',
                'description' => 'Website performance directly affects user satisfaction and search engine ranking. Techniques like image optimization, caching, and lazy loading can significantly improve load times. Developers must also focus on minimizing JavaScript bloat and using modern frameworks efficiently to create fast and responsive interfaces.',
                'user_id' => rand(2, 3),
            ],
            [
                'title' => 'Embracing Continuous Integration and Deployment (CI/CD)',
                'description' => 'CI/CD pipelines automate the process of testing, building, and deploying applications. This approach reduces human error and accelerates delivery. With tools like GitHub Actions, Jenkins, and GitLab CI, developers can ensure that every code change is verified and deployed consistently across environments.',
                'user_id' => rand(2, 3),
            ],
        ];

        foreach ($contents as $content) {
            Content::create($content);
        }
    }
}
