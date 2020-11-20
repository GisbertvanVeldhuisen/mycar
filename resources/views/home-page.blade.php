@extends ('layouts/app')
@section('meta')
    <meta name="title" content="{{$homeinfo->title}}">
    <meta name="description" content="{{$homeinfo->post_intro}}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://{{$homeinfo->title}}.nl/">
    <meta property="og:title" content="{{$homeinfo->title}}">
    <meta property="og:description" content="{{$homeinfo->post_intro}}">
    <meta property="og:image" content="{{asset('/storage/logo.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{$homeinfo->title}}.nl/">
    <meta property="twitter:title" content="{{$homeinfo->title}}">
    <meta property="twitter:description" content="{{$homeinfo->post_intro}}">
    <meta property="twitter:image" content="{{asset('/storage/logo.png') }}">

    <meta name="title" content="{{$homeinfo->title}}">
    <meta name="description" content="{{$homeinfo->post_intro}}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://{{$homeinfo->title}}.nl/">
    <meta property="og:title" content="{{$homeinfo->title}}">
    <meta property="og:description" content="{{$homeinfo->post_intro}}">
    <meta property="og:image" content="{{asset('/storage/logo.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://{{$homeinfo->title}}.nl/">
    <meta property="twitter:title" content="{{$homeinfo->title}}">
    <meta property="twitter:description" content="{{$homeinfo->post_intro}}">
    <meta property="twitter:image" content="{{asset('/storage/logo.png') }}">
@endsection

@section ("content")
    {{--homepagina--}}
    <div class="section header"
         style="background-image: url({{ asset('/storage/header-image.png') }}); background-repeat: no-repeat; background-size: cover; height: 400px">
        <div class="container">
            <div class="column full">
                <div class="heading">
                    <h1>
                        @if(!empty($homeinfo->title))
                            {{$homeinfo->title}}
                        @endif
                    </h1>
                    <span class="intro">
                    @if(!empty($homeinfo->intro_text))
                            {{$homeinfo->intro_text}}
                        @endif
                </span>
                </div>
            </div>
        </div>
    </div>
    <div class="section tekstblock" style="">
        <div class="container">
            <div class="column one-half">
                <p>
                    @if(!empty($homeinfo->text_image))
                        {{$homeinfo->text_image}}
                    @endif
                </p>
            </div>

            <div class="column one-half image right">
                <div class="image">
                    <img src="{{ asset('/storage/image-text.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="section results car-overview">
        <div class="container">
            <div class="heading">
                <h3>Results</h3>
            </div>
            <div class="grid-container">
                @foreach($cars as $car)

                    <div class="column one-third">
                        <div class="image-container">
                            <a class="full-link-button" href="{{ route('single-page',  $car->post_id) }}"></a>
                            <form method="post">
                                @csrf
                                <input type="hidden" name="postid" value="{{ $car->post_id }}">
                                <div class="button-wrap">
                                    <button class="button background-red" type="submit">Report</button>
                                </div>
                            </form>
                            <img src="{{asset('/storage/'.$car->post_id.'image-left-text.png') }}" alt="">
                            <div class="owner">{{ $car->user_name }}</div>
                            <div class="brand">{{ $car->car_brand }}</div>
                            <div class="button-wrap like">
                                <a class="button background-tertairy" href="#">
                                    <span class="button-title">like</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection