@extends ('layouts/app')

@section ("content")

        <div class="container">
            <div class="column full">
                <div class="heading">

                </div>
            </div>

            <div class="section results car-overview">
                <div class="container">
                <div class="heading">
                    <h3>Posts</h3>
                </div>
                    <div class ="grid-container">
                        @foreach($posts as $post)
                        <a href="{{ route('single-page',  $post->post_id) }}">
                        <div class="column one-third">
                            <div class="image-container">
                            <form action="{{ route('delete-post', $post->post_id) }}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="post_id" value="{{ $post->post_id }}">


                                {{--<div class="button background-red">--}}
                                    {{--<button class="button background-red" type="submit">Delete</button>--}}
                                {{--</div>--}}
                            </form>
                                <img src="https://picsum.photos/400/400" alt="">
                                <div class="owner">{{Auth::user->name}}</div>
                                <div class="brand">{{ $post->car_brand }}</div>
                                <div class="button-wrap">
                                    <a class="button background-tertairy" href="#">
                                        <span class="button-title">like</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach()
                    </div>
                </div>
            </div>

        </div>

@endsection
