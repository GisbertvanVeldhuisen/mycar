@extends ('layouts/app')

@section ("content")
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
                    @if(!empty($homeinfo->intro_image))
                        {{$homeinfo->text_image}}
                    @endif
                </p>
            </div>

            <div class="column one-half image right">
                <div class="image">
                    <img src="{{ asset('/storage/image-text.jpg') }}" alt="">
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
                            <form method="post">
                                @csrf
                                <input type="hidden" name="postid" value="{{ $car->post_id }}">
                                <div class="button-wrap">
                                    <button class="button background-red" type="submit">Report</button>
                                </div>
                            </form>
                            <img src="https://picsum.photos/400/400" alt="">
                            <div class="owner">Owner</div>
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