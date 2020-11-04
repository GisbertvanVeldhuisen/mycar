@extends ('layouts/app')


@section ("content")
    <div class="section filter" style="">
        <div class="container">
            <div class="heading">
                <h3>filter</h3>
            </div>
            <div class="column full">
                <div class="filter">
                    <div class="brands">
                        @foreach($brands as $brand)
                            <a class="brand">
                                {{ $brand->brand_name }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section results">
        <div class="container">
            <div class="heading">
                <h3>Results</h3>
            </div>
            <div class="results">
                @foreach($cars as $car)

                    <div>
                        {{ $car->car_brand }}
                    </div>

                @endforeach
            </div>
        </div>
    </div>

@endsection