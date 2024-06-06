<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    //pushed branch tino to main, but no record in history??
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('movie')->insert([
        //     ['id' => 1, 'title' => 'Elemental', 'duration' => 120, 'cast' => 'Jennifer Lawrence as Ember, Chris Pratt as Terra, Zendaya as Aqua, and Tom Holland as Zephyr', 'producer' => 'Pixar', 'director' => 'John Lasseter and Pete Docter', 'poster' => 'https://upload.wikimedia.org/wikipedia/id/7/7a/Elemental-_Force_of_Nature_poster_Indonesia.jpg', 'genre' => 'Kids', 'status' => 1, 'synopsis' => '\"Elemental\" follows the journey of Ember, a spirited young fire sprite, who embarks on a quest to restore balance to the world when the elemental forces of nature start to unravel. Alongside her newfound friends, Terra, an earth guardian, Aqua, a water ny', 'license' => 1, 'licensed_at' => '2024-05-25 19:21:31'],
        //     ['id' => 2, 'title' => 'How to Make Millions Before Grandma Dies', 'duration' => 126, 'cast' => 'Putthipong Assaratanakul, Tontawan Tantivejakul, Usha Seamkhum, Sarinrat Thomas, Sanya Kunakorn, Pongsatorn Jongwilas, Himawari Tajiri', 'producer' => 'Jira Maligool', 'director' => 'Pat Boonnitipat', 'poster' => 'https://asset.tix.id/wp-content/uploads/2024/05/0ae91767-957f-476b-a433-028aba02e6f2.webp', 'genre' => 'Drama', 'status' => 1, 'synopsis' => 'A man quits work to care for dying grandmother, motivated by her fortune. He schemes to win her favor before she passes.', 'license' => 0, 'licensed_at' => '2024-05-25 19:21:31'],
        // ]);
        DB::table('movie')->insert([
            ['id' => 1, 'title' => 'Elemental', 'duration' => 120, 'cast' => 'Jennifer Lawrence as Ember, Chris Pratt as Terra, Zendaya as Aqua, and Tom Holland as Zephyr', 'producer' => 'Pixar', 'director' => 'John Lasseter and Pete Docter', 'poster' => 'https://upload.wikimedia.org/wikipedia/id/7/7a/Elemental-_Force_of_Nature_poster_Indonesia.jpg', 'genre' => 'Kids', 'status' => 1, 'synopsis' => '"Elemental" follows the journey of Ember, a spirited young fire sprite, who embarks on a quest to restore balance to the world when the elemental forces of nature start to unravel. Alongside her newfound friends, Terra, an earth guardian, Aqua, a water ny', 'license' => 1, 'licensed_at' => '2024-05-25 19:21:31'],
            ['id' => 2, 'title' => 'How to Make Millions Before Grandma Dies', 'duration' => 126, 'cast' => 'Putthipong Assaratanakul, Tontawan Tantivejakul, Usha Seamkhum, Sarinrat Thomas, Sanya Kunakorn, Pongsatorn Jongwilas, Himawari Tajiri', 'producer' => 'Jira Maligool', 'director' => 'Pat Boonnitipat', 'poster' => 'https://asset.tix.id/wp-content/uploads/2024/05/0ae91767-957f-476b-a433-028aba02e6f2.webp', 'genre' => 'Drama', 'status' => 1, 'synopsis' => 'A man quits work to care for dying grandmother, motivated by her fortune. He schemes to win her favor before she passes.', 'license' => 0, 'licensed_at' => '2024-05-25 19:21:31'],
            ['id' => 3, 'title' => 'Adventures in the Wild', 'duration' => 98, 'cast' => 'John Doe, Jane Smith', 'producer' => 'Adventure Films', 'director' => 'Jake Wilder', 'poster' => 'https://example.com/adventures.jpg', 'genre' => 'Adventure', 'status' => 1, 'synopsis' => 'A group of friends explore the wilderness and face unexpected challenges.', 'license' => 0, 'licensed_at' => '2024-05-25 19:21:31'],
            ['id' => 4, 'title' => 'Space Journey', 'duration' => 134, 'cast' => 'Alice Johnson, Mark Brown', 'producer' => 'Sci-Fi Studios', 'director' => 'Lara Croft', 'poster' => 'https://example.com/spacejourney.jpg', 'genre' => 'Science Fiction', 'status' => 1, 'synopsis' => 'A mission to Mars goes awry, leading to a thrilling adventure in space.', 'license' => 0, 'licensed_at' => '2024-05-25 19:21:31'],
            ['id' => 5, 'title' => 'Love in Paris', 'duration' => 112, 'cast' => 'Emily Clark, Robert White', 'producer' => 'Romance Productions', 'director' => 'Isabella Hope', 'poster' => 'https://example.com/loveinparis.jpg', 'genre' => 'Romance', 'status' => 1, 'synopsis' => 'Two strangers meet in Paris and fall in love over the course of a magical week.', 'license' => 0, 'licensed_at' => '2024-05-25 19:21:31'],
            ['id' => 6, 'title' => 'Mystery Manor', 'duration' => 105, 'cast' => 'David Tennant, Olivia Benson', 'producer' => 'Mystery Inc.', 'director' => 'Arthur Doyle', 'poster' => 'https://example.com/mysterymanor.jpg', 'genre' => 'Mystery', 'status' => 1, 'synopsis' => 'A detective investigates a series of murders in a spooky mansion.', 'license' => 0, 'licensed_at' => '2024-05-25 19:21:31'],
            ['id' => 7, 'title' => 'The Great Heist', 'duration' => 119, 'cast' => 'Michael Scott, Jim Halpert', 'producer' => 'Heist Studios', 'director' => 'Steven Money', 'poster' => 'https://example.com/greatheist.jpg', 'genre' => 'Action', 'status' => 1, 'synopsis' => 'A group of criminals plan and execute a high-stakes heist.', 'license' => 0, 'licensed_at' => '2024-05-25 19:21:31'],
            ['id' => 8, 'title' => 'Fantasy Island', 'duration' => 108, 'cast' => 'Lucy Liu, Jack Black', 'producer' => 'Fantasy Films', 'director' => 'Wendy Darling', 'poster' => 'https://example.com/fantasyisland.jpg', 'genre' => 'Fantasy', 'status' => 1, 'synopsis' => 'An island where all your fantasies come true, but at a price.', 'license' => 0, 'licensed_at' => '2024-05-25 19:21:31'],
            ['id' => 9, 'title' => 'War Heroes', 'duration' => 140, 'cast' => 'Chris Evans, Scarlett Johansson', 'producer' => 'War Films', 'director' => 'John Battle', 'poster' => 'https://example.com/warheroes.jpg', 'genre' => 'War', 'status' => 1, 'synopsis' => 'The story of brave soldiers during a major historical battle.', 'license' => 0, 'licensed_at' => '2024-05-25 19:21:31'],
            ['id' => 10, 'title' => 'Comedy Night', 'duration' => 102, 'cast' => 'Kevin Hart, Amy Schumer', 'producer' => 'Comedy Central', 'director' => 'Funny Man', 'poster' => 'https://example.com/comedynight.jpg', 'genre' => 'Comedy', 'status' => 1, 'synopsis' => 'A hilarious night of stand-up comedy featuring top comedians.', 'license' => 0, 'licensed_at' => '2024-05-25 19:21:31'],
            ['id' => 11, 'title' => 'The Last Kingdom', 'duration' => 130, 'cast' => 'Henry Cavill, Emma Watson', 'producer' => 'Epic Films', 'director' => 'George King', 'poster' => 'https://example.com/lastkingdom.jpg', 'genre' => 'Historical', 'status' => 1, 'synopsis' => 'A tale of the rise and fall of a powerful kingdom.', 'license' => 0, 'licensed_at' => '2024-05-25 19:21:31'],
            ['id' => 12, 'title' => 'Ocean Wonders', 'duration' => 95, 'cast' => 'Narrated by David Attenborough', 'producer' => 'Nature Films', 'director' => 'Blue Planet', 'poster' => 'https://example.com/oceanwonders.jpg', 'genre' => 'Documentary', 'status' => 1, 'synopsis' => 'A deep dive into the wonders of the ocean.', 'license' => 0, 'licensed_at' => '2024-05-25 19:21:31']
        ]);
        
    }
}
