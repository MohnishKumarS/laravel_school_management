@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                {{-- <h3 class="card-header text-center fw-bold">{{ __('Login') }}</h3> --}}

                <div class="card-body  bg-white">
                    <div class="row">
                        <div class="col-lg-6 ">
                            <div>
                                <img src="{{asset('image/common/login-sch.jpg')}}" alt="login-image" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="text-center mb-4">
                                        <img src="{{asset('image/oxford-logo.jpg')}}" alt="oxford-logo" width="50">
                                    </div>
                                    <h5 class="sec-title">{{ __('LOGIN') }}</h5>
                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-form-label">{{ __('Email Address') }}</label>
            
                                        <div class="col-md-12">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="row mb-3">
                                        <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>
            
                                        <div class="col-md-12">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            
                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="row mb-0">
                                        <div class="col-md-8">
                                            <button type="submit" class="btn-main w-25">
                                                {{ __('Login') }}
                                            </button>
            
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link text-muted" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
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
        </div>
    </div>
</div>
@endsection
