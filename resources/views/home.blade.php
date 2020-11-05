@extends ('layouts/app')

@section ("content")
    <div class="section login-succes">
        <div class="container">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="heading">
                <h3>{{ __('You are logged in!') }}</h3>
            </div>
            <div class="button-wrap">
                <a href="/" class="button background-tertairy">
                    <span class="button-title">Return to home</span>
                </a>
            </div>
        </div>
    </div>
    <div class="section car-overview" style="">
        <div class="container">
            <div class="heading">
                <h3>car overview</h3>
            </div>
            <div class="grid-container">
                <div class="column one-third">
                    <div class="image-container">
                        <img src="https://picsum.photos/400/400" alt="">
                        <div class="owner">eigenaar</div>
                        <div class="brand">brand</div>
                        <div class="button-wrap">
                            <a class="button background-tertairy" href="#">
                                <span class="button-title">like</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="column one-third">
                    <div class="image-container">
                        <img src="https://picsum.photos/400/400" alt="">
                        <div class="owner">eigenaar</div>
                        <div class="brand">brand</div>
                        <div class="button-wrap">
                            <a class="button background-tertairy" href="#">
                                <span class="button-title">like</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="column one-third">
                    <div class="image-container">
                        <img src="https://picsum.photos/400/400" alt="">
                        <div class="owner">eigenaar</div>
                        <div class="brand">brand</div>
                        <div class="button-wrap">
                            <a class="button background-tertairy" href="#">
                                <span class="button-title">like</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection