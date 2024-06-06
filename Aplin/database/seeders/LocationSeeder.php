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
            ['id' => 1, 'location' => 'XXI Nganjuk', 'address' => 'Jl. Ngagel Jaya Tengah No.73-77, Baratajaya, Kec. Gubeng, Surabaya, Jawa Timur 60284'],
            ['id' => 2, 'location' => 'CGV Citywalk Surabaya', 'address'=> 'Tunjungan Plaza 6, Jl. Basuki Rahmat No.126, Bubutan, Kec. Bubutan, Kota Surabaya, Jawa Timur 60175'],
            ['id' => 3, 'location' => 'Cinepolis Pakuwon Mall', 'address'=> 'Jl. Ir. H. Soekarno No.156, Gn. Sekarmanunggal, Kec. Samben, Kota Surabaya, Jawa Timur 60231'],
            ['id' => 4, 'location' => 'IMAX Trans Studio Mall Surabaya', 'address'=> 'Jl. Siwalan Kertoadi No.31, Lidah Wetan, Kec. Lakarsari, Kota Surabaya, Jawa Timur 60117'],
            ['id' => 5, 'location' => 'XXI Ciputra World Surabaya', 'address'=> 'Jl. Mayjen Sungkono No.30-31, Gn. Anyar, Kec. Mulyorejo, Kota Surabaya, Jawa Timur 60193'],
        ]);
    }
}
