<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Stats;

class StatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Stats::create([
            'HP' => '100',
            'Damage' => '100',
            'Starpower' => '100',
        ]);     
    }
}
