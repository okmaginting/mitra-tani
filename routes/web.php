<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// user route
Route::get('/', function () {
    return view('pages.index');
});
Route::get('/search', function () {
    return view('pages.search');
}); 
Route::get('/home', function () {
    return view('pages.home');
}); 

Route::get('/products', function () {
    return view('pages.products');
}); 

Route::get('/faq', function () {
    return view('pages.faq');
}); 
Route::get('/cart', function () {
    return view('pages.cart');
}); 
Route::get('/checkout', function () {
    return view('pages.checkout');
}); 
Route::get('/profile', function () {
    return view('pages.profile');
}); 
Route::get('/login-member', function () {
    return view('pages.member-login');
});
Route::get('/daftar-member', function () {
    return view('pages.member-daftar');
});


require __DIR__.'/auth.php';
