<?php

use App\Http\Controllers\ArtistController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/', [ArtistController::class, 'index']);

Route::get('/artists/{artist}', [ArtistController::class, 'show']);

