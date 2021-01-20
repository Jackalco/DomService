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

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/agences', function () {
    return view('agencies');
})->name('agencies');

Route::get('/recrutement', function () {
    return view('recruitment');
})->name('recruitment');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

