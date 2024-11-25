<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/booking/{service}', function ($service) {
    return view('booking', ['service' => $service]);
})->name('booking');

Route::get('/services/{service}', function($service) {
    return view('service-single', ['service' => $service]);
})->name('service-single');
