<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('course.index', ['courses' => $courses]);
    }

    public function create()
    {
        return view('course.create')
            ->with('url_form', url('/courses'));
    }

    // $table->string('name');
    // $table->string('sks');
    // $table->string('semester');
    // $table->string('description');
    // $table->string('lecturer');
    // $table->string('day');
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'sks' => 'required|string|max:10',
            'semester' => 'required|string|max:10',
            'description' => 'required|string|max:255',
            'lecturer' => 'required|string|max:50',
            'day' => 'required|string|max:50',
        ]);

        Course::create($request->except(['_token']));

        return redirect()->route('courses.index');
    }

    public function edit(Course $course)
    {
        return view('course.create', ['course' => $course])
            ->with('url_form', url('/courses/' . $course->id));
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'sks' => 'required|string|max:10',
            'semester' => 'required|string|max:10',
            'description' => 'required|string|max:255',
            'lecturer' => 'required|string|max:50',
            'day' => 'required|string|max:50',
        ]);

        $course->update($request->except(['_token']));

        return redirect()->route('courses.index');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index');
    }
}
