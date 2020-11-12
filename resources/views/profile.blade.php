@extends ('layouts/app')

@section ("content")

        <div class="container">
            <div class="column full">
                <div class="heading">

                </div>
            </div>

            @foreach($posts as $post)
                <p>{{$post->post_title}}</p>
                <form action="" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="post_id" value="{{ $post->post_id }}">
                    <a href="{{ route('single-page',  $post->post_id) }}">Bekijk</a><br>
                    <div class="button background-red">
                        <button class="button background-red" type="submit">Delete</button>
                    </div>
                    <br>
                </form>
            @endforeach
        </div>

@endsection
