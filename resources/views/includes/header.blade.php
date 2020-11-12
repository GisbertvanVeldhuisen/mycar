<header id="header" class="menu">
    <div class="container">
        <div class="menu-container">
            <div class="menu-container">
                <div class="logo-container">
                    <a href="{{ url('/') }}"><img src="{{ asset('/storage/logo.png') }}"></a>
                </div>
                <div class="main-menu-container">
                    <a class="menu-item" href="{{ url('/car') }}">Cars</a>
                    @auth
                        @if(Auth::user()->admin == 1)
                            <a class="menu-item" href="{{ url('/admin') }}">Admin</a>
                        @endif
                    @endauth
                    @guest
                        <a class="menu-item button background-gray"
                           href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="menu-item button background-gray"
                               href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else

                        {{--<a id="navbarDropdown" class="menu-item nav-link dropdown-toggle" href="{{  Auth::user()->name  }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                        <a id="navbarDropdown" class="menu-item nav-link dropdown-toggle" href="{{ Auth::user()->name }}" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu background-tertairy dropdown-menu-right"
                             aria-labelledby="navbarDropdown">
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
                <div class="responsive-menu">

                </div>
            </div>
        </div>
    </div>
</header>
