<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Primary Meta Tags -->

    <title>My car</title>

    @yield('meta')

    <!-- Site includes -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body id="root">
<div id="wrap_all">
    @include('includes/header')
    @yield('title')
    @yield('content')

</div>
</body>
<div class="footer">
    <div class="container">
        <div class="main-menu-container">
            <a class="menu-item" href="{{ url('/car') }}">Cars</a>


            @auth
                @if(Auth::user()->admin == 1)
                    <a class="menu-item" href="{{ url('/admin') }}">Admin</a>
                @endif
            @endauth
            @guest
                <a class="menu-item button background-gray" href="{{ route('login') }}">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a class="menu-item button background-gray" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            @else
                <a id="navbarDropdown" class="menu-item nav-link dropdown-toggle" href="#" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
                <a class="menu-item button background-primary" href="{{ url('/post') }}">Create a post</a>
                <div class="dropdown-menu background-tertairy dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="menu-item dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            @endguest


        </div>
        <div class="logo-container">
            <img src="{{ asset('/storage/logo.png') }}">
        </div>
    </div>
</div>
<div class="socket">
    <div class="container">
        <p>Copyright © 2020 Mycar Netherlands, All rights reserved. Website built by MyCar</p>
    </div>
</div>
</html>
