<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactUsController;

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

// Halaman Home
// Menampilkan halaman awal website
Route::get('/', HomeController::class);

// Halaman Products
// Menampilkan daftar product ( route prefix)
Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', [CategoryController::class, 'marbel_edu_games']);
    Route::get('/marbel-and-friends-kids-games', [CategoryController::class, 'marbel_and_friends_kids_games']);
    Route::get('/riri-story-books', [CategoryController::class, 'riri_story_books']);
    Route::get('/kolak-kids-songs', [CategoryController::class, 'kolak_kids_songs']);
    Route::get('/', [CategoryController::class, 'index']);
});


// Halaman News
// Menampilkan Daftar berita (route param)
Route::get('/news/{news}', [ArticleController::class, 'show']);
Route::get('/news', [ArticleController::class, 'index']);

// Halaman Program
// Menampilkan Daftar Program (route prefix)
Route::prefix('program')->group(function () {
    Route::get('/karir', function () {
        echo "<h1>Program Karir</h1>";
    });
    Route::get('/magang', function () {
        echo "<h1>Program Magang</h1>";
    });
    Route::get('/kunjungan-industri', function () {
        echo "<h1>Program Kunjungan Industri</h1>";
    });
});

// Halaman About Us
// Menampilkan About Us (route biasa)
Route::get('/about-us', function () {
    echo "<h1>About Us</h1>";
});

// Halaman Contact Us
// Menampilkan Contact Us (route resource only)
Route::resource('contact-us', ContactUsController::class);
