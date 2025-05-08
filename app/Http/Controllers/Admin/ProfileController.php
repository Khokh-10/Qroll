<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()  {
        $info = User::where('role','admin')->get(); 
        return view('Admin.pages.profile.index',compact('info'));
        
    }

    public function updatePassword($id ) {

    $user = User::find($id);

        return view('Admin.pages.profile.update',compact('user'));
        
    }


        public function update(Request $request, $id) {

    $user = User::find($id);
    
    $request->validate([
        'oldpassword' => 'required|string',
        'newpassword' => 'required|string|min:8', 
    ]);

   
    $user = Auth::user();  
    if (!Hash::check($request->oldpassword, $user->password)) {
        return back()->with('error', 'The provided old password is incorrect.');
    }
    $user->password = Hash::make($request->newpassword);
    $user->save();

    return redirect()->back()->with('success', 'Password updated successfully.');
}
        
}
        


