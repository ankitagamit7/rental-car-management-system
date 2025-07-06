<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Cbook;
use App\Models\Carss;

class CarsController extends Controller
{
    function posts(){
        $posts = DB::table('cars')->get();
        
       return view('cars',compact('posts'));
     }
     function books(){
      $books = DB::table('cars')->whereIn('carname',$name)->get();
      
     return view('booking',compact('books'));
   }

     public function index(Request $request){
      $posts = DB::table('cars')->where('status','1')->get();
      return view('booking',compact('posts'));
     }
     
     
}
