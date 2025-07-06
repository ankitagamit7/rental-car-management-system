<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    //
    public function index()
    {
        $posts = DB::table('cars')->get();
        return view('home',compact('posts'));
    }

    
}
