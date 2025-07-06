<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class Usershow extends Controller
{
    function records(){
        $records = User::all();
       return view('admin.users',compact('records'));
     }

     function delete($id){
         User:: destroy($id);
         return back();
     }

     function edit($id){
       $data = User::find($id);
       return view('admin.edit-users',compact('data'));
     }

     function update_data(Request $request,$id){
        $data = User::find($id);

        $data->name=$request->input('name');
		    $data->email=$request->input('email');
        $data->password=$request->input('password');

        $data->save();
        return redirect('users');
     }
}
