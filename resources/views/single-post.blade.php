@extends ('layouts/app')

@section ("content")

    <div class="section header"
         style="background-image: url({{ asset('/storage/header-image.png') }}); background-repeat: no-repeat; background-size: cover; height: 400px">
        <div class="container">
            <div class="column full">
                <div class="heading">
                    <h1>{{ $posts ->post_title }}</h1>
                    <span class="intro">{{ $posts->post_intro }}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="section tekstblock" style="">
        <div class="container">
            <div class="column one-half">
                <p>{{ $posts ->post_left_text }}</p>
            </div>

            <div class="column one-half image right">
                <div class="image">
                    <img src="{{ asset('/storage/'.$posts->post_id.'image-right-text.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="section tekstblock" style="">
        <div class="container">
            <div class="column one-half image left">
                <div class="image">
                    <img src="{{ asset('/storage/'.$posts->post_id.'image-left-text.png') }}" alt="">
                </div>
            </div>
            <div class="column one-half">
                <p>{{ $posts ->post_right_text }}</p>
            </div>
        </div>
    </div>

    <div class="section reactions" style="">
        <div class="container">
            <div class="heading">
                <h3>reactions</h3>
            </div>
            <div class="column full">
                <textarea placeholder="Laat hier een reactie achter..." class="new-reaction"></textarea>
            </div>
            <div class="column full">
                <p class="reaction">Dit is een geplaaste reactie</p>
                <p class="username">username</p>
            </div>
        </div>
    </div>






    </div>
@endsection
