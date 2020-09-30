<html>
@foreach($homeinfo as $home)
@include('includes/head')
<body id="root">
<div id="wrap_all">
    @include('includes/header')
    <div class="main">
        <div class="section header"
             style="background-image: url(https://picsum.photos/400/400); background-repeat: no-repeat; background-size: cover; height: 400px">
            <div class="container">
                <div class="column full">
                    <div class="heading">
                        <h1>{{$home->title}}</h1>
                        <span class="intro">
                        {{$home->intro_text}}
                    </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="section tekstblock" style="">
            <div class="container">
                <div class="column one-half">
                    <p>{{$home->text_image}}</p>
                </div>

                <div class="column one-half image right">
                    <div class="image">
                        <img src="https://picsum.photos/400/400" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('includes/footer')
@include('includes/socket')
@endforeach

</body>
</html>