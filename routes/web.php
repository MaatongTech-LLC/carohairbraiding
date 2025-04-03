<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/services', [HomeController::class, 'services'])->name('services');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [HomeController::class, 'contactPost'])->name('contact.post');

Route::get('/booking/{id}', [HomeController::class, 'booking'])->name('booking');

Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/categories', [HomeController::class, 'categories'])->name('categories');


Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::post('/checkout/{id}', [HomeController::class, 'checkoutPay'])->name('checkout.pay');

// Stripe routes
Route::post('/stripe/payment', [HomeController::class, 'stripePost'])->name('stripe');

// PayPal payment routes
Route::get('/paypal/payment/success/{booking_id}', [HomeController::class, 'paypalSuccess'])->name('paypal.payment.success');
Route::get('/paypal/payment/cancel', [HomeController::class, 'paypalCancel'])->name('paypal.payment.cancel');


require_once __DIR__ . '/admin.php';
