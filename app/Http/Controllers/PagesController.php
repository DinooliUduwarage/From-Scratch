<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title='Welcome to Laravel!';
        return view('pages.index')->with('title',$title);
    }

    public function about(){
        $title='About us';
        return view('pages.index')->with('title',$title);
    }

    public function services(){
        $data = array(
            'title'=>'Services',
            'services'=>['web design','programming','SE','network']

        );
        return view('pages.services')->with($data);
    }
}
