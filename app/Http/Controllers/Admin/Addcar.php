<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cars;


class Addcar extends Controller
{
    public function index(){
        return view('admin.add-cars');
    }
    function store_data(Request $request){
       
		$data = new Cars();
		$data->carname=$request->input('carname');
		
		$data->brand=$request->input('brand');

        $data->nplate=$request->input('nplate');

		if($request->hasFile('image')){
           $image=$request->file('image');
		   $ext=$image->getClientOriginalExtension();
		   $image_name=time().".".$ext;
		   $image->move('cars',$image_name);

		   $data->image=$image_name;
		}

        $data->rentprice=$request->input('rentprice');

		$data->save();
		return back();
	}
    function show()
	{
		$records = Cars::all();
        return view('admin.show-cars',compact('records'));
	}

    function delete($id){
        Cars:: destroy($id);
        return back();
    }

    function edit($id){
      $data = Cars::find($id);
      return view('admin.edit-cars',compact('data'));
    }

    function carupdate_data(Request $request,$id){
       $data = Cars::find($id);

       $data->carname=$request->input('carname');
       
       $data->brand=$request->input('brand');

       $data->nplate=$request->input('nplate');

		if($request->hasFile('image')){
           $image=$request->file('image');
		   $ext=$image->getClientOriginalExtension();
		   $image_name=time().".".$ext;
		   $image->move('cars',$image_name);

		   $data->image=$image_name;
		}

        $data->rentprice=$request->input('rentprice');

		

       $data->save();
       return back();
    }

    function approve($id){
        $cap = Cars::find($id);
  
        $cap->status='1';
  
        $cap->save();
        return back();
      }

      function reject($id){
        $cap = Cars::find($id);
  
        $cap->status='0';
  
        $cap->save();
        return back();
      }
}
