<?php

namespace App\Http\Controllers;

use App\Models\FamilyMember;
use Illuminate\Http\Request;

class FamilyMemberController extends Controller
{
    public function index() {
        $familyMembers = FamilyMember::all();
        return view('family.index', ['families' => $familyMembers]);
    }
}
