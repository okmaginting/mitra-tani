<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/search', function () {
    return view('search');
}); 
Route::get('/home', function () {
    return view('home');
}); 

Route::get('/products', function () {
    return view('products');
}); 

Route::get('/faq', function () {
    return view('faq');
}); 
Route::get('/cart', function () {
    return view('cart');
}); 
Route::get('/checkout', function () {
    return view('checkout');
}); 
Route::get('/profile', function () {
    return view('profile');
}); 
Route::get('/login-member', function () {
    return view('member-login');
});
Route::get('/daftar-member', function () {
    return view('member-daftar');
});
require __DIR__.'/auth.php';
