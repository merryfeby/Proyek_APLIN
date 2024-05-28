<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('location')->insert([
            ['id' => 1, 'location' => 'XXI Nganjuk', 'address' => 'Jl. Ngagel Jaya Tengah No.73-77, Baratajaya, Kec. Gubeng, Surabaya, Jawa Timur 60284']
        ]);
    }
}
