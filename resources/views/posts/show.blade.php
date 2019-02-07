
@extends('layouts.app') <!--extending the layout-->
@section('content')
<a href="/posts" class="btn btn-default"> Go Back </a>
<h3>{{$post->Title}}</h3>

<div>
 <h3>{{$post->Body}}</h3>
</div>
<hr>

<small>Written on {{$post->created_at}}</small>
<hr >
@if(!Auth::guest()) <!--do not show edit or delete buttons unless it is registered user-->

@if(Auth::user()->id==$post->user_id)<!--unless ur ar the author u cant see edit delete buttons yet u can access by manually going in with typing url-->

<a href="/posts/{{$post->id}}/edit" class="btn btn-secondary"> Edit </a>

<!--delete-->
{!! Form::open(['action' => ['PostsController@destroy', $post->id],'method'=>'POST','class'=>'float-right']) !!} <!--store function-->
   
     {{Form::hidden('_method','DELETE')}}
     {{Form::submit('delete',['class'=>'btn btn-danger'])}}

{!! Form::close() !!}

@endif
@endif
@endsection