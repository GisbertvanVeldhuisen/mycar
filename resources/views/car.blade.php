@extends ('layouts/app')




@section('meta')
    <meta name="title" content="Search for a car">
    <meta name="description" content="Take a look and maybe find your new car">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://mycar/car.nl/">
    <meta property="og:title" content="Search for a car">
    <meta property="og:description" content="Take a look and maybe find your new car">
    <meta property="og:image" content="{{asset('/storage/logo.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://mycar/car.nl/">
    <meta property="twitter:title" content="Search for a car">
    <meta property="twitter:description" content="Take a look and maybe find your new car">
    <meta property="twitter:image" content="{{asset('/storage/logo.png') }}">

    <meta name="title" content="Search for a car">
    <meta name="description" content="Take a look and maybe find your new car">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://mycar/car.nl/">
    <meta property="og:title" content="Search for a car">
    <meta property="og:description" content="Take a look and maybe find your new car">
    <meta property="og:image" content="{{asset('/storage/logo.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://mycar/car.nl/">
    <meta property="twitter:title" content="Search for a car">
    <meta property="twitter:description" content="Take a look and maybe find your new car">
    <meta property="twitter:image" content="{{asset('/storage/logo.png') }}">
@endsection

@section ("content")
    {{--Alle autos overzicht--}}
    <div class="section header"
         style="background-image: url({{ asset('/storage/header-image.png') }}); background-repeat: no-repeat; background-size: cover; height: 400px">
        <div class="container">
            <div class="column full">
                <div class="heading">
                    <h1>Search for a car</h1>
                    <span class="intro">Take a look and maybe find your new car</span>
                </div>
            </div>
        </div>
    </div>
    <div class="section filter" style="">
        <div class="container">
            <div class="heading">
                <h3>filter</h3>
            </div>
            <div class="column full">
                <div class="filter">
                    <div class="brands">
                        <form method="get">

                            <select title="select" name="category">
                                @foreach($brands as $brand)

                                    <option @if($cat == $brand->brand_name) selected
                                            @endif value="{{ $brand->brand_name }}">
                                        {{ $brand->brand_name }}
                                    </option>

                                @endforeach
                            </select>

                            <input type="submit" value="Submit">
                        </form>
                    </div>
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
                            <div class="button-wrap">
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