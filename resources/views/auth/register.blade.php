@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
              
                <div class="card-body  bg-white ">
                    <div class="row">
                        <div class="col-lg-6">
                            <div>
                                <img src="{{asset('image/common/students.svg')}}" alt="login-image" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="text-center mb-4">
                                        <img src="{{asset('image/oxford-logo.jpg')}}" alt="oxford-logo" width="50">
                                    </div>
                                    <h3 class="sec-title">{{ __('Register') }}</h3>

                                    <div class="row mb-3">
                                        <label for="name" class="col-md-4 col-form-label ">{{ __('Name') }}</label>
            
                                        <div class="col-md-12">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-form-label ">{{ __('Email Address') }}</label>
            
                                        <div class="col-md-12">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="row mb-3">
                                        <label for="password" class="col-md-4 col-form-label ">{{ __('Password') }}</label>
            
                                        <div class="col-md-12">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="row mb-3">
                                        <label for="password-confirm" class="col-md-4 col-form-label ">{{ __('Confirm Password') }}</label>
            
                                        <div class="col-md-12">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
            
                                    <div class="row mb-0">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn-main w-25">
                                                {{ __('Register') }}
                                            </button>
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
