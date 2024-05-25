<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            EmployeeSeeder::class,
            LocationSeeder::class,
            StudioSeeder::class,
            MovieSeeder::class,
            SeatsSeeder::class,
            ScreeningSeeder::class,
            OffersSeeder::class,
            OrdersSeeder::class,
            OrderDetailsSeeder::class,
            TopupSeeder::class,
        ]);
    }
}
