<html>
@include('includes/head')
<body id="root">
<div id="wrap_all">
    @include('includes/header')
    <div class="section form">
        <div class="container">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="heading">
                    <h3>{{ __('Register') }}</h3>
                </div>
                <span for="name" class="title">{{ __('Name') }}</span>
                <span for="email" class="title">{{ __('E-Mail Address') }}</span>
                <input id="name" type="text"
                       class="field one-half form-control @error('name') is-invalid @enderror" name="name"
                       value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror


                <input id="email" type="email"
                       class="field one-half form-control @error('email') is-invalid @enderror" name="email"
                       value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror


                <span for="password" class="title">{{ __('Password') }}</span>
                <span for="password-confirm" class="title">{{ __('Confirm Password') }}</span>
                <input id="password" type="password"
                       class="field one-half form-control @error('password') is-invalid @enderror"
                       name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <input id="password-confirm" type="password" class="field one-half form-control"
                       name="password_confirmation" required autocomplete="new-password">
                <li>
                    <input id="c1" required type="checkbox">
                    <label for="c1">Ik ga <strong>akkoord</strong> dat mijn gegevens worden opgeslagen.</label>
                </li>
                <button type="submit" class="button">
                    {{ __('Register') }}
                </button>
            </form>
        </div>
    </div>

@include('includes/footer')
@include('includes/socket')
</body>
</html>

