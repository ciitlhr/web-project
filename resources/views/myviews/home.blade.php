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
        <div class="row my-5">
                <div class="col-md-6 col-sm-12 text-center">
                        <h1 style="font-family: 'Dosis', sans-serif ">Creating a Post</h1>
                        <p>The app offers great reliability and good user experience! definitely creating a post is a lot different in blogger.com. You can create live posts
                                means, something different than ordinary posts.
                        </p>
                        <img src="images/bloggingapp.jpeg" class="img-responsive my-3" height="400px" width="550px">
                </div>

                <div class="col-md-6 col-sm-12 text-center">
                        <h1 style="font-family: 'Dosis', sans-serif ">Modifying Your posts</h1>
                        <p>Security is one of our main concerns and we can absolutely take care of it!</p>
                </div>
        </div>
</div>

<div id="fixed"></div>

<section id="section" class="container">
        <div class="row my-5">
                <div class="col-md-12 text-center">
                        <div class="live_post_div">
                          <h1 style="font-family: 'Dosis', sans-serif" class="my-5">What is a live Post? Try this out!</h1>        
                        </div>
                        <input type="text" class="form-control">
                </div>
        </div>

</section>



    
@endsection