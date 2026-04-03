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

    @include('front.layouts.banner')


    <!--========================gallery section start =======================================-->
    @php
        $gallery = App\Models\Gallery::where('status', 'active')->get();
    @endphp
    @if (count($gallery) > 0)
        <section class="gallery-wrapper">
            <div class="container">
                <div class="row">
                    @foreach ($gallery as $c)
                        <div class="col-lg-4 col-md-12 col-12">
                            <div class="gallery-image">
                                <a href="{{ asset($c->image ?? '') }}" data-fancybox="images" alt=""> <img
                                        src="{{ asset($c->image ?? 'front/images/g1.png') }}" alt=""> </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    <!--========================gallery section end =======================================-->
@stop
 