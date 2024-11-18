<?php

namespace App\Http\Controllers;

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
}

