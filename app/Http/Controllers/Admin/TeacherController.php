<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class TeacherController extends Controller
{



    public function create()  {
        return view('Admin.pages.Teachers.create');    
    }

    
    public function store(Request $request) {
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
            'role'=>'teacher',
            'password' => Hash::make($request->national_id), 
        ]);

        return redirect()->back()->with('success', 'Teacher created successfully!');

     

        
    }
    public function index(){
        $teachers = User::where('role', 'teacher')->paginate(9); 
        return view("Admin.pages.Teachers.index", compact('teachers'));


            
            
    }
    public function show($id) {
        $teachers = User::where('id', $id)->get(); 

      
        return view("Admin.pages.Teachers.show", compact('teachers'));        
    }


    public function destroy($id){
        $teacher = User::where('id', $id);
        
        $teacher->delete();

        return redirect()->back()->with('success', 'Teacher deleted successfully!');



        
    }
 
   
    public function update(Request $request,$id){
    
        $request->validate([
            
            'newpassword' => 'required|string|min:8', 
        ]);
    
        $Teacher = User::where('role', 'teacher')->where('id', $id)->first();
    
        $Teacher->password = Hash::make($request->newpassword);
        $Teacher->save();
    
        return redirect()->back()->with('success', 'Password updated successfully.');
    }
        








}
