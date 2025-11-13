<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view(view: 'index');
})->name('index');

Route::get('/about', function() {
    return view('about-us');
})->name('about');
Route::get('/case-studies', function() {
    return view('case-studies');
})->name('case-studies');
Route::get('/insights', function() {
    return view('insights');
})->name('insights');
Route::get('/contact', function() {
    return view('contact');
})->name('contact');
