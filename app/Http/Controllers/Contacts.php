<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Contact;

class Contacts extends Controller
{
    public function index(Request $request){
        
        return view('contact');
       }
    
    function store_datasc(Request $request){
         
        $data = new Contact();
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->subject=$request->input('subject');
        $data->message=$request->input('message');
        
    
        $data->save();
        return back();
      }

      function records(){
        $records = Contact::all();
       return view('admin.contactinfo',compact('records'));
     }

     function delete($id){
         Contact:: destroy($id);
         return back();
     }

}
