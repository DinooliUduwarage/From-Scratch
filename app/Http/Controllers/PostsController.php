<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//getting in model
use App\Post; 
use App\User;
//using usual db query
use DB;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //restricting access to create /edit posts to non registered users
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        
//video 1o cudnt pass posts user name

        //usual query
        //$posts = DB::select('SELECT * FROM posts');
        //fetch all data
        $posts = Post::orderBy('created_at','desc')->get(); //takes two posts at a time
       //$posts = Post::all()->paginate(2);
       // return Post::where('title','post two')->take(6)->get();
        //posts = from resource route name
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required'
            ]);
    
            //create post
            $post = new Post;
            $post->title = $request->input('title');
            $post->body = $request->input('body');
            $post->user_id = auth()->user()->id; //get any of user's field such as id
            $post->save();
    
            //success message triggered
            return redirect ('/posts')->with('success','Post Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        //check for correct user non authors cant get tonto edit others posts via url
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error','Unauthorised access');
        }

       
     //unless let users edit delete facility-
        return view('posts.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validate
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required'
            ]);
    
            //create post
            $post = Post::find($id);
            $post->Title = $request->input('title');
            $post->Body = $request->input('body');
            $post->save();
    
            //success message triggered
            return redirect ('/posts')->with('success','Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
         //check for correct user non authors cant get tonto edit others posts via url
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error','Unauthorised access');
        }


         //unless let users  delete facility-
        $post->delete();
        return redirect ('/posts')->with('success','Post Deleted');

    }
}
