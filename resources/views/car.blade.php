@include('includes/head')
<body id="root">
<div id="wrap_all">
    @include('includes/header')
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

                                    <option @if($cat == $brand->brand_name) selected @endif value="{{ $brand->brand_name }}">
                                        {{ $brand->brand_name }}
                                    </option>

                                @endforeach
                            </select>

                            <input type="text" title="color" name="color" placeholder="red">

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
</div>
@include('includes/footer')
@include('includes/socket')
</body>