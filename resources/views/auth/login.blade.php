@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center align-items-center vh-100 p-3">
        <div class="card border-0 shadow rounded-4 p-2 p-sm-3">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div class="mt-3 fs-2 fw-bold text-center text-uppercase">
                        <p>Login</p>
                    </div>
                    <div class="inline-block navbar-brand d-flex align-items-center gap-2 fw-bold">
                        <img src="assets/images/logo.png" alt="">
                        <div>
                            <p class="mb-0" style="line-height: 15px;">
                                Ware <br> <span class="text-primary">House</span>
                            </p>
                        </div>
                    </div>
                </div>
                <form method="POST" action="{{ route('login') }}" class="d-flex flex-column gap-3">
                    {{-- supaya bisa jalan di kasih csrf --}}
                    @csrf

                    <div class="row">
                        <label for="email" class="col-form-label">{{ __('Email') }}</label>

                        <div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" v alue="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <label for="password" class="col-form-label">{{ __('Password') }}</label>

                        <div>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary w-100 mb-3">
                            {{ __('Login') }}
                        </button>
                        @if (Route::has('password.request'))
                        <a class="text-center" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
