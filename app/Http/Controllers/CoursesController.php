<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Course;

class CoursesController extends Controller
{
    public function index()
    {
        $data = Course::all();
        return view('courses', ['courses' => $data]);
    }

    public function createCourse(Request $request)
    {
        $course = new Course();
        $course->name = $request->name;
        $course->code = $request->code;
        $course->description = $request->description;
        $course->save();
        return redirect('/courses')->with('message', 'Success!');
    }

    public function showCourse($id)
    {
        return Department::find($id);
    }

}
