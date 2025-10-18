<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacts = [
            ['name' => 'Agus', 'email' => 'agus@gmail.com', 'message' => 'Good job!'],
            ['name' => 'Budi Santoso', 'email' => 'budi.santoso@example.com', 'message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia impedit inventore eaque quis aliquam, vel corporis reprehenderit sit eos libero obcaecati recusandae harum quisquam dicta unde et eveniet, aliquid vitae quo, fugit dignissimos adipisci odit. Odit suscipit omnis, aspernatur, tempora minus laudantium, ducimus consequuntur adipisci sit assumenda vitae? Voluptate, vel, at, ab et dolorum laboriosam ad iste nostrum necessitatibus quisquam adipisci quaerat iusto est id sapiente architecto eos voluptatum amet aliquam assumenda. Sint, dicta maiores ea, optio error dolores velit ullam aliquam exercitationem facilis animi nihil blanditiis facere atque eum quibusdam, molestias quae! Repudiandae et magnam commodi voluptatibus est fugiat.'],
            ['name' => 'Citra Lestari', 'email' => 'citra.lestari@example.com', 'message' => 'Terima kasih sudah bantu saya.'],
            ['name' => 'Dewi Anggraini', 'email' => 'dewi.anggraini@example.com', 'message' => 'Suka banget sama tampilannya!'],
            ['name' => 'Eko Prasetyo', 'email' => 'eko.prasetyo@example.com', 'message' => 'Mantap hasil kerjanya.'],
            ['name' => 'Fajar Hidayat', 'email' => 'fajar.hidayat@example.com', 'message' => 'Proyeknya berjalan lancar, terima kasih!'],
            ['name' => 'Gita Permata', 'email' => 'gita.permata@example.com', 'message' => 'Sangat responsif dan profesional.'],
            ['name' => 'Hendra Wijaya', 'email' => 'hendra.wijaya@example.com', 'message' => 'Luar biasa, terus berkarya!'],
            ['name' => 'Intan Maharani', 'email' => 'intan.maharani@example.com', 'message' => 'Desainnya sangat modern.'],
            ['name' => 'Joko Purnomo', 'email' => 'joko.purnomo@example.com', 'message' => 'Pengalaman yang menyenangkan!'],
            ['name' => 'Kartika Sari', 'email' => 'kartika.sari@example.com', 'message' => 'Pelayanannya cepat dan ramah.'],
            ['name' => 'Lutfi Rahman', 'email' => 'lutfi.rahman@example.com', 'message' => 'Suka banget konsepnya.'],
            ['name' => 'Mega Safitri', 'email' => 'mega.safitri@example.com', 'message' => 'Terus tingkatkan kualitasnya ya!'],
            ['name' => 'Nanda Pratama', 'email' => 'nanda.pratama@example.com', 'message' => 'Semuanya berjalan lancar!'],
            ['name' => 'Oktavia Dewanti', 'email' => 'oktavia.dewanti@example.com', 'message' => 'Keren banget hasil akhirnya.'],
            ['name' => 'Putra Nugraha', 'email' => 'putra.nugraha@example.com', 'message' => 'Proyeknya selesai tepat waktu.'],
            ['name' => 'Qori Amalia', 'email' => 'qori.amalia@example.com', 'message' => 'Sangat puas dengan hasilnya.'],
            ['name' => 'Rizky Aditya', 'email' => 'rizky.aditya@example.com', 'message' => 'Desainnya simple tapi elegan.'],
            ['name' => 'Sinta Marlina', 'email' => 'sinta.marlina@example.com', 'message' => 'Fast response dan hasilnya bagus.'],
            ['name' => 'Teguh Saputra', 'email' => 'teguh.saputra@example.com', 'message' => 'Profesional dan terpercaya.'],
        ];

        foreach ($contacts as $contact) {
            Contact::create($contact);
        }
    }
}
