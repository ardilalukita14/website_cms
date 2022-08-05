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
                                <li class="breadcrumb-item"><a href="#">Login</a></li> 
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb End -->
        <!-- login Area Start -->
        <div class="login-form-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="login-form">
                            <!-- Login Heading -->
                            <div class="login-heading">
                                <span>Login</span>
                                <p>Enter Login details to get access</p>
                            </div>
                            <!-- Single Input Fields -->
                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="input-box">
                                <div class="single-input-fields">
                                <label style="font-size = 18px;">Email Address</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" autocomplete="off" autofocus style="font-size: 16px; font-family: Arial, Helvetica, sans-serif; text-transform: lowercase">
                                <div class="input-group-append">
                                    <!-- <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                    </div> -->
                                </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="single-input-fields">
                                <label style="font-size = 18px;">Password</label>
                                <input id="password" type="password" placeholder="{{ __('Password') }}" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password" style="font-size: 16px; font-family: Arial, Helvetica, sans-serif; text-transform: lowercase">
                                <div class="input-group-append">
                                    <!-- <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                    </div> -->
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="single-input-fields login-check">
                                    <input type="checkbox" id="fruit1" class="form-check-input" type="checkbox" name="keep-log" {{ old('remember') ? 'checked' : '' }} disabled>
                                    <label for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                    @if (Route::has('password.request'))
                                    <a class="f-right" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="login-footer">
                                    <p>Don’t have an account? <a href="/register">Sign Up</a>  here</p>
                                    <button class="submit-btn3"><a>{{ __('Login') }}</a> &nbsp;</button>
                                </div>
                                <!-- /.col -->
                                </div>
                            </form>
                            
                            </div>
                        </div>
                    </div>
                </div>
 <!-- login Area End -->
</main>

  @endsection