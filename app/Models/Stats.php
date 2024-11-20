<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stats extends Model
{
    protected $fillable = [
        'HP',
        'Damage',
        'Starpower',
        'brawler_id', 
    ];

    public function brawler()
    {
        return $this->belongsTo(Brawler::class);
    }
}
