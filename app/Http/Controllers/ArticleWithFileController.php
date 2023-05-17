<?php

namespace App\Http\Controllers;

use App\Models\ArticleWithFile;
use Illuminate\Http\Request;

class ArticleWithFileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles-with-file.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image_name = null;

        if ($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
        }

        ArticleWithFile::create([
            'title' => $request->title,
            'content' => $request->content,
            'featured_image' => $image_name,
        ]);

        return 'Artikel berhasil disimpan';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ArticleWithFile  $articleWithFile
     * @return \Illuminate\Http\Response
     */
    public function show(ArticleWithFile $articleWithFile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ArticleWithFile  $articleWithFile
     * @return \Illuminate\Http\Response
     */
    public function edit(ArticleWithFile $articleWithFile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ArticleWithFile  $articleWithFile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArticleWithFile $articleWithFile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ArticleWithFile  $articleWithFile
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArticleWithFile $articleWithFile)
    {
        //
    }
}
