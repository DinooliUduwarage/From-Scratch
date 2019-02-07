<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use DB;

class ExportExcelController extends Controller
{
    function index(){
        $req = DB::table('posts')->get();
        return view('export')->with('req',$req);
    }

    function excel(){
        $req = DB::table('posts')->get()toArray();
        
        return view('export')->with('req',$req);
    }

}
