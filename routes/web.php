<?php

use App\Http\Controllers\OpenController;
use App\Http\Controllers\HomeController;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
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
Route::get('/insights', [OpenController::class, 'insights'])->name('insights');
Route::get('/contact', function() {
    return view('contact');
})->name('contact');

Route::get('services/{slug}', [OpenController::class, 'services'])->name('audit-services');
Route::get('blog/{slug}', [OpenController::class, 'blog'])->name('blog');

Auth::routes(['register' => false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');
Route::post('add-blog', [HomeController::class, 'addBlog'])->name('add-blog');
Route::post('edit-blog', [HomeController::class, 'editBlog'])->name('edit-blog');

Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::post('add-service', [HomeController::class, 'addService'])->name('add-service');
Route::post('edit-service', [HomeController::class, 'editService'])->name('edit-service');

Route::get('/queries', [HomeController::class, 'queries'])->name('queries');
