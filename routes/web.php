<?php

use Illuminate\Support\Facades\Route;



// Web Routes
Route::get('/', function () {
    return view('screens.web.home.index', ['isHome' => true]);
})->name('home');

Route::get('/about', function () {
    return view('screens.web.about.index');
})->name('about');

Route::get('/contact', function () {
    return view('screens.web.contact.index');
})->name('contact');

Route::get('/services', function () {
    return view('screens.web.services.index');
})->name('services');

Route::get('/membership', function () {
    return view('screens.web.membership.index');
})->name('membership');

Route::get('/referrals', function () {
    return view('screens.web.referrals.index');
})->name('referrals');

Route::get('/marketplace', function () {
    return view('screens.web.marketplace.index');
})->name('marketplace');

// admin Routes


// auth routes