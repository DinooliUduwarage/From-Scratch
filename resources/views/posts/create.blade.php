
@extends('layouts.app') <!--extending the layout-->
@section('content')


<!--https://laravelcollective.com/docs/master/html-->
<h1>Create Post</h1>
{!! Form::open(['action' => 'PostsController@store','method'=>'POST']) !!} <!--store function-->
    <div class="form-group">
           {{Form::label('title', 'Title')}} 
           {{Form::text('title', '',['class'=>'form-control','placeholder'=>'Enter the Title'])}}
    </div>

    <div class="form-group">
            {{Form::label('body', 'Post Body')}} 
            {{Form::textarea('body', '',['class'=>'form-control','placeholder'=>'Enter the Body'])}}
     </div>
     <div class="btn btn-info">Add another Post</div>
     <!--if button on click    https://itsolutionstuff.com/post/laravel-dynamically-add-or-remove-input-fields-using-jqueryexample.html-->

     {{Form::submit('submit',['class'=>'btn btn-success'])}}

{!! Form::close() !!}

@endsection