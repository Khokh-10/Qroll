<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Courses;

class CourseController extends Controller
{
    public function create()
    {
        $doctors = User::where('role', 'doctor')->get();
        $teachers = User::where('role', 'teacher')->get();
        return view('Admin.pages.courses.create',compact('doctors','teachers'));
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string',
        'doctor_id' => 'required|exists:users,id',
       'teachers' => 'required|array',
        'teachers.*' => 'exists:users,id',
    ]);

    $course = Courses::create([
        'name' => $request->name,
        'doctor_id' => $request->doctor_id,

    ]);
    foreach ($request->teachers as $teacherId) {
        $course->teachers()->attach($teacherId, ['role' => 'teacher']);
    }

    return redirect()->back()->with('success', 'Course added successfully!');
}


    public function index()  {
        $courses=Courses::paginate(9);
        return view('Admin.pages.courses.index',compact('courses'));

        
    }
}
