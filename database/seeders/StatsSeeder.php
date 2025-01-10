<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Stats;
use App\Models\Brawler;

class StatsSeeder extends Seeder
{
    public function run()
    {
        $brawlers = Brawler::all();

        Stats::create([
            'brawler_id' => $brawlers->where('name', 'Shelly')->first()->id,
            'HP' => '6660',
            'Damage' => '2700',
            'Starpower' => 'Shell Shock',
        ]);

        Stats::create([
            'brawler_id' => $brawlers->where('name', 'Nita')->first()->id,
            'HP' => '7200',
            'Damage' => '1920',
            'Starpower' => 'Bear With Me',
        ]);

        Stats::create([
            'brawler_id' => $brawlers->where('name', 'Colt')->first()->id,
            'HP' => '5040',
            'Damage' => '3888',
            'Starpower' => 'Slick Boots',
        ]);

        Stats::create([
            'brawler_id' => $brawlers->where('name', 'Bull')->first()->id,
            'HP' => '9000',
            'Damage' => '3960',
            'Starpower' => 'Berserker',
        ]);

        Stats::create([
            'brawler_id' => $brawlers->where('name', 'Jessie')->first()->id,
            'HP' => '5400',
            'Damage' => '1908',
            'Starpower' => 'Energize',
        ]);

        Stats::create([
            'brawler_id' => $brawlers->where('name', 'Brock')->first()->id,
            'HP' => '4860',
            'Damage' => '2088',
            'Starpower' => 'More Rockets!',
        ]);

        Stats::create([
            'brawler_id' => $brawlers->where('name', 'Dynamike')->first()->id,
            'HP' => '5040',
            'Damage' => '2880',
            'Starpower' => 'Dyna-Jump',
        ]);

        Stats::create([
            'brawler_id' => $brawlers->where('name', 'Bo')->first()->id,
            'HP' => '6480',
            'Damage' => '3456',
            'Starpower' => 'Circling Eagle',
        ]);
    }
}
