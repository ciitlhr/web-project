@extends('layouts.app2')

@section('content')
  <h1>Posts</h1>


  @if(count($posts) > 0))
  @foreach($posts as $post)
  <div class="card card-body bg-light">
      <h3><a href=" posts/{{$post->id}}/edit">{{$post->title}}</a></h3>
      <small>Writen on {{$post->created_at}} by {{ Auth::user()->name }}</small>
    </div>
    <br>
  @endforeach
  @else
  <p>No posts found!</p>
  @endif
@endsection