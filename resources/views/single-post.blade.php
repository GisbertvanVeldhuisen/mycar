@extends ('layouts/app')

@section ("content")
    <div class="section header"
         style="background-image: url(https://picsum.photos/400/400); background-repeat: no-repeat; background-size: cover; height: 400px">
        <div class="container">
            <div class="column full">
                <div class="heading">
                    <h1>{{ $posts ->post_title }}</h1>
                    <span class="intro">{{ $posts->post_intro }}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="section tekstblock" style="">
        <div class="container">
            <div class="column one-half">
                <p>{{ $posts ->post_left_text }}</p>
            </div>

            <div class="column one-half image right">
                <div class="image">
                    <img src="https://picsum.photos/400/400" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="section tekstblock" style="">
        <div class="container">
            <div class="column one-half image left">
                <div class="image">
                    <img src="https://picsum.photos/400/400" alt="">
                </div>
            </div>
            <div class="column one-half">
                <p>{{ $posts ->post_right_text }}</p>
            </div>
        </div>
    </div>

    <div class="section reactions" style="">
        <div class="container">
            <div class="heading">
                <h3>reactions</h3>
            </div>

            <form action="{{url('/post/{post:post_id}')}}" method="post" class="column full">
                @csrf


                <textarea placeholder="Laat hier een reactie achter..." name="comment_content" class="new-reaction"></textarea>

            <input type="submit">
            </form>


        @foreach($comments as $comment)

            <div class="column full">
                <p class="reaction">{{$comment->comment_content}}</p>
                <p class="username">{{ $comment->user->name }}</p>
                <span style="color:white">{{$comment->created_at->diffForHumans()}}</span>


            </div>



                {{--                Delete--}}
                <form action="{{route('delete-comment', $comment->comment_id) }}" method="post">
                    @csrf
                    @if($comment->user_id == Auth::id())
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="comment_id" value="{{ $comment->comment_id }}">
                    <div class="button-wrap">
                        <button class="button background-red" type="submit">Delete</button>
                    </div>

                @else

            @endif
            </form>

            @endforeach


        </div>
    </div>
    </div>
@endsection
