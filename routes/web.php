<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/venue', function () {
    return view('venue');
})->name('venue');

Route::get('/review', function () {
    return view('review');
})->name('review');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/venue-detail', function () {
    return view('venue-detail');
})->name('venue-detail');

Route::get('/payment', function () {
    return view('payment');
})->name('payment');

Route::get('/payment-success', function () {
    return view('payment-success');
})->name('payment-success');

Route::get('/signin', function () {
    return view('signin');
})->name('signin');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');
