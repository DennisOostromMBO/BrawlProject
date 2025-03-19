<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrawlController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;

// Brawl stars routes
Route::get('/', function () {
    return redirect()->route('brawl.index'); 
});
Route::get('/brawl', [BrawlController::class, 'index'])->name('brawl.index');
Route::get('/brawl/brawlers', [BrawlController::class, 'brawlers'])->name('brawl.brawlers');
Route::get('/brawl/game', [BrawlController::class, 'game'])->name('brawl.game');

// Update the stats route to include the brawler's ID
Route::get('/brawl/brawlers/{id}/stats', [BrawlController::class, 'stats'])->name('brawl.brawlers.stats');
;


//register routes
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

//login routes
Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [RegisteredUserController::class, 'store']);

