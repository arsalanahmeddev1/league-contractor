<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ContractorController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ReferralController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\CheckoutPurchaseController;
use App\Http\Controllers\CompanyController;
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

// Route::get('/membership', function () {
//     return view('screens.web.membership.index');
// })->name('membership');

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

Route::get('/memberships', [PackageController::class, 'index'])->name('packages.index');

Route::get('/select-plan/{package}', [PackageController::class, 'select'])->name('package.select');

Route::get('/checkout', [CheckoutPurchaseController::class, 'show'])->name('checkout');
Route::post('/fake-payment', [CheckoutPurchaseController::class, 'fakePayment'])->name('fake.payment');


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
    Route::get('/contractors', [ContractorController::class, 'index'])->name('contractors.index');
    Route::get('/contractors/create', [ContractorController::class, 'create'])->name('contractors.create');
    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
    Route::get('/referrals', [ReferralController::class, 'index'])->name('referrals.index');
    Route::get('/referrals/create', [ReferralController::class, 'create'])->name('referrals.create');
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/complete-profile', [CompanyController::class, 'index'])->name('company-profile.index');
    Route::post('/complete-profile', [CompanyController::class, 'store'])->name('company-profile.store');
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