@extends ('layouts/app')

@section ("content")
    <div class="section header"
         style="background-image: url(https://picsum.photos/400/400); background-repeat: no-repeat; background-size: cover; height: 400px">
        <div class="container">
            <div class="column full">
                <div class="heading">
                    <h1>
                        {{$homeinfo->title}}
                    </h1>
                    <span class="intro">
                            {{$homeinfo->intro_text}}
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="section tekstblock" style="">
        <div class="container">
            <div class="column one-half">
                <p>
                    {{$homeinfo->text_image}}
                </p>
            </div>

            <div class="column one-half image right">
                <div class="image">
                    <img src="{{ asset('/storage/L3mWNWYvOnKjGhy4yqlQBk4PTut8zhiSAtyhd5Rh.jpeg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection