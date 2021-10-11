@extends('front.layout')

@section('content')
<main>
    <section>
        <div class="container">
            <div class="row col-12 mt-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                                <h1 class="text-center">{{ __('back.login') }}</h1>

                                    <form method="POST" class="col-md-6 col-11 m-auto" action="{{ route('login') }}">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="email" class="col-form-label text-md-right">{{ __('back.E-Mail Address') }}</label>

                                            <div class="col">
                                                <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-form-label text-md-right">{{ __('back.Password') }}</label>

                                            <div class="col">
                                                <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('back.Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col">
                                                <button type="submit" class="btn btn-lg w-100 btn-primary">
                                                    {{ __('back.login') }}
                                                </button>

                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link my-3 px-0" href="{{ route('password.request') }}">
                                                        {{ __('back.Forgot Your Password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
