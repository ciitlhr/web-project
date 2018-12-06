@extends('layouts.app2')

@section('content')

<a class="btn btn-outline-primary" href="/myblog/public/blog">Go Back</a>
<br>
<br>
<h1>{{$post->title}}</h1>
<p style="font-family:Roboto">{{$post->body}}</p>
<hr>
Written on
<small> {{$post->created_at}}</small>
<br>
<br>

@if($post->user_id == Auth::user()->id)
<a class="btn btn-success" style="display:inline;" href="/myblog/public/posts/{{$post->id}}/edit">Edit Post</a>

{!! Form::open([ 'action'=> [ 'PostsController@destroy' , $post->id] ,  'method' => 'POST' , 'style'=>'display:inline;'  ] ) !!}
{{ Form::hidden('_method','DELETE')   }}
{{ Form::submit('Delete', ['class' => 'btn btn-danger'])   }} 
{!! Form::close() !!}



@endif


@endsection