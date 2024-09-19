<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/sobre', function () {
    return view('pages.sobre');
});

Route::get('/encontrar-gatinhos', function () {
    return view('pages.listagem');
});

