@extends('layouts.app')

@section('content')
                
<div id="example"></div>

<div class="jumbotron text-center">

        <div class="container">
                <h1 class="jumbotron-heading" style="font-family: 'Dosis', sans-serif ">What do we offer?</h1>
                <p class="para" style="font-family: 'Roboto', sans-serif ">Blogger.com helps you create posts and share them among peple, just like a website. You can have your own domain as well. It definitely helps you sharing important details and find
                        out the answers if you like. The good thing about bloggers.com is people can give a comment on your posts, means they also can share details regarding the post. 
                </p>
                <a href="{{ route('register') }}" class="btn btn-dark btn-lg">Get Started!</a>
        </div>
        
</div>


<div class="container">
        <div class="row">
                <div class="col-md-6 text-center">
                        <h1>Creating a Post</h1>
                        <p>The app offers great reliability and good user experience!</p>
                </div>

                <div class="col-md-6 text-center">
                        <h1>Modifying Your posts</h1>
                        <p>Security is one of our main concerns and we can absolutely take care of it!</p>
                </div>
        </div>
</div>



    
@endsection