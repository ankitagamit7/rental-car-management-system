<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use DB; 

class Alogin extends Controller
{
    public function index(Request $request){
		return view('admin.alogin');
	}
    public function aregister()
    {
        return view('admin.aregister');
    }
 
    public function aregisterPost(Request $request)
    {
        $user = new Admin();
 
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
 
        $user->save();
 
        return back()->with('success', 'Register successfully');
    }
 
    public function alogin()
    {
        return view('admin.alogin');
    }
 
    public function aloginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
 
        if (Auth::attempt($credetials)) {
            return redirect('/dashboard')->with('success', 'Login Success');
        }
 
        return back()->with('error', 'Error Email or Password');
    }
 
    public function alogout()
    {
        Auth::alogout();
 
        $posts = DB::table('cars')->get();
        return view('welcome',compact('posts'));
    
    }
}
