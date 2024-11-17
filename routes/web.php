<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrawlController;

Route::get('/', function () {
    return redirect()->route('brawl.index'); 
});

Route::get('/brawl', [BrawlController::class, 'index'])->name('brawl.index');
Route::get('/brawl/brawlers', [BrawlController::class, 'brawlers'])->name('brawl.brawlers');