<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brawler extends Model
{
    protected $fillable = [
        'name',
        'rarity',
        'role',
    ];
}

