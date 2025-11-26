@extends('layouts.web.master')
@section('title', 'Login')
@section('content')

<section class="inner-banner about-banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="hd-lg">Login</h1>
            </div>
        </div>
    </div>
</section>

<section class="login-sec sec-dark-bg sec-gap-y">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="form-wrapper glass">
                    <form id="loginForm" action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex align-items-center justify-content-between mb-30">
                                    <div>
                                        <h4 class="secondry-font fs-60 text-white fw-700 mb-10">Welcome</h4>
                                        <p class="para">
                                            Sign in to your account to continue
                                        </p>
                                    </div>
                                    <div>
                                        <div class="img-wrapper">
                                            <img src="{{ asset('images/logo-02.png') }}" style="max-width: 40px;" alt="Logo">
                                        </div>
                                    </div>
                                </div>

                                <div class="field-wrapper mb-20">
                                    <label for="email" class="text-white fs-14 mb-10 d-block">Email Address</label>
                                    <input type="email" id="email" name="email" class="glass input-field" placeholder="your.email@example.com" required>
                                </div>

                                <div class="field-wrapper mb-20">
                                    <label for="password" class="text-white fs-14 mb-10 d-block">Password</label>
                                    <input type="password" id="password" name="password" class="glass input-field" placeholder="Enter your password" required>
                                </div>

                                <div class="d-flex align-items-center justify-content-between mb-30">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="rememberMe" name="remember">
                                        <label class="form-check-label text-white fs-14" for="rememberMe">
                                            Remember me
                                        </label>
                                    </div>
                                    <a href="{{ route('forgot-password') }}" class="text-secondry-theme fs-14">Forgot Password?</a>
                                </div>

                                <div class="field-wrapper mb-20">
                                    <button type="submit" class="bootstrap btn btn-primary w-100 submit-btn">
                                        <i class="fa-solid fa-sign-in-alt me-10"></i> Login
                                    </button>
                                </div>

                                <div class="text-center">
                                    <p class="text-white fs-14 mb-10">
                                        Don't have an account? 
                                        <a href="{{ route('join') }}" class="text-secondry-theme fw-600">Join Now</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

