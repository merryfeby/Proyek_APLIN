<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopUpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('topup')->insert([
            ['customer' => 'user', 'method' => 'OVO', 'amount' => 100000, 'transdate' => '2024-05-05 21:42:50', 'status' => 1,],
        ]);
    }
}
