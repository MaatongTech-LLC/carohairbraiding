<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AvailabityController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ServiceController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'administration'], function() {

    Route::middleware('auth')->group(function () {

        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
        // Clients routes
        Route::get('/clients', [ClientController::class, 'index'])->name('admin.clients.index');
        Route::get('/clients/{id}', [ClientController::class, 'show'])->name('admin.clients.show');
        // Services routes
        Route::get('/services', [ServiceController::class, 'index'])->name('admin.services.index');
        Route::post('/services', [ServiceController::class, 'store'])->name('admin.services.store');
        Route::get('/services/create', [ServiceController::class, 'create'])->name('admin.services.create');
        Route::get('/services/{id}', [ServiceController::class, 'show'])->name('admin.services.show');
        Route::get('/services/{id}/edit', [ServiceController::class, 'edit'])->name('admin.services.edit');
        Route::put('/services/{id}', [ServiceController::class, 'update'])->name('admin.services.update');
        Route::delete('/services/{id}', [ServiceController::class, 'destroy'])->name('admin.services.destroy');

        // Categories routes
        Route::get('/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
        Route::post('/categories', [CategoryController::class, 'store'])->name('admin.categories.store');
        Route::get('/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
        Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('admin.categories.show');
        Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
        Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
        Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');

        // Booking Calendar
        Route::get('/booking/calendar', [BookingController::class, 'calendar'])->name('admin.booking.calendar');
        Route::get('/booking/list', [BookingController::class, 'index'])->name('admin.booking.index');
        Route::get('/booking/{id}', [BookingController::class, 'show'])->name('admin.booking.show');
        Route::get('/get-new-bookings', [BookingController::class, 'get'])->name('admin.booking.get');
        Route::post('/mark-all-read', [BookingController::class, 'readAll'])->name('admin.booking.read-all');

        // Availability Calendar
        Route::get('/availability', [\App\Http\Controllers\Admin\AvailabilityController::class, 'index'])->name('admin.availability.index');


        Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');
        Route::get('/profile', [ProfileController::class, 'index'])->name('admin.profile.index');
        Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('admin.profile.update');
    });

    // Authentication routes
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [AuthController::class, 'login'])->name('admin.login.submit');
        Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('admin.password.request');
        Route::post('/forgot-password', [AuthController::class, 'sendResetLinkEmail'])->name('admin.password.email');
        Route::get('/reset-password/{token}', [AuthController::class, 'showResetPasswordForm'])->name('admin.password.reset');

    });

});
