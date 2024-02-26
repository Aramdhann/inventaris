@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card border-0 shadow rounded-4 p-4">
            <div class="card-body">
                <p class="fs-2 fw-bold text-center text-uppercase">Login</p>
                <form method="POST" action="{{ route('login') }}">
                    {{-- supaya bisa jalan di kasih csrf --}}
                    @csrf

                    <div class="row mb-3">
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
                    <div class="row mb-3">
                        <label for="password" class="col-form-label">{{ __('Password') }}</label>

                        <div>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">                                        <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
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
