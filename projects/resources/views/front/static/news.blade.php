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
    @php $name=$data->name; @endphp

    <!--===========================================Breaking news bar========================================-->
    @php
        $BreakingNews = App\Models\NewsPost::where('breaking_news', 'yes')
            ->where('publish', 'published')
            ->orderBy('id', 'desc')
            ->limit(10)
            ->select('id', 'name', 'seo_url', 'bannerImage')
            ->get();

    @endphp

    {{-- @if ($BreakingNews->name != '')
        <section class="breaking-news-bar">
            <div class="container">
                <div class="bar-con">
                    <h5><span>Breaking News</span><a href="{!! url('news/' . $BreakingNews->seo_url) !!}" class="ancher-head">
                            {!! $BreakingNews->name ?? '' !!} </a></h5>
                </div>
            </div>
        </section>
    @endif --}}

    
    @isset($BreakingNews)
    @if (count($BreakingNews) > 0)
        <section class="breaking-news-bar">
            <div class="container">
                <div class="bar-con">
                    <div class="row">
                        <div class="col-lg-2 col-md-12 col-12">
                            <h5><span>Breaking News</span></h5>
                        </div>
                        <div class="col-lg-10 col-md-12 col-12">
                            <div class="breaking-news-slide owl-carousel">
                               
                                    @foreach ($BreakingNews as $c)
                                        <div class="item">
                                            <a href="{{ url('news/' . $c->seo_url) }}">  <h5> {{ $c->name ?? '' }}</h5></a> 
                                        </div>
                                    @endforeach
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
    @endisset
    <!--===========================================Breaking news bar========================================-->

    <!--===========================================hero section start========================================-->

    <section class="hero-wrapp">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-12">
                    <div class="hero-sec-img">
                        <img src="{!! asset($BreakingNews[0]->bannerImage ?? 'front/images/banner.jpg') !!}">
                        <div class="hero-con">
                            <h2>{!! $BreakingNews[0]->name ?? '' !!}</h2>
                        </div>
                    </div>
                </div>

                @php
                    $TrendingNews = App\Models\NewsPost::where('trending_news', 'yes')
                        ->where('publish', 'published')
                        ->limit(10)
                        ->orderBy('id', 'desc')
                        ->select('id', 'name', 'seo_url', 'bannerImage')
                        ->get();
                @endphp
                @if (count($TrendingNews) > 0)

                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="trending-headline">
                            <div class="trending-headline-inn">
                                <h3>Trending Headlines</h3>
                                <ul>
                                    @foreach ($TrendingNews as $c)
                                        <li>
                                            <img src="{!! asset($c->bannerImage ?? 'front/images/th.jpg') !!}">
                                            <h5><a href="{!! url('news/' . $c->seo_url) !!}" class="ancher-head">
                                                    {!! $c->name ?? '' !!} </a></h5>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </section>

    <!--===========================================hero section start========================================-->

    <!--===========================================top stories start========================================-->

    @php
        $news = App\Models\NewsPost::with('parentname')
            ->where('publish', 'published')
            ->where('is_parent', $data->id)
            ->orderBy('id', 'desc')
            ->select('id', 'name', 'seo_url', 'bannerImage', 'is_parent', 'descrIption', 'created_at')
            ->paginate(12);
    @endphp
    @if (count($news) > 0)
        <section class="top-stories-wrapp category-page">
            <div class="container">
                <div class="top-stories-inner">
                    <div class="row">
                        @foreach ($news as $c)
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="top-st-box">
                                    <a href="{{ url('news/' . $c->seo_url) }}">
                                        <img src="{!! asset($c->bannerImage ?? 'front/images/ts1.jpg') !!}">
                                    </a>
                                    <h5>
                                        <span class="ts-cat"> {!! $c->parentname->title ?? '' !!}</span>
                                        @php
                                            $dt =
                                                Carbon\Carbon::now()->diffInDays(
                                                    Carbon\Carbon::parse($c->created_at),
                                                ) ?? 1;
                                        @endphp
                                        <span class="ts-time">{{ $dt != 0 ? $dt : 1 }}d ago</span>
                                    </h5>
                                    <h4> <a href="{{ url('news/' . $c->seo_url) }}" class="ancher-head"> {{ $c->name }}
                                        </a></h4>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
    @endif
    <!--===========================================top stories end========================================-->

@stop
@section('js')

@stop
