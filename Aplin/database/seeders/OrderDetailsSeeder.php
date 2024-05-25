<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orderdetails')->insert([
            ['orderNumber' => 2, 'seatID' => 1, 'price' => 40000],
            ['orderNumber' => 2, 'seatID' => 2, 'price' => 40000],
        ]);
    }
}
