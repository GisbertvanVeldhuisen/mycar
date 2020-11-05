@extends ('layouts/app')

@section ("content")
    <div class="section form">
        <div class="container">

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="heading">
                    <h3>{{ __('Login') }}</h3>
                </div>
                <span for="email" class="title">{{ __('E-Mail Address') }}</span>
                <span for="password" class="title">{{ __('Password') }}</span>
                <input id="email" type="email"
                       class="one-half field form-control @error('email') is-invalid @enderror"
                       name="email"
                       value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror

                <input id="password" type="password"
                       class="one-half field form-control @error('password') is-invalid @enderror"
                       name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <span class="title full" for="remember">
                    {{ __('Remember Me') }}
                </span>
                <input class="form-check-input" type="checkbox" name="remember"
                       id="remember" {{ old('remember') ? 'checked' : '' }}>
                <button type="submit" class="button">
                    {{ __('Login') }}
                </button>
                <div class="full">
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
@endsection
