<?php

use App\Http\Controllers\ArtworkController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/artworks', [ArtworkController::class, 'index'])->name('artworks.index');

Route::get('/artworks/{artwork}', [ArtworkController::class, 'show'])->name('artworks.show');