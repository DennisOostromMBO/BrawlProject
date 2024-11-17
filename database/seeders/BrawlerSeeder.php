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
        ]);

        Brawler::create([
            'name' => 'Colt',
            'rarity' => 'Common',
            'role' => 'Damage Dealer',
        ]);
    }
}
