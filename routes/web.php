<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FamilyMemberController;
use App\Http\Controllers\HobbyController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\P3P2\DashboardController;
use App\Http\Controllers\P3P2\PengalamanKuliahController;
use App\Http\Controllers\P3P2\ProfileController;

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


Auth::routes();
Route::get('logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Halaman Home
    // Menampilkan halaman awal website
    // Route::get('/', HomeController::class);

    // Halaman Products
    // Menampilkan daftar product ( route prefix)
    Route::prefix('category')->group(function () {
        Route::view('/marbel-edu-games', 'product');
        Route::view('/marbel-and-friends-kids-games', 'product');
        Route::view('/riri-story-books', 'product');
        Route::view('/kolak-kids-songs', 'product');
        Route::view('/', 'product');
    });


    // Halaman News
    // Menampilkan Daftar berita (route param)
    Route::get('/news/{news}', [NewsController::class, 'show']);
    Route::get('/news', [NewsController::class, 'index']);

    // Halaman Program
    // Menampilkan Daftar Program (route prefix)
    Route::prefix('program')->group(function () {
        Route::view('/karir', 'program');
        Route::view('/magang', 'program');
        Route::view('/kunjungan-industri', 'program');
    });

    // Halaman About Us
    // Menampilkan About Us (route biasa)
    Route::view('/about-us', 'about-us');

    // Halaman Contact Us
    // Menampilkan Contact Us (route resource only)
    Route::resource('contact-us', ContactUsController::class);

    // Pertemuan 3 Praktikum 2
    Route::get('/dashboard', DashboardController::class);
    Route::get('/pengalaman-kuliah', PengalamanKuliahController::class);
    Route::get('/profile/{nama}', ProfileController::class);

    // Pertemuan 4 Praktikum 1
    Route::get('/articles', [ArticleController::class, 'index']);

    // Pertemuan 4 Tugas 1
    Route::resource('hobbies', HobbyController::class);
    // Pertemuan 4 Tugas 2
    Route::get('/family', [FamilyMemberController::class, 'index']);
    // Pertemuan 4 Tugas 3
    Route::get('/courses', [CourseController::class, 'index']);

    Route::resource('mahasiswa', MahasiswaController::class);
});
