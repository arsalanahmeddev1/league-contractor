<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\UsersController;

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

Route::get('/profile', function () {
    return view('screens.web.profile.index');
})->middleware('auth')->name('profile');


// admin routes 
// Route::middleware(['auth', 'role:super_admin'])->group(function () {
//     Route::get('/admin/dashboard', function () {
//         return view('screens.admin.dashboard.admin');
//     })->name('admin.dashboard');
// });
// Route::middleware(['auth', 'role:super_admin'])->group(function () {
//     Route::get('/admin/dashboard', function () {
//         return view('screens.admin.dashboard.admin');
//     })->name('admin.dashboard');
// });

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/users', [UsersController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');
    Route::post('/users', [UsersController::class, 'store'])->name('users.store');
    Route::get('/memberships', [MembershipController::class, 'index'])->name('memberships.index');
});


// auth routes



Route::get('/route-clear', function () {
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    $cache = 'Route cache cleared <br /> View cache cleared <br /> Cache cleared <br /> Config cleared <br /> Config cache cleared';
    return $cache;
});