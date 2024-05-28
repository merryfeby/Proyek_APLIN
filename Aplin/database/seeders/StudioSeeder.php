<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('studio')->insert([
            ['location' => 1, 'name' => 'BIND', 'capacity' => 20, 'status' => 1],
            ['location' => 1, 'name' => 'ASCENT', 'capacity' => 20, 'status' => 1],
            ['location' => 1, 'name' => 'LOTUS', 'capacity' => 20, 'status' => 0],
        ]);
    }
}
