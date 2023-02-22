<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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

Route::pattern("id", "[0-9]+");
Route::pattern("news", "[a-zA-Z0-9]+");

// Halaman Home
// Menampilkan halaman awal website
Route::get('/', [PageController::class, 'index']);

// Halaman Products
// Menampilkan daftar product ( route prefix)
Route::get('/products', [PageController::class, 'products']);

// Halaman News
// Menampilkan Daftar berita (route param)
Route::get('/news/{news}', [PageController::class, 'news']);

// Halaman Program
// Menampilkan Daftar Program (route prefix)
Route::group(["prefix" => "program"], function() {
  Route::get('/{name}', [PageController::class, 'programDetail']);
  Route::get('/', [PageController::class, 'program']);
});

// Menampilkan About Us (route biasa)
Route::get('/about-us', function () {
  echo "Ini about";
});

// Halaman Contact Us
// Menampilkan Contact Us (route resource only)
Route::resource("/contact-us", ContactUsController::class);
