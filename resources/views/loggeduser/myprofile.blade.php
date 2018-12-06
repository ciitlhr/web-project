@extends('layouts.app2')

@section('content')
<div class="row">
    <div class="col-md-12 col-md-offset-1">
        <img src="uploads/avatars/{{$user->avatar}}" style="width:250px; height:250px; float:left; border-radius:50%; margin-right:25px;">
        <br>
        <h1>{{ $user->name }}'s Profile</h1>
        <form enctype="multipart/form-data" action=" {{ url('/myprofile') }} " method="POST">
            <label>Update Profile Picture</label>
            <input type="file" name="avatar">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="btn btn-primary" style="float:right;">

        </form>
    </div>
</div>
@endsection