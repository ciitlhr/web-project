@extends('layouts.app')

@section('content')
    <header class="v-header">
        <div class="video-wrap">
            <video src="videos/backgroundvideo.mov" autoplay="true" loop="true">

            </video>
        </div>
        <div class="header-overlay">
        </div>
        <div class="header-content container text-center">
            <h1 class="heading py-1" style="font-family: 'Dosis', sans-serif ">Hellow There, want to read about us!</h1>
            <p class="para py-1" style="font-family: 'Roboto', sans-serif ">We know our success lies in your satisfaction! So hope to see wonderful new key elements in our application and stay tuned about the improvements we make for you 
                and help you in sharing information with each other!
            </p>
            <a href="#" class="btn btn-danger btn-lg">Read More!</a>
        </div>
    </header>

    <section>
        <div class="container text-center my-5">
                <h1 style="font-family: 'Dosis', sans-serif ">How did we start!</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi cupiditate animi, laboriosam consectetur similique amet nam iure minima rem reprehenderit repudiandae porro unde ad molestias doloribus saepe dignissimos vel modi!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque dolores optio ex asperiores. Doloremque iste, beatae quo expedita in reiciendis rem laborum deserunt atque vero molestias soluta veritatis dolore quia?
                </p>
            </div>
    </section>

    <section>
            <div class="container text-center my-5">
                    <h1 style="font-family: 'Dosis', sans-serif ">Our Company</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi cupiditate animi, laboriosam consectetur similique amet nam iure minima rem reprehenderit repudiandae porro unde ad molestias doloribus saepe dignissimos vel modi!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque dolores optio ex asperiores. Doloremque iste, beatae quo expedita in reiciendis rem laborum deserunt atque vero molestias soluta veritatis dolore quia?
                    </p>
                </div>
        </section>
@endsection