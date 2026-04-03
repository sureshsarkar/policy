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
        $bannerImage = asset('front/images/inner-banner.png');
        if ($data->bannerImage) {
            $bannerImage = asset($data->bannerImage);
        }
    @endphp

    @include('front.layouts.banner')
    <!--========================About Us section start =======================================-->

    <section class="about-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="about-image">
                        <img src="{{ asset($data->image ?? 'front/images/abouts.png') }}"  alt="{{ $data->name ?? 'About Us' }}" title="{{ $data->name ?? '' }}">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="home-abt-con">
                        <div class="abt-inner-con">
                            {!! $data->shortDescription ?? '' !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--========================About Us section end =======================================-->


    <!--========================step section end =======================================-->
    {{-- @php
        $workingProcess = App\Models\WelcomePackage::where('publish', 'published')->get();
    @endphp
    @if (count($workingProcess) > 0)
        <section class="how-works-wrapp">
            <div class="container">
                <div class="why-head">
                    {!! $data->mediumDescription !!}
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
    @endif --}}
    <!--========================step section end =======================================-->

    <section class="about-wrapper">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-12 col-12">
                    <div class="home-abt-con">
                        <div class="abt-inner-con">
                            {!! $data->longDescription !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="about-image">
                        <img src="{{ asset($data->image2 ?? 'front/images/vision.png') }}" alt="{{ $data->name ?? 'About Us' }}" title="{{ $data->name ?? '' }}">
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
