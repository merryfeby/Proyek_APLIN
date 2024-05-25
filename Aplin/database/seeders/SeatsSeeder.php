<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('seats')->insert([
            ['id' => 1, 'studioID' => 1, 'seatnumber' => '1', 'seatrow' => 'A'],
            ['id' => 2, 'studioID' => 1, 'seatnumber' => '2', 'seatrow' => 'A'],
            // Add the remaining seats similarly...
            ['id' => 60, 'studioID' => 3, 'seatnumber' => '10', 'seatrow' => 'B'],
        ]);
    }
}
