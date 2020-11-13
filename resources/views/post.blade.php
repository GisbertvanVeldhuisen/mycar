@extends ('layouts/app')

@section ("content")
    <div class="section form">
        <div class="container">
            @guest
                @if(Auth::guest())<h1>U moet een account aanmaken om een post te kunnen maken</h1>
                @endif
            @else
                <h1>Post aanmaken</h1>
                <form action="{{--{{url('/post')}}--}}" enctype="multipart/form-data" method="POST">
                @csrf

                <!-- Car content -->
                    <h2 class="title">Car</h2>
                    <h2 class="title">.</h2>

                    <span class="title">Brand</span>
                    <span class="title">Type</span>
                    <select class="field one-half" name="car_brand">

                        <option selected disabled>Select a brand</option>

                        @foreach($brands as $brand)

                            <option>{{ $brand->brand_name }}</option>

                        @endforeach
                    </select>
                    <textarea class="field one-half" name="car_model"></textarea>

                    <span class="title">Year</span>
                    <span class="title">Mileage</span>
                    <input class="field one-half" name="car_buildyear" type="text">
                    <textarea class="field one-half" name="car_mileage"></textarea>

                    <span class="title">Color</span>
                    <span class="title">Horsepower</span>
                    <input class="field one-half" name="car_color" type="text">
                    <textarea class="field one-half" name="car_horsepower"></textarea>


                    <!-- Post content -->
                    <h2 class="title">Post content</h2>
                    <h2 class="title">.</h2>

                    <span class="title">Title</span>
                    <span class="title">Intro below title</span>
                    <input class="field one-half" name="post_title" type="text">
                    <textarea class="field one-half" name="post_intro"></textarea>

                    <span class="title">Text left image</span>
                    <span class="title">Image right</span>
                    <textarea class="field one-half" name="post_left_text"></textarea>
                    <input class="field one-half" type="file" name="image-left-text">

                    <span class="title">Image left</span>
                    <span class="title">Text right image</span>
                    <input class="field one-half" type="file" name="image-right-text">
                    <textarea class="field one-half" name="post_right_text"></textarea>

                    <input type="submit">

                </form>
        </div>
    </div>
    </div>
    @foreach($posts as $post)
        <p>{{$post->post_title}}</p>
        <form action="" method="post">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="post_id" value="{{ $post->post_id }}">
            <a href="{{ route('single-page',  $post->post_id) }}">Bekijk</a><br>
            <div class="button background-red">
                <button class="button background-red" type="submit">Delete</button>
            </div>
            <br>
        </form>
    @endforeach()
    @endguest
@endsection
