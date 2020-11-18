@extends ('layouts/app')
@section('meta')
    <meta name="title" content="@if(isset($posts->post_title)){{$posts->post_title}}@else{{$homeinfo->title}}@endif">
    <meta name="description" content="@if(isset($posts->post_intro)){{$posts->post_intro}}@else{{$homeinfo->intro_text}}@endif">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://@if(isset($posts->post_title)){{$posts->post_title}}@else{{$homeinfo->title}}@endif.nl/">
    <meta property="og:title" content="@if(isset($posts->post_title)){{$posts->post_title}}@else{{$homeinfo->title}}@endif">
    <meta property="og:description" content="@if(isset($posts->post_intro)){{$posts->post_intro}}@else{{$homeinfo->intro_text}}@endif">
    <meta property="og:image" content="{{asset('/storage/'.$posts->post_id.'image-left-text.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://@if(isset($posts->post_title)){{$posts->post_title}}@else{{$homeinfo->title}}@endif.nl/">
    <meta property="twitter:title" content="@if(isset($posts->post_title)){{$posts->post_title}}@else{{$homeinfo->title}}@endif">
    <meta property="twitter:description" content="@if(isset($posts->post_intro)){{$posts->post_intro}}@else{{$homeinfo->intro_text}}@endif">
    <meta property="twitter:image" content="{{asset('/storage/'.$posts->post_id.'image-left-text.png') }}">

    <meta name="title" content="@if(isset($posts->post_title)){{$posts->post_title}}@else{{$homeinfo->title}}@endif">
    <meta name="description" content="@if(isset($posts->post_intro)){{$posts->post_intro}}@else{{$homeinfo->intro_text}}@endif">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://@if(isset($posts->post_title)){{$posts->post_title}}@else{{$homeinfo->title}}@endif.nl/">
    <meta property="og:title" content="@if(isset($posts->post_title)){{$posts->post_title}}@else{{$homeinfo->title}}@endif">
    <meta property="og:description" content="@if(isset($posts->post_intro)){{$posts->post_intro}}@else{{$homeinfo->intro_text}}@endif">
    <meta property="og:image" content="{{asset('/storage/'.$posts->post_id.'image-left-text.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://@if(isset($posts->post_title)){{$posts->post_title}}@else{{$homeinfo->title}}@endif.nl/">
    <meta property="twitter:title" content="@if(isset($posts->post_title)){{$posts->post_title}}@else{{$homeinfo->title}}@endif">
    <meta property="twitter:description" content="@if(isset($posts->post_intro)){{$posts->post_intro}}@else{{$homeinfo->intro_text}}@endif">
    <meta property="twitter:image" content="{{asset('/storage/'.$posts->post_id.'image-left-text.png') }}">
@endsection
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
@endsection
