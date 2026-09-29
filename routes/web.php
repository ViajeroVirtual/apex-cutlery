<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;

Route::get('/', [ViewController::class, 'home'])->name('home');
Route::get('/catalog', [ViewController::class, 'catalog'])->name('catalog');
Route::get('/product/{id}', [ViewController::class, 'product'])->name('product');
Route::get('/contact', [ViewController::class, 'contact'])->name('contact');

use App\Http\Controllers\AuthController;
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CartController;

Route::get('/cart', [CartController::class, 'view'])->name('cart.view');
Route::match(['GET', 'POST'], '/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::match(['GET', 'POST'], '/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

Route::middleware('auth')->group(function () {
    Route::get('/checkout/payment', [CheckoutController::class, 'payment'])->name('checkout.payment');
    Route::post('/checkout/process', [CheckoutController::class, 'process'])->name('checkout.process');
    Route::get('/checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');
});
