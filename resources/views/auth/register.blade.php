@extends('contents.layouts.app')
    <!-- Preloader Start-->
@include('contents.layouts.header')
@extends('contents.layouts.contents')
@section('content')
    <main>
        <!-- breadcrumb Start-->
        <div class="page-notification">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Sign Up</a></li> 
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb End -->
        <!-- Register Area Start -->
        <div class="register-form-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="register-form text-center">
                            <!-- Login Heading -->
                            <div class="register-heading">
                                <span>Sign Up</span>
                                <p>Create your account to get full access</p>
                            </div>
                            <!-- Single Input Fields -->
                            <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="input-box">
                                <div class="single-input-fields">
                                <label for="username" class="col-md col-form-label text-md-left">{{ __('username') }}</label>
                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus style="font-size: 16px; font-family: Arial, Helvetica, sans-serif; text-transform: lowercase">
                                        @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                                <div class="single-input-fields">
                                <label for="name" class="col-md col-form-label text-md-left">{{ __('Nama Lengkap') }}</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus style="font-size: 16px; font-family: Arial, Helvetica, sans-serif; text-transform: lowercase">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                                <div class="single-input-fields">
                                    <label for="email" class="col-md col-form-label text-md-left">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" style="font-size: 16px; font-family: Arial, Helvetica, sans-serif; text-transform: lowercase">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                                <div class="single-input-fields">
                                    <label for="password" class="col-md col-form-label text-md-left">{{ __('Password Akun') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" style="font-size: 16px; font-family: Arial, Helvetica, sans-serif; text-transform: lowercase">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                                <div class="single-input-fields">
                                    <label for="password-confirm" class="col-md col-form-label text-md-left">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" style="font-size: 16px; font-family: Arial, Helvetica, sans-serif; text-transform: lowercase">
                                </div>
                            </div>
                            <!-- form Footer -->
                            <div class="register-footer">
                                <p> Already have an account? <a href="{{ route('login') }}"> Login</a> here</p>
                                <button class="submit-btn3">{{ __('Register') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Register Area End -->
    </main>

@endsection