<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user')->insert([
            ['username' => 'tes', 'password' => '$2y$12$h/TQEItCKroQxUytRRlrCurDK0P4MHTyMkakGeOwiTbph6SpI8Clm', 'email' => 'tes@gmail.com', 'telp' => '123123', 'balance' => 0, 'created_at' => '2024-05-22 18:07:10', 'updated_at' => '2024-05-22 18:07:10',],
            ['username' => 'user', 'password' => '$2y$12$UJdbo6QifPJOai3kEHOBS.9WDKEH90o0im6CUfXyog9GYSgLV1SwW', 'email' => 'user@gmail.com', 'telp' => '081234567890', 'balance' => 100000, 'created_at' => '2024-05-25 18:40:33', 'updated_at' => '2024-05-25 18:40:33',],
        ]);
    }
}
