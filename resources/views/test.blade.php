<html>
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
                        <h1>home page edit</h1>
                        <span class="intro">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Error ex pariatur praesentium quo tempore temporibus vel vero voluptate.
                    </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="section form">
            <div class="container">
                <form class="home-edit" method="POST" action="">
                    @csrf
                    <div class="heading">
                        <h3>homepage edit</h3>
                    </div>
                    <input class="field one-half" placeholder="title" name="title" type="text">
                    <textarea class="field one-half" name="intro" placeholder="intro tekst.."></textarea>
                    {{--<input class="field one-half" type="file">--}}
                        <textarea class="field one-half" name="text" placeholder="tekst in blok naast afbeelding"></textarea>
                    <input value="Bijwerken" type="submit">
                </form>
            </div>
        </div>
    </div>
</div>
@include('includes/footer')
@include('includes/socket')
</body>
</html>