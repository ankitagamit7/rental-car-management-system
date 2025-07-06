<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Cbook;

class Carbook extends Controller
{
    public function index(Request $request){
        $posts = DB::table('cars')->where('status','1')->get();
        return view('booking',compact('posts'));
       }
       
       function store_datasb(Request $request){
         
        $data = new Cbook();
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->pnumber=$request->input('pnumber');
        $data->bdate=$request->input('bdate');
        $data->gender=$request->input('gender');
        $data->licenceid=$request->input('licenceid');
        $data->carname=$request->input('carname');
    
        $data->save();
        return back();
      }

      function show()
	    {
		    $records = Cbook::all();
        return view('admin.show-booking',compact('records'));
	    }

      function delete($id){
        Cbook:: destroy($id);
        return back();
    }

    function approve($id){
      $booking = Cbook::find($id);

      $booking->status='1';

      $booking->save();

    }

    
    

}
