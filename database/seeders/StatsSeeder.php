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
            'HP' => '3600',
            'Damage' => '300',
            'Starpower' => 'Shell Shock',
        ]);

        Stats::create([
            'brawler_id' => $brawlers->where('name', 'Nita')->first()->id,
            'HP' => '3800',
            'Damage' => '740',
            'Starpower' => 'Bear With Me',
        ]);
    }
}
