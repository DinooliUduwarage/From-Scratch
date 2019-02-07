@extends('layouts.app')
@section('content')
<!--<h1>{{$title}}</h1>-->

<div class="jumbotron text-center">
            <h1>Welcome to laravel</h1>
            <p>This is the laravel application from the "laravel from scratch"</p>
            <p> <a class="btn btn-primary btn-lg" href="/login"role="button">login</a>
                   <a class="btn btn-success btn-lg" href="/login"role="button">Register</a> </p>
</div>
        
  @endsection