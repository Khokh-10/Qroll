<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
{
    public function create()  {
        return view('Admin.pages.Doctors.create');    
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
            'role'=>'doctor',
            'password' => Hash::make($request->national_id), 
        ]);

        return redirect()->back()->with('success', 'Doctor created successfully!');

     

        
    }
    public function index(){
        $doctors = User::where('role', 'doctor')->paginate(9); 
        return view("Admin.pages.doctors.index", compact('doctors'));


            
            
    }
    public function show($id) {
        $doctors = User::where('id', $id)->get(); 

      
        return view("Admin.pages.doctors.show", compact('doctors'));        
    }


    public function destroy($id){
        $doctors = User::where('id', $id);
        
        $doctors->delete();

        return redirect()->back()->with('success', 'Doctor deleted successfully!');



        
    }
 
   
    public function update(Request $request,$id){
    
        $request->validate([
            
            'newpassword' => 'required|string|min:8', 
        ]);
    
        $doctor = User::where('role_id', 'doctor')->where('id', $id)->first();
    
        $doctor->password = Hash::make($request->newpassword);
        $doctor->save();
    
        return redirect()->back()->with('success', 'Password updated successfully.');
    }
        




}
