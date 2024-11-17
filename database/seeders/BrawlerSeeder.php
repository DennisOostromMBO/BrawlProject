<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brawler;

class BrawlerSeeder extends Seeder
{
    public function run()
    {
        Brawler::create([
            'name' => 'Shelly',
            'rarity' => 'Starter',
            'role' => 'Damage Dealer',
            'picture' => '/images/brawlers/shelly.png',
        ]);

        Brawler::create([
            'name' => 'Nita',
            'rarity' => 'Trophy road',
            'role' => 'Damage dealer',
            'picture' => '/images/brawlers/nita.png',
        ]);

        Brawler::create([
            'name' => 'Colt',
            'rarity' => 'Trophy road',
            'role' => 'Damage Dealer',
            'picture' => '/images/brawlers/colt.png',
        ]);

        Brawler::create([
            'name' => 'Bull',
            'rarity' => 'Trophy road',
            'role' => 'Tank',
            'picture' => '/images/brawlers/bull.png',
        ]);
    }
}
