<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OffersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('offers')->insert([
            ['id' => 1, 'code' => 'AYONOBAR', 'discount' => 10, 'max_trans' => 200000, 'status' => 1],
            ['id' => 2, 'code' => 'NONTONMURAH', 'discount' => 5, 'max_trans' => 50000, 'status' => 0],
        ]);
    }
}
