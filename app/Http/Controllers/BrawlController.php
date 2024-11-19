<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brawler;

class BrawlController extends Controller
{
    public function index()
    {
        return view('brawl.index');
    }

    public function brawlers()
    {
        $brawlers = Brawler::all(); 
        return view('brawl.brawlers', compact('brawlers')); 
    }

    public function stats($id)
    {
        $brawler = Brawler::findOrFail($id); 
        // Geef de juiste view door (brawl.stats in plaats van brawl.brawlers.stats)
        return view('brawl.stats', compact('brawler'));
    }
}


