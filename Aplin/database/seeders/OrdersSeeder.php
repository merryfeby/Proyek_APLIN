<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([
            ['orderNumber' => 2, 'screeningID' => 1, 'offerID' => NULL, 'customer' => 'user', 'employee' => 'emp', 'created_at' => '2024-05-05 21:46:46', 'subtotal' => 80000, 'grandtotal' => 80000, 'status' => 1],
        ]);
    }
}
