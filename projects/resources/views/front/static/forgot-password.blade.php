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
    <!-- start banner sec -->


    <!--======================================login page sec start======================================-->

    <section class="login-page-wrapp"> 
            <div class="row">  
                <div class="col-lg-6 col-md-12 col-12 ps-0">
                    <div class="login-page-left">
                        <img src="{{ asset($data->image ?? 'front/images/login.jpg') }}">
                    </div>
                </div> 
                <div class="col-lg-6 col-md-12 col-12 pe-0">
                    <div class="login-form-right">
                        <div class="login-top-head">
                            <img src="{{ asset('front/images/logo.png') }}">
                            <h5><a href="{{ url('') }}"><i class="fas fa-chevron-circle-left"></i> Back to Home</a>
                            </h5>
                        </div>
                        <div class="login-form-inner">
                            <h3>Forgot <span>Password</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt. </p>
                            <form action="{{ route('user.forgot.password') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-sign-in">Get new password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div> 
    </section>

    <!--======================================login page sec end======================================-->


@stop
