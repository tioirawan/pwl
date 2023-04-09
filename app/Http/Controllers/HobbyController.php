<?php

namespace App\Http\Controllers;

use App\Models\Hobby;
use Illuminate\Http\Request;

class HobbyController extends Controller
{
    public function index()
    {
        $hobbies = Hobby::all();
        return view('hobby.index', ['hobbies' => $hobbies]);
    }

    public function create()
    {
        return view('hobby.create')
            ->with('url_form', url('/hobbies'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'description' => 'required|string|max:255',
        ]);

        Hobby::create($request->except(['_token']));

        return redirect()->route('hobbies.index');
    }

    public function show(Hobby $hobby)
    {
        // TODO
    }

    public function edit(Hobby $hobby)
    {
        return view('hobby.create', ['hobby' => $hobby])
            ->with('url_form', url('/hobbies/' . $hobby->id));
    }

    public function update(Request $request, Hobby $hobby)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'description' => 'required|string|max:255',
        ]);

        $hobby->update($request->except(['_token', '_method']));

        return redirect()->route('hobbies.index');
    }

    public function destroy(Hobby $hobby)
    {
        $hobby->delete();
        return redirect()->route('hobbies.index');
    }
}
