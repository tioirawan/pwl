<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        echo "<h1>Selamat Datang</h1><p>ini adalah halaman awal</p>";
    }

    public function products()
    {
        echo "
        <h1>Produk</h1>
        
        <ul>
            <li><a href='https://www.educastudio.com/category/marbel-edu-games'>https://www.educastudio.com/category/marbel-edu-games</a></li>
            <li><a href='https://www.educastudio.com/category/marbel-and-friends-kids-games'>https://www.educastudio.com/category/marbel-and-friends-kids-games</a></li>
            <li><a href='https://www.educastudio.com/category/riri-story-books'>https://www.educastudio.com/category/riri-story-books</a></li>
            <li><a href='https://www.educastudio.com/category/kolak-kids-songs'>https://www.educastudio.com/category/kolak-kids-songs</a></li>
        </ul>
        ";
    }

    public function news($news) {
        echo "<h1>Halaman ini menampilkan berita</h1><br>tentang $news";
    }

    public function program() {
        echo "
            <h1>Daftar Program</h1>

            <ul>
                <li><a href='/program/karir'>https://www.educastudio.com/program/karir</a></li>
                <li><a href='/program/magang'>https://www.educastudio.com/program/magang</a></li>
                <li><a href='/program/kunjungan-industri'>https://www.educastudio.com/program/kunjungan-industri</a></li>
            </ul>
        ";
    }

    public function programDetail($name) {
        echo "Menampilkan program: $name";
    }
}
