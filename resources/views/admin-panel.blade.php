@extends ('layouts/app')


@section ("content")
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
                            <p class="username">[{{ $user->id }}] {{ $user->name }} <br>{{ $user->email }}</p>

                            <div class="button-row">
                                <div class="button-wrap">
                                    <a class="button ghost" href="#">
                                        <span class="button-title">ban</span>
                                    </a>
                                </div>

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
                @if(!$report->isEmpty())
                    @foreach($report as $car)
                        <div class="column one-third">
                            <div class="image-container">
                                <img src="https://picsum.photos/400/400" alt="">
                                <div class="owner">Owner</div>
                                <div class="brand">{{ $car->car_brand }}</div>
                                <div class="button-wrap">
                                    <form action="" method="post">
                                        @csrf
                                        <input type="hidden" name="post_id" value="{{ $car->post_id }}">
                                        <div class="button-wrap">
                                            <button class="button background-tertairy" type="submit">Delete</button>
                                        </div>
                                    </form>
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
