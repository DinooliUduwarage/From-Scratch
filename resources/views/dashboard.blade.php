@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <hr/>

                    <h4>Your Blog Posts</h4>
                        <hr/>
                        @if(count($posts)>0)
                        <table class="table table-striped">
                            <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                            </tr>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{$post->Title}}</td>
                                 <td><a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a></td>
                                <td><!--delete-->
                                    {!! Form::open(['action' => ['PostsController@destroy', $post->id],'method'=>'POST','class'=>'pull-right']) !!} <!--store function-->
                                       
                                         {{Form::hidden('_method','DELETE')}}
                                         {{Form::submit('delete',['class'=>'btn btn-danger'])}}
                                    
                                    {!! Form::close() !!}</td>
                            </tr>
                            @endforeach

                        </table>
                        @else
                        <p>You have no posts yet!</p>
                        @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
