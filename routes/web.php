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

Route::get('/detalhes', function () {
    return view('pages.detalhes');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/blog-post', function () {
    return view('pages.blogPost');
});



