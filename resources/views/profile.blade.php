@extends ('layouts/app')
@section('meta')
    @foreach($posts as $post)

    <meta name="title" content="{{$post->user_name}}">
    <meta name="description" content="take a look at {{$post->user_name}} his posts">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://mycar/user/{{$post->user_name}}.nl/">
    <meta property="og:title" content="{{$post->user_name}}">
    <meta property="og:description" content="take a look at {{$post->user_name}} his posts">
    <meta property="og:image" content="{{asset('/storage/logo.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://mycar/user/{{$post->user_name}}.nl">
    <meta property="twitter:title" content="{{$post->user_name}}">
    <meta property="twitter:description" content="take a look at {{$post->user_name}} his posts">
    <meta property="twitter:image" content="{{asset('/storage/logo.png') }}">

    <meta name="title" content="{{$post->user_name}}">
    <meta name="description" content="take a look at {{$post->user_name}} his posts">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://mycar/user/{{$post->user_name}}.nl">
    <meta property="og:title" content="{{$post->user_name}}">
    <meta property="og:description" content="take a look at {{$post->user_name}} his posts">
    <meta property="og:image" content="{{asset('/storage/logo.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://mycar/user/{{$post->user_name}}.nl">
    <meta property="twitter:title" content="{{$post->user_name}}">
    <meta property="twitter:description" content="take a look at {{$post->user_name}} his posts">
    <meta property="twitter:image" content="{{asset('/storage/logo.png') }}">
    @endforeach
@endsection
@section ("content")
    <div class="section header"
         style="background-image: url({{ asset('/storage/header-image.png') }}); background-repeat: no-repeat; background-size: cover; height: 400px">
        <div class="container">
            <div class="column full">
                <div class="heading">
                    @foreach($posts as $post)
                    <h1>{{$post->user_name}}</h1>

                    <span class="intro">take a look at {{$post->user_name}} his posts</span>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="section results car-overview">
        <div class="container">
            <div class="button-wrap"><a href="{{url('/post')}}" class="button background-tertairy">
                    <span class="button-title">Post maken</span>
                </a>
            </div>
            <div class="heading">
                <h3>Posts</h3>
            </div>
            <div class="grid-container">
                @foreach($posts as $post)
                    <div class="column one-third">
                        <a class="full-link-button" href="{{ route('single-page',  $post->post_id) }}"></a>
                        <div class="image-container">
                            <form action="{{ route('delete-post', $post->post_id) }}" method="post">
                                @csrf

                                @if($post->user_id == Auth::id())
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="post_id" value="{{ $post->post_id }}">
                                    <div class="button-wrap">
                                        <button class="button background-red" type="submit">Delete</button>
                                    </div>
                                @else
                                    <input type="hidden" name="postid" value="{{ $post->post_id }}">
                                    <div class="button-wrap">
                                        <button class="button background-red" type="submit">Report</button>
                                    </div>
                                @endif
                            </form>
                            <img src="{{asset('/storage/'.$post->post_id.'image-left-text.png') }}" alt="">
                            <div class="owner">{{$post->user_name}}</div>
                            <div class="brand">{{ $post->car_brand }}</div>
                            <div class="button-wrap">
                                <a class="button background-tertairy" href="#">
                                    <span class="button-title">like</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach()
            </div>
        </div>
    </div>

    </div>

@endsection
