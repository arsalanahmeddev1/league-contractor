<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('screens.web.home.index');
})->name('home');
Route::get('/about', function () {
    return view('screens.web.about.index');
})->name('about');