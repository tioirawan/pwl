<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        echo "<h1>Selamat Datang di Halaman Artikel</h1>";
        echo "<br>";
        echo "<ul>";
        echo "<li><a href='/news/1'>Artikel 1</a></li>";
        echo "<li><a href='/news/2'>Artikel 2</a></li>";
        echo "<li><a href='/news/3'>Artikel 3</a></li>";
        echo "<li><a href='/news/4'>Artikel 4</a></li>";
        echo "<li><a href='/news/5'>Artikel 5</a></li>";
        echo "</ul>";
    }

    public function show($id)
    {
        echo "<h1>Artikel $id</h1>";
    }
}
