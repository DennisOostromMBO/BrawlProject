<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brawler extends Model
{
    protected $fillable = [
        'name',
        'rarity',
        'role',
        'picture',
    ];

    public function stats()
    {
        return $this->hasOne(Stats::class, 'brawler_id');
    }
}


