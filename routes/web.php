<?php

use App\Album;
use App\Song;

Route::get('/', function () {
    $albums = Album::with('songs')->get();

    return view('albums')->with('albums', $albums);
});

Route::get('songs/{song}', function (Song $song) {
    return $song;
});
