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
    {{--single post--}}
    <div class="section header"
         style="background-image: url(https://picsum.photos/400/400); background-repeat: no-repeat; background-size: cover; height: 400px">
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
                    <img src="https://picsum.photos/400/400" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="section tekstblock" style="">
        <div class="container">
            <div class="column one-half image left">
                <div class="image">
                    <img src="https://picsum.photos/400/400" alt="">
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

            <form action="{{url('/post/{post:post_id}')}}" method="post" class="column full">
                @csrf


                <textarea placeholder="Laat hier een reactie achter..." name="comment_content" class="new-reaction"></textarea>

            <input type="submit">
            </form>


        @foreach($comments as $comment)

            <div class="column full">
                <p class="reaction">{{$comment->comment_content}}</p>
                <p class="username">{{ $comment->user->name }}</p>
                <span style="color:white">{{$comment->created_at->diffForHumans()}}</span>
            </div>

                {{--                Delete--}}
                <form action="" method="post" class="delete">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="comment_id" value="{{ $comment->comment_id }}">
                    <div class="button background-red">
                        <button class="button background-red" type="submit">Delete</button>
                    </div>
                    <br>
                </form>

            @endforeach


        </div>
    </div>
    </div>
@endsection
