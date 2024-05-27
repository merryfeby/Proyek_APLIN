<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movie')->insert([
            ['id' => 1, 'title' => 'Elemental', 'duration' => 120, 'cast' => 'Jennifer Lawrence as Ember, Chris Pratt as Terra, Zendaya as Aqua, and Tom Holland as Zephyr', 'producer' => 'Pixar', 'director' => 'John Lasseter and Pete Docter', 'poster' => 'https://upload.wikimedia.org/wikipedia/id/7/7a/Elemental-_Force_of_Nature_poster_Indonesia.jpg', 'genre' => 'Kids', 'status' => 1, 'synopsis' => '\"Elemental\" follows the journey of Ember, a spirited young fire sprite, who embarks on a quest to restore balance to the world when the elemental forces of nature start to unravel. Alongside her newfound friends, Terra, an earth guardian, Aqua, a water ny', 'license' => 1, 'licensed_at' => '2024-05-25 19:21:31'],
            ['id' => 2, 'title' => 'How to Make Millions Before Grandma Dies', 'duration' => 126, 'cast' => 'Putthipong Assaratanakul, Tontawan Tantivejakul, Usha Seamkhum, Sarinrat Thomas, Sanya Kunakorn, Pongsatorn Jongwilas, Himawari Tajiri', 'producer' => 'Jira Maligool', 'director' => 'Pat Boonnitipat', 'poster' => 'https://asset.tix.id/wp-content/uploads/2024/05/0ae91767-957f-476b-a433-028aba02e6f2.webp', 'genre' => 'Drama', 'status' => 1, 'synopsis' => 'A man quits work to care for dying grandmother, motivated by her fortune. He schemes to win her favor before she passes.', 'license' => 0, 'licensed_at' => '2024-05-25 19:21:31'],
        ]);
    }
}
