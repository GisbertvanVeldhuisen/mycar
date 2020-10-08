@include('includes/head')
<body id="root">
<div id="wrap_all">
    @include('includes/header')
</div>
<div class="main">
    <div class="section header profile"
         style="background-image: url(https://picsum.photos/400/400); background-repeat: no-repeat; background-size: cover; height: 400px">
        <div class="container">
            <div class="column one-half">
                <div class="heading">
                    <h1>{{--@foreach($users as $user)
                            {{$user->id}}
                        @endforeach--}}</h1>
                </div>
            </div>
            <div class="column one-half">
                <div class="image-container">
                    <p>$profileimage</p>
                    <img src="https://picsum.photos/150/150" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="section posts" style="">
        <div class="container">
            <div class="heading">
                <h3>overview own</h3>
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
    <div class="section form info">
        <div class="container">
            <form class="profile-info" method="POST" action="">
                <span class="title">Naam</span>
                <span class="title">Achternaam</span>
                <input class="field one-half" type="text">
                <input class="field one-half" type="text">
                <span class="title">Username</span>
                <span class="title">Wachtwoord</span>
                <input class="field one-half" type="text">
                <input class="field one-half" type="password">
                <span class="title">Email adres</span>
                <input class="field one-full" type="email">
                <input value="submit" type="submit">
            </form>
        </div>
    </div>
</div>
@include('includes/footer')
@include('includes/socket')
</body>