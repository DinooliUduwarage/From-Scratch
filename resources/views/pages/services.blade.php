@extends('layouts.app')
@section('content')
        <h1>Welcome to Services</h1>
        <p>This is the laravel application from the "laravel from scratch"</p>

        @if(count($services) > 0 )
        <ul class="list-group">
        @foreach ($services as $srvc)
           <li class="list-group-item">{{$srvc}} </li>
        @endforeach
        </ul>
        @endif
  @endsection