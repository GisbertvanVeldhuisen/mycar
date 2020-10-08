<html>
@include('includes/head')
<body id="root">

<div id="wrap_all">
    @include('includes/header')
    <div class="main">
        <div class="section form">
            <div class="container">
                <h1>Post aanmaken</h1>
                <form action="{{url('/post')}}" method="post">
                    @csrf

                    <span class="title">Title</span>
                    <span class="title">Intro below title</span>
                    <input class="field one-half" name="post_title" type="text">
                    <textarea class="field one-half" name="post_intro"></textarea>

                    <span class="title">Text left image</span>
                    <span class="title">Image right</span>
                    <textarea class="field one-half" name="post_left_text" ></textarea>
                    <input class="field one-half" type="file">

                    <span class="title">Image left</span>
                    <span class="title">Text right image</span>
                    <input class="field one-half" type="file">
                    <textarea class="field one-half" name="post_right_text"></textarea>
                    <input type="submit">

                </form>
            </div>
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
            </div><br>
        </form>
    @endforeach()
</div>

@include('includes/footer')
@include('includes/socket')

</body>
</html>
