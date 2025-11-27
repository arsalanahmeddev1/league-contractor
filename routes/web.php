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

Route::get('/services/show', function () {
    return view('screens.web.services.show');
})->name('service-detail');

Route::get('/membership', function () {
    return view('screens.web.membership.index');
})->name('membership');

Route::get('/referrals', function () {
    return view('screens.web.referrals.index');
})->name('referrals');

Route::get('/marketplace', function () {
    return view('screens.web.marketplace.index');
})->name('marketplace');

Route::get('/store', function () {
    return view('screens.web.store.index');
})->name('store');

Route::get('/products', function () {
    return view('screens.web.products.index');
})->name('products');

Route::get('/product-detail', function () {
    return view('screens.web.products.show');
})->name('product-detail');

Route::get('/book-now', function () {
    return view('screens.web.book-now.index');
})->name('book-now');

Route::get('/cart', function () {
    return view('screens.web.cart.index');
})->name('cart');

Route::get('/checkout', function () {
    return view('screens.web.checkout.index');
})->name('checkout');

// Auth Routes
Route::get('/login', function () {
    return view('screens.web.auth.login');
})->name('login');

Route::get('/join', function () {
    return view('screens.web.auth.register');
})->name('register');

Route::get('/forgot-password', function () {
    return view('screens.web.auth.forgot-password');
})->name('forgot-password');

// admin Routes


// auth routes