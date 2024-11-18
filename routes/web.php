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

//register routes
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

//login routes
Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [RegisteredUserController::class, 'store']);