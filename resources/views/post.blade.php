@extends ('layouts/app')

@section ("content")

    {{--Post aanmaken--}}
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
                    <div class="heading">
                        <h3>Car</h3>
                    </div>


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
                    <h2 class="title full">Post content</h2>


                    <span class="title">Title</span>
                    <span class="title">Intro below title</span>
                    <input class="field one-half" name="post_title" type="text">
                    <textarea class="field one-half" name="post_intro"></textarea>

                    <span class="title">Text left image</span>
                    <span class="title">Image right</span>
                    <textarea class="field one-half" name="post_left_text"></textarea>
                    <div class="file-upload field one-half">
                        <input type="file" name="image-left-text">
                        <div class="error">{{ $errors->first('image-left-text') }}</div>
                    </div>


                    <span class="title">Image left</span>
                    <span class="title">Text right image</span>
                    <div class="file-upload field one-half">
                        <input type="file" name="image-right-text">
                        <div class="error">{{ $errors->first('image-right-text') }}</div>
                    </div>
                    <textarea class="field one-half" name="post_right_text"></textarea>

                    <input type="submit">

                </form>
        </div>
    </div>

    @endguest
@endsection
