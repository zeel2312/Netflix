@extends('layouts.user_login')
@section('title','Login')
@section('content')

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
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
</div> -->

<!-- main-area -->
<main>
    <section class="contact-area contact-bg" data-background="{{ asset('app/img/bg/contact_bg.jpg') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-7">
                    <div class="contact-form-wrap">
                        <div class="widget-title mb-50">
                            <h5 class="title">Netflix Login</h5>
                        </div>
                        <div class="contact-form">
                            <form method="POST" id="validateUser" action="{{ route('login') }}" >
                                @csrf
                                <div>
                                    <div class="row">
                                        <label class="col-md-4 col-form-label text-md-end" for="email">Email *</label>
                                        <div class="col-md-6">
                                            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-4 col-form-label text-md-end" for="password">Password *</label>
                                        <div class="col-md-6">
                                            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Password *">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="col-md-12">
                                        <center>
                                            <button type="submit" class="btn">Login</button>
                                        </center>
                                    </div>
                                </div><br><br>
                                <div style="float: right !important;">
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('register') }}">
                                            Sign Up
                                        </a>
                                    @endif<br>
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">
                                            Forgot Your Password?
                                        </a>
                                    @endif
                                </div><br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- main-area-end -->

@endsection
