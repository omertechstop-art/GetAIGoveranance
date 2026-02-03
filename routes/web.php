<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('userfront.home');
})->name('home');

Route::get('/categories', function () {
    return view('userfront.categories');
})->name('categories');

Route::get('/compare', function () {
    return view('userfront.compare');
})->name('compare');

Route::get('/blog', function () {
    return view('userfront.blog');
})->name('blog');

Route::get('/qa', function () {
    return view('userfront.qa');
})->name('qa');
