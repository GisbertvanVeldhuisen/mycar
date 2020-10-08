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
                            <h1>{{ $posts->post_title }}</h1>
                            <span class="intro">{{ $posts->post_intro }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section tekstblock" style="">
                <div class="container">
                    <div class="column one-half">
                        <p>{{ $posts->post_left_text }}</p>
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
                        <p>{{ $posts->post_right_text }}</p>
                    </div>
                </div>
            </div>
            <div class="section posts" style="">
                <div class="container">
                    <div class="heading">
                        <h3>overview posts</h3>
                    </div>
                    <div class="grid-container">
                        <div class="column one-third">
                            <div class="image-container">
                                <img src="https://picsum.photos/400/400" alt="">
                                <div class="owner">eigenaar</div>
                                <div class="brand">brand</div>
                                <div class="button-row">
                                    <div class="button-wrap">
                                        <a class="button background-tertairy" href="#">
                                            <span class="button-title">amount of like</span>
                                        </a>
                                    </div>
                                    <div class="button-wrap">
                                        <a class="button background-red" href="#">
                                            <span class="button-title">delete</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column one-third">
                            <div class="image-container">
                                <img src="https://picsum.photos/400/400" alt="">
                                <div class="owner">eigenaar</div>
                                <div class="brand">brand</div>
                                <div class="button-row">
                                    <div class="button-wrap">
                                        <a class="button background-tertairy" href="#">
                                            <span class="button-title">amount of like</span>
                                        </a>
                                    </div>
                                    <div class="button-wrap">
                                        <a class="button background-red" href="#">
                                            <span class="button-title">delete</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column one-third">
                            <div class="image-container">
                                <img src="https://picsum.photos/400/400" alt="">
                                <div class="owner">eigenaar</div>
                                <div class="brand">brand</div>
                                <div class="button-row">
                                    <div class="button-wrap">
                                        <a class="button background-tertairy" href="#">
                                            <span class="button-title">amount of like</span>
                                        </a>
                                    </div>
                                    <div class="button-wrap">
                                        <a class="button background-red" href="#">
                                            <span class="button-title">delete</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section reactions" style="">
                <div class="container">
                    <div class="heading">
                        <h3>reactions</h3>
                    </div>
                    <div class="column full">
                        <textarea placeholder="Laat hier een reactie achter..." class="new-reaction"></textarea>
                    </div>
                    <div class="column full">
                        <p class="reaction">Dit is een geplaaste reactie</p>
                        <p class="username">username</p>
                    </div>
                </div>
            </div>
        </div>
</div>
@include('includes/footer')
@include('includes/socket')
</body>
</html>
