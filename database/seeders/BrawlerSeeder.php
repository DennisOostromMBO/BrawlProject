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

        Brawler::create([
            'name' => 'Jessie',
            'rarity' => 'Trophy road',
            'role' => 'Controller',
            'picture' => '/images/brawlers/jessie.png',
        ]);

        Brawler::create([
            'name' => 'Brock',
            'rarity' => 'Trophy road',
            'role' => 'Marksman',
            'picture' => '/images/brawlers/brock.png',
        ]);

        Brawler::create([
            'name' => 'Dynamike',
            'rarity' => 'Trophy road',
            'role' => 'Artillery',
            'picture' => '/images/brawlers/dynamike.png',
        ]);

        Brawler::create([
            'name' => 'Bo',
            'rarity' => 'Trophy road',
            'role' => 'Controller',
            'picture' => '/images/brawlers/bo.png',
        ]);

        Brawler::create([
            'name' => 'El Primo',
            'rarity' => 'Rare',
            'role' => 'Tank',
            'picture' => '/images/brawlers/primo.png',
        ]);

        Brawler::create([
            'name' => 'Barley',
            'rarity' => 'Rare',
            'role' => 'Artillery',
            'picture' => '/images/brawlers/barley.png',
        ]);

        Brawler::create([
            'name' => 'Poco',
            'rarity' => 'Rare',
            'role' => 'Support',
            'picture' => '/images/brawlers/poco.png',
        ]);

        Brawler::create([
            'name' => 'Darryl',
            'rarity' => 'Super Rare',
            'role' => 'Tank',
            'picture' => '/images/brawlers/darryl.png',
        ]);

        Brawler::create([
            'name' => 'Penny',
            'rarity' => 'Super Rare',
            'role' => 'Artilerry',
            'picture' => '/images/brawlers/penny.png',
        ]);

        Brawler::create([
            'name' => 'Rico',
            'rarity' => 'Super Rare',
            'role' => 'Damage Dealer',
            'picture' => '/images/brawlers/rico.png',
        ]);

        Brawler::create([
            'name' => 'Frank',
            'rarity' => 'Epic',
            'role' => 'Tank',
            'picture' => '/images/brawlers/frank.png',
        ]);

        Brawler::create([
            'name' => 'Pam',
            'rarity' => 'Epic',
            'role' => 'Support',
            'picture' => '/images/brawlers/pam.png',
        ]);

        Brawler::create([
            'name' => 'Piper',
            'rarity' => 'Epic',
            'role' => 'Marksman',
            'picture' => '/images/brawlers/piper.png',
        ]);

        Brawler::create([
            'name' => 'Tara',
            'rarity' => 'Mythic',
            'role' => 'Damage Dealer',
            'picture' => '/images/brawlers/tara.png',
        ]);

        Brawler::create([
            'name' => 'Mortis',
            'rarity' => 'Mythic',
            'role' => 'Assassin',
            'picture' => '/images/brawlers/mortis.png',
        ]);

        Brawler::create([
            'name' => 'Crow',
            'rarity' => 'Legendary',
            'role' => 'Assassin',
            'picture' => '/images/brawlers/crow.png',
        ]);

        Brawler::create([
            'name' => 'Spike',
            'rarity' => 'Legendary',
            'role' => 'Damage Dealer',
            'picture' => '/images/brawlers/spike.png',
        ]);

        Brawler::create([
            'name' => 'Leon',
            'rarity' => 'Legendary',
            'role' => 'Assassin',
            'picture' => '/images/brawlers/leon.png',
        ]);
    }
}
