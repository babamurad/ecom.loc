@extends('layouts.layout')
@section('title', 'Registration')
{{--@section('title', 'Login')--}}
@section('content')
<div>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> Register
                </div>
            </div>
        </div>
        <section class="pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="login_wrap widget-taber-content p-30 background-white border-radius-5">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h3 class="mb-30">Create an Account</h3>
                                        </div>
                                        <form method="post" action="{{ route('register.store') }}">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" required="" name="name" placeholder="Name" value="{{ old('name') }}">
                                                @error('name')
                                                <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required="" name="email" placeholder="Email" value="{{ old('email') }}">
                                                @error('email')
                                                <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input required="" type="password" name="password" placeholder="Password">
                                                @error('password')
                                                <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input required="" type="password" name="password_confirmation" placeholder="Confirm password">
                                                @error('password_confirmation')
                                                <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                            <div class="login_footer form-group">
                                                <div class="chek-form">
                                                    <div class="custome-checkbox">
                                                        <input class="form-check-input" type="checkbox" name="terms-policy" id="exampleCheckbox12" value="true">
                                                        <label class="form-check-label" for="exampleCheckbox12"><span>I agree to terms &amp; Policy.</span></label>
                                                        @error('terms-policy')
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <a href="{{ route('privacy.policy') }}"><i class="fi-rs-book-alt mr-5 text-muted"></i>Lean more</a>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-fill-out btn-block hover-up" name="login">Submit &amp; Register</button>
                                            </div>
                                        </form>
                                        <div class="text-muted text-center">Already have an account? <a href="{{route('login')}}">Sign in now</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img src="{{ asset('assets/imgs/login.png') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
@endsection
