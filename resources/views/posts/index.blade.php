@extends('layouts.app') <!--extending the layout-->
@section('content')
<h1>Posts</h1>   

@if(count ($posts)>0)  
@foreach ($posts as $post)
 <div class="well well-small">
        <h3><a href="/posts/{{$post->id}}">{{$post->Title}}</a></h3>
         <small>Written on {{$post->created_at}}</small> <!--cudnt pass posts user name-->
        <!--  <h3>{{$post->Body}}</h3>-->
</div>
@endforeach
<!--pagination{$posts->links)}}-->
@else
<p> No Posts found</p>
@endif  
@endsection

