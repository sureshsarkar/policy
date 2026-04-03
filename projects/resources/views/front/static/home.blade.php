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
@section('css')

@stop
@section('container')
    @php $name=$data->name; @endphp


    @include('front.layouts.slider')

    <!--========================About Us section start =======================================-->

    <section class="about-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="about-image">
                        <img src="{{ asset($data->image ?? 'front/images/abouts.png') }}">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="home-abt-con">
                        <div class="abt-inner-con">
                            {!! $data->shortDescription ?? '' !!}
                            <div class="header1-buttons about-btn">
                                <div class="button">
                                    <a class="theme-btn1" href="{{ url('about-us') }}"><span><i class="fab fa-readme"></i></span> Read
                                        More </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--========================About Us section end =======================================-->

    <!--========================why vote your section start =======================================-->

    @php
        $services = App\Models\Service::where('cms_id', $data->id)->where('publish', 'published')->get();
    @endphp
    @if (count($services) > 0)
        <section class="why-voteyour-wrapp">
            <div class="container">
                <div class="why-head">
                    {!! $data->mediumDescription ?? '' !!}
                </div>
                <div class="row">

                    @foreach ($services as $c)
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-box">
                                <div class="icon">
                                    <img src="{{ asset($c->image ?? 'front/images/poll.png') }}" alt="">
                                </div>
                                <div class="heading1">
                                    <h4><a href="#"> {{ $c->name ?? '' }}</a></h4>
                                    <p> {{ $c->description ?? '' }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    <!--========================why vote your section end =======================================-->

    <!--========================popular category start =======================================-->

    @php
        $popularCategory = App\Models\OurClient::where('publish', 'published')->get();
    @endphp
    @if (count($popularCategory) > 0)
        <section class="popular-category-wrapp">
            <div class="container">
                <div class="why-head">
                    {!! $data->longDescription ?? '' !!}
                </div>
                <div class="owl-carousel category-slider">
                    @foreach ($popularCategory as $c)
                        <div class="item">
                            <div class="category-box">
                                <img src="{{ asset($c->image ?? 'front/images/logo.png') }}">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    <!--========================popular category end =======================================-->


    <!--========================step section end =======================================-->
    @php
        $workingProcess = App\Models\WelcomePackage::where('publish', 'published')->get();
    @endphp
    @if (count($workingProcess) > 0)
        <section class="how-works-wrapp">
            <div class="container">
                <div class="why-head">
                    {!! $data->longDescriptiontwo ?? '' !!}
                </div>
                <div class="row">

                    @foreach ($workingProcess as $c)
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="preced-box">
                                <div class="preced-box-icon">
                                    <h5><img src="{{ asset($c->image ?? 'front/images/login.png') }}"></h5>
                                </div>
                                <div class="proced-box-con">
                                    <h6>{{ $c->name ?? '' }}</h6>
                                    <p> {{ $c->longDescription ?? '' }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    <!--========================step section end =======================================-->




@stop
@section('js')

@stop
