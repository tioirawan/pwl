<?php

namespace App\Http\Controllers\P3P2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengalamanKuliahController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('about-us');
    }
}
