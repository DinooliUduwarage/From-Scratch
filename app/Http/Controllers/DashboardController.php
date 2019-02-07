<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//get the model User.php
Use App\User;
Use App\Post;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //using the relation created , gonna get the posts by a user
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('dashboard')->with('posts',$user->posts);
    }
}
