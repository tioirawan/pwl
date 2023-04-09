<?php

namespace App\Http\Controllers;

use App\Models\FamilyMember;
use Illuminate\Http\Request;

class FamilyMemberController extends Controller
{
    public function index()
    {
        $familyMembers = FamilyMember::all();
        return view('family.index', ['families' => $familyMembers]);
    }

    public function create()
    {
        return view('family.create')
            ->with('url_form', url('/families'));
    }

    // <td>{{ $family->name }}</td>
    // <td>{{ $family->address }}</td>
    // <td>{{ $family->phone }}</td>
    // <td>{{ $family->relation }}</td>
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'address' => 'required|string|max:255',
            'phone' => 'required',
            'relation' => 'required|string|max:50',
        ]);

        FamilyMember::create($request->except(['_token']));

        return redirect()->route('families.index');
    }

    public function show(FamilyMember $family)
    {
        // return view('family.show', ['family' => $family]);
    }

    public function edit(FamilyMember $family)
    {
        return view('family.create', ['family' => $family])
            ->with('url_form', url('/families/' . $family->id));
    }

    public function update(Request $request, FamilyMember $family)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'address' => 'required|string|max:255',
            'phone' => 'required',
            'relation' => 'required|string|max:50',
        ]);

        $family->update($request->except(['_token']));

        return redirect()->route('families.index');
    }

    public function destroy(FamilyMember $family)
    {
        $family->delete();
        return redirect()->route('families.index');
    }
}
