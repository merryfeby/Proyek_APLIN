<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employee')->insert([
            ['username' => 'emp', 'password' => 'emp', 'name' => 'Employee 1', 'status' => 1, 'updated_at' => '2024-05-24 13:04:32', 'created_at' => '2024-05-24 13:04:32'],
            ['username' => 'rap', 'password' => 'rap', 'name' => 'rap', 'status' => 1, 'updated_at' => '2024-05-06 07:46:27', 'created_at' => '2024-05-06 07:46:27'],
            ['username' => 'tino', 'password' => 'tino', 'name' => 'tino', 'status' => 1, 'updated_at' => '2024-05-06 02:31:47', 'created_at' => '2024-05-06 02:31:47'],
        ]);
    }
}
