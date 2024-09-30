<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/sobre', function () {
    return view('pages.sobre');
})->name('sobre');

Route::get('/encontrar-gatinhos', function () {
    return view('pages.listagem');
})->name('encontrar-gatinhos');

Route::get('/detalhes', function () {
    return view('pages.detalhes');
})->name('detalhes');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

Route::get('/blog-post', function () {
    return view('pages.blogPost');
})->name('blog-post');

Route::get('/contato', function () {
    return view('pages.contato');
})->name('contato');





