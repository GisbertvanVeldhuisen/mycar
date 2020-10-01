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
                        @foreach($brands as $brand)
                            <span class="brand">
                                {{ $brand->brand_name }}
                            </span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('includes/footer')
@include('includes/socket')
</body>