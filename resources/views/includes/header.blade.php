<header id="header" class="menu">
    <div class="container">
        <div class="menu-container">
            <div class="menu-container">
                <div class="logo-container">
                    <img src="https://picsum.photos/200/75">
                </div>
                <div class="main-menu-container">
                    <a class="menu-item" href="#">linkie</a>
                    <a class="menu-item" href="#">linkie</a>
                    @guest
                        <a class="menu-item button background-gray" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="menu-item button background-gray" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
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
                <div class="responsive-menu">

                </div>
            </div>
        </div>
    </div>
</header>