@extends('layouts.app2')

@section('content')
<h1>Create Posts</h1>

{!! Form::open(['action' => 'PostsController@store', 'method' => 'Post']) !!}
<div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '',  ['class' => 'form-control' , 'placeholder' => 'Title']   )}}
    </div>

    <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body','',   [  'id' => 'article-ckeditor',  'class'=> 'form-control'  ,'placeholder'=>'Body text' ]    )}}
       </div>

       {{Form::submit('Submit' ,['class'=>'btn btn-success'])}}


{!! Form::close() !!}

@endsection