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
        $name = $data->name??$data->title??"";
        $bannerImage = asset('front/images/banner.png');
        if ($data->bannerImage) {
            $bannerImage = asset($data->bannerImage);
        }
    @endphp
    <!-- start banner sec -->

    @include('front.layouts.banner')
    <!--========================Blog section start =======================================-->
    {{-- @php
        $blogs = App\Models\Blogs\Blog::where('publish', 'published')->get();

    @endphp --}}
    @if (count($blogs) > 0)
        <section class="blog-wrapper">
            <div class="container">
                <div class="row">
                    @foreach ($blogs as $c)
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="blog-box">
                                <article class="blog-item blog-item-box">
                                    <div class="blog-item-img">
                                        <img class="blog-img" src="{{ asset($c->featureImage ?? 'front/images/g1.png') }}"
                                            alt="{{ $c->title ?? '' }}">
                                        <ul class="blog-item-badge">
                                            <li><a
                                                    href="{{ url($c->blogCategory->seo_url ?? '') }}">{{ $c->blogCategory->title ?? '' }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="blog-item-content">
                                        <h5 class="blog-item-title"><a
                                                href="{{ url('blog/' . $c->seo_url ?? '') }}">{{ $c->title ?? '' }}</a></h5>
                                        <p>{{ $c->shortDescription ?? '' }}</p>

                                        <div class="blog-item-details">
                                            <span class="blog-item-date"><i
                                                    class="fas fa-calendar-week"></i>{{ Carbon\Carbon::parse($c->created_at)->format("d M' y") }}</span>
                                        </div>
                                </article>
                            </div>
                        </div>
                    @endforeach
                </div>
        </section>
    @endif
    <!--========================Blog section end =======================================-->

@stop
