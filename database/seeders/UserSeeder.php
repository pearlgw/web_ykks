<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                "name" => "admin",
                "email" => "admin@gmail.com",
                "password" => bcrypt("password"),
                "role" => "admin"
            ],
            [
                "name" => "staff1",
                "email" => "staff1@gmail.com",
                "password" => bcrypt("password"),
                "role" => "staff"
            ],
            [
                "name" => "staff2",
                "email" => "staff2@gmail.com",
                "password" => bcrypt("password"),
                "role" => "staff"
            ],
            [
                "name" => "staff3",
                "email" => "staff3@gmail.com",
                "password" => bcrypt("password"),
                "role" => "staff"
            ],
            [
                "name" => "staff4",
                "email" => "staff4@gmail.com",
                "password" => bcrypt("password"),
                "role" => "staff"
            ],
            [
                "name" => "staff5",
                "email" => "staff5@gmail.com",
                "password" => bcrypt("password"),
                "role" => "staff"
            ],
            [
                "name" => "staff6",
                "email" => "staff6@gmail.com",
                "password" => bcrypt("password"),
                "role" => "staff"
            ],
            [
                "name" => "staff7",
                "email" => "staff7@gmail.com",
                "password" => bcrypt("password"),
                "role" => "staff"
            ],
            [
                "name" => "staff8",
                "email" => "staff8@gmail.com",
                "password" => bcrypt("password"),
                "role" => "staff"
            ],
            [
                "name" => "staff9",
                "email" => "staff9@gmail.com",
                "password" => bcrypt("password"),
                "role" => "staff"
            ],
            [
                "name" => "staff10",
                "email" => "staff10@gmail.com",
                "password" => bcrypt("password"),
                "role" => "staff"
            ],
            [
                "name" => "staff11",
                "email" => "staff11@gmail.com",
                "password" => bcrypt("password"),
                "role" => "staff"
            ],
            [
                "name" => "staff12",
                "email" => "staff12@gmail.com",
                "password" => bcrypt("password"),
                "role" => "staff"
            ],
            [
                "name" => "staff13",
                "email" => "staff13@gmail.com",
                "password" => bcrypt("password"),
                "role" => "staff"
            ],
            [
                "name" => "staff14",
                "email" => "staff14@gmail.com",
                "password" => bcrypt("password"),
                "role" => "staff"
            ],
            [
                "name" => "staff15",
                "email" => "staff15@gmail.com",
                "password" => bcrypt("password"),
                "role" => "staff"
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
