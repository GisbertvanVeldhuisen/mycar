@extends ('layouts/app')


@section ("content")
    {{--admin pagina--}}
    <div class="section users" style="">
        <div class="container">
            <div class="heading">
                <h3>
                    users

                    <span>
                            @if($amount ?? '' >= 1)
                            [{{$amount ?? ''}}]
                        @endif
                        </span>
                </h3>
            </div>

            @if($amount ?? '' >= 1)

                @foreach($users as $user)

                    <div class="column full">
                        <div class="user">
                            <p class="username">[{{ $user->id }}] {{ $user->name }} <br
                                >{{ $user->email }}</p>

                            <div class="button-row">
                                <form action="" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $user->id }}">
                                    <div class="button-wrap">
                                        <button class="button background-red" type="submit">Delete</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                @endforeach

            @elseif($amount ?? '' == 0)

                <div class="column full">
                    <div class="user">
                        {{ 'no users found' }}
                    </div>
                </div>

            @endif
        </div>
    </div>

    <div class="section reported-posts results car-overview">
        <div class="container">
            <div class="heading">
                <h3>Reported posts</h3>
            </div>
            <div class="grid-container">
                @if($report)
                    @foreach($report as $car)
                        <div class="column one-third">
                            <div class="image-container">
                                <a class="full-link-button" href="{{ route('single-page',  $car->post_id) }}"></a>
                                <form action="" method="post">
                                    @csrf
                                    <input type="hidden" name="post_id" value="{{ $car->post_id }}">
                                    <div class="button-wrap">
                                        <button class="button background-red" type="submit">Delete</button>
                                    </div>
                                </form>
                                <img src="{{asset('/storage/'.$car->post_id.'image-left-text.png') }}" alt="">
                                <div class="owner">Owner</div>
                                <div class="brand">{{ $car->car_brand }}</div>
                                <div class="button-wrap">

                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="column full">
                        <p>No reported posts found</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
