@extends ('layouts/app')

@section ("content")

    <div class="section results car-overview">
        <div class="container">
            <div class="heading">
                <h3>Posts</h3>
            </div>
            <div class="grid-container">
                @foreach($posts as $post)
                    <div class="column one-third">
                        <a class="full-link-button" href="{{ route('single-page',  $post->post_id) }}"></a>
                        <div class="image-container">
                            <form action="{{ route('delete-post', $post->post_id) }}" method="post">
                                @csrf

                                @if($post->user_id == Auth::id())
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="post_id" value="{{ $post->post_id }}">
                                <div class="button-wrap">
                                    <button class="button background-red" type="submit">Delete</button>
                                </div>
                                    @else
                                    <input type="hidden" name="postid" value="{{ $post->post_id }}">
                                    <div class="button-wrap">
                                        <button class="button background-red" type="submit">Report</button>
                                    </div>
                                @endif
                            </form>
                            <img src="https://picsum.photos/400/400" alt="">
                            <div class="owner">{{$post->user_name}}</div>
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
