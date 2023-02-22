<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        echo "<h1>Selamat Datang di Halaman Kategori</h1>";
        echo "<br>";
        echo "<ul>";
        echo "<li><a href='/category/marbel-edu-games'>Marbel Edu Games</a></li>";
        echo "<li><a href='/category/marbel-and-friends-kids-games'>Marbel and Friends Kids Games</a></li>";
        echo "<li><a href='/category/riri-story-books'>Riri Story Books</a></li>";
        echo "<li><a href='/category/kolak-kids-songs'>Kolak Kids Songs</a></li>";
        echo "</ul>";
    }

    public function marbel_edu_games()
{
        echo "<h1>Marbel Edu Games</h1>";
    }

    public function marbel_and_friends_kids_games()
    {
        echo "<h1>Marbel and Friends Kids Games</h1>";
    }

    public function riri_story_books()
    {
        echo "<h1>Riri Story Books</h1>";
    }

    public function kolak_kids_songs()
    {
        echo "<h1>Kolak Kids Songs</h1>";
    }
}
