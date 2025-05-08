<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()  {
        return view('Auth.Adminlogin');
        
    }

    public function login(Request $request){
    
        $user=$request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $user['email'])->first();
        if ($user&&Hash::check($request->password, $user->password)) {
      
            
            Auth::login($user);
           
            if ($user->role=='admin') {
               
              return  redirect()->route('dashboard')->with('success', 'Welcome back!');

            }
           abort(403);
            
        }else{
            return redirect()->back()->with('error', "invaild email or password");

        }
      

 
        

    }
}
