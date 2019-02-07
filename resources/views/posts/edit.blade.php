@extends('layouts.app') <!--extending the layout-->
@section('content')


<!--https://laravelcollective.com/docs/master/html-->
<h1>Edit Post</h1>
{!! Form::open(['action' => ['PostsController@update',$post->id],'method'=>'POST']) !!} <!--store function-->
    <div class="form-group">
           {{Form::label('title', 'Title')}} 
           {{Form::text('title', $post->Title,['class'=>'form-control','placeholder'=>'Enter the Title'])}}<!--prefilled-->
    </div>

    <div class="form-group">
            {{Form::label('body', 'Post Body')}} 
            {{Form::textarea('body', $post->Body,['class'=>'form-control','placeholder'=>'Enter the Body'])}}
     </div>
     <div class="btn btn-info">Add another Post</div>
     <!--if button on click    https://itsolutionstuff.com/post/laravel-dynamically-add-or-remove-input-fields-using-jqueryexample.html-->


     {{Form::hidden('_method','PUT')}}<!--PUT REQUEST-->
     {{Form::submit('submit',['class'=>'btn btn-success'])}}

{!! Form::close() !!}


@endsection