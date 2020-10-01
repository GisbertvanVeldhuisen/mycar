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
                        <h1>elementen pagina</h1>
                        <span class="intro">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Error ex pariatur praesentium quo tempore temporibus vel vero voluptate.
                    </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="section header profile"
             style="background-image: url(https://picsum.photos/400/400); background-repeat: no-repeat; background-size: cover; height: 400px">
            <div class="container">
                <div class="column one-half">
                    <div class="heading">
                        <h1>username</h1>
                        <span class="intro">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Error ex pariatur praesentium quo tempore temporibus vel vero voluptate.
                    </span>
                    </div>
                </div>
                <div class="column one-half">
                    <div class="image-container">
                        <img src="https://picsum.photos/150/150" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="section tekstblock" style="">
            <div class="container">
                <div class="column one-half">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias aliquam animi consequuntur
                        deleniti eum facere hic, incidunt magnam minus numquam perspiciatis quidem voluptate. Id laborum
                        minus nulla quasi totam!</p>
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias aliquam animi consequuntur
                        deleniti eum facere hic, incidunt magnam minus numquam perspiciatis quidem voluptate. Id laborum
                        minus nulla quasi totam!</p>
                </div>
            </div>
        </div>

        <div class="section car-overview" style="">
            <div class="container">
                <div class="heading">
                    <h3>car overview</h3>
                </div>
                <div class="grid-container">
                    <div class="column one-third">
                        <div class="image-container">
                            <img src="https://picsum.photos/400/400" alt="">
                            <div class="owner">eigenaar</div>
                            <div class="brand">brand</div>
                            <div class="button-wrap">
                                <a class="button background-tertairy" href="#">
                                    <span class="button-title">like</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="column one-third">
                        <div class="image-container">
                            <img src="https://picsum.photos/400/400" alt="">
                            <div class="owner">eigenaar</div>
                            <div class="brand">brand</div>
                            <div class="button-wrap">
                                <a class="button background-tertairy" href="#">
                                    <span class="button-title">like</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="column one-third">
                        <div class="image-container">
                            <img src="https://picsum.photos/400/400" alt="">
                            <div class="owner">eigenaar</div>
                            <div class="brand">brand</div>
                            <div class="button-wrap">
                                <a class="button background-tertairy" href="#">
                                    <span class="button-title">like</span>
                                </a>
                            </div>
                        </div>
                    </div>
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
        <div class="section filter" style="">
            <div class="container">
                <div class="heading">
                    <h3>filter</h3>
                </div>
                <div class="column full">
                    <div class="filter">
                        <div class="brands">
                       <span class="brand">
                           auto merk
                       </span>
                            <span class="brand">
                           auto merk
                       </span>
                            <span class="brand">
                           auto merk
                       </span>
                            <span class="brand">
                           auto merk
                       </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="main-menu-container">
            <a class="menu-item" href="#">linkie</a>
            <a class="menu-item" href="#">linkie</a>
            <a class="menu-item button" href="#">sign in</a>
        </div>
        <div class="logo-container">
            <img src="https://picsum.photos/200/100">
        </div>
    </div>
</div>
<div class="socket">
    <div class="container">
        <p>Copyright © 2020 Mycar Netherlands, All rights reserved. Website built by MyCar</p>
    </div>
</div>
</body>
</html>