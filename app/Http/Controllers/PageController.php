<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        echo "Selamat Datang";
    }

    public function about()
    {
        echo "NIM : 2141720003 <br> Nama : Tio Misbaqul Irawan";
    }

    public function articles($id)
    {
        echo "Halaman Artikel dengan ID " . $id;
    }
}
