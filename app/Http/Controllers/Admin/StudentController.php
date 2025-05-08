<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function create()
    {
        $students = User::where('role', 'student')->get();
        $teachers = User::where('role', 'teacher')->get();
        return view('Admin.pages.students.add',compact('students','teachers'));
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|min:5',
        'email' => 'required|email|unique:users,email',
        'phone' => 'required|numeric|digits:11', 
        'national_id' => 'required|numeric|unique:users,national_num|digits:14'
        ]);

       User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone,
            'national_num' => $request->national_id,
            'role'=>'student',
            'password' => Hash::make($request->national_id), 
        ]);

        return redirect()->back()->with('success', 'Student created successfully!');

     

}


    public function index()  {
        $students = User::where('role', 'student')->get();

        return view('Admin.pages.students.index',compact('students'));

        
    }
}
