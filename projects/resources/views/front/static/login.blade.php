@extends('front.layouts.master')
@section('title', $data->meta_title)
@section('keywords', $data->meta_keywords)
@section('description', $data->meta_description)
@section('logo', $data->image)
@section('header-section')
    {!! $data->header_section !!}
@stop
@section('footer-section')
    {!! $data->footer_section !!}
@stop
@section('container')
    @php
        $name = $data->name;
        $bannerImage = asset('front/images/banner.png');
        if ($data->bannerImage) {
            $bannerImage = asset($data->bannerImage);
        }
    @endphp


    <!--========================login section start =======================================-->

    <section class="login-page-wrapp">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12 ps-0">
                <div class="login-page-left">
                    <img src="{{ asset('front/images/login.jpg') }}">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12 pe-0">
                <div class="login-form-right">
                    <div class="login-top-head">
                        <img src="{{ asset('front/images/logo.png') }}">
                        <h5><a href="{{ url('') }}"><i class="fas fa-chevron-circle-left"></i> Back to Home</a></h5>
                    </div>
                    <div class="login-form-inner">
                        <h3>Sign in with <span>Your Account</span></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt. </p>
                        <form action="{{ route('user.login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email Address">
                            </div>
                            <div class="form-group pass-view-inp">
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="Password">
                                <p class="btn btn-pass-view" id="viewPasswordBtnId" onclick="viewPasswordFunc('password')"><i
                                        class="far fa-eye"></i></p>
                            </div>

                            <p><a href="{{ url('forgot-password') }}">Forgot password</a></p>
                            <div class="form-group">
                                <button type="submit" class="btn btn-sign-in">Sign In</button>
                            </div>
                            <h2>Don't have an account? <a href="{{ url('user-register') }}"> Sign up here</a></h2>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--========================login section end =======================================-->
@stop
 
