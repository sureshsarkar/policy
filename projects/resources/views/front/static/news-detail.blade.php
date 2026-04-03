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




    <!--===========================================Breaking news bar========================================-->
    @php
        $BreakingNews = App\Models\NewsPost::where('breaking_news', 'yes')
            ->where('publish', 'published')
            ->orderBy('id', 'desc')
            ->limit(10)
            ->select('id', 'name', 'seo_url', 'bannerImage')
            ->get();

    @endphp
    {{-- @if ($BreakingNews)
        <section class="breaking-news-bar">
            <div class="container">
                <div class="bar-con">
                    <h5><span>Breaking News</span> <a href="{!! url('news/' . $BreakingNews->seo_url) !!}" class="ancher-head"> {!! $BreakingNews->name !!}</a> </h5>
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

    <!--=======================================detail middle section start=====================================-->

    <section class="detail-middle-wrapp">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-12">
                    <div class="detail-main">
                        <div class="main-img">
                            <img src=" {!! asset('front/images/bd1.jpg') !!}">
                        </div>
                        <ul class="authors-detail">
                            <li><i class="fa-solid fa-user"></i> By {!! $news->author !!}</li>
                            <li><i class="fa-solid fa-comment"></i> Comments 35</li>
                            <li><i class="fa-solid fa-calendar-days"></i> {!! Carbon\Carbon::parse($news->created_at)->format('d M Y') !!} </li>
                        </ul>
                        <h1>{!! $news->name !!}</h1>
                        {!! $news->shortDescription !!}
                    </div>

                    <div class="comment-main">
                        <h3>Comments</h3>

                        <div class="comments-area">
                            <ol class="comments">
                                <li class="comment even thread-even depth-1" id="comment-1">
                                    <div id="div-comment-1">
                                        <div class="comment-theme">
                                            <div class="comment-image"><img src="{!! asset('front/images/img-1.jpg') !!}" alt="">
                                            </div>
                                        </div>
                                        <div class="comment-main-area">
                                            <div class="comment-wrapper">
                                                <div class="comments-meta">
                                                    <h4>Robert Sonny <span class="comments-date">says Jul 21,
                                                            2022 at 10:00am</span></h4>
                                                </div>
                                                <div class="comment-area">
                                                    <p>I must explain to you how all this mistaken idea of
                                                        denouncing pleasure and praising pain was born and I
                                                        will give you a complete account of the system</p>
                                                    <div class="comments-reply">
                                                        <a class="comment-reply-link" href="#"><span>Reply</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="children">
                                        <li class="comment">
                                            <div>
                                                <div class="comment-theme">
                                                    <div class="comment-image"><img src="{!! asset('front/images/img-2.jpg') !!}"
                                                            alt=""></div>
                                                </div>
                                                <div class="comment-main-area">
                                                    <div class="comment-wrapper">
                                                        <div class="comments-meta">
                                                            <h4>John Abraham <span class="comments-date">says
                                                                    Jul 21, 2022 at 10:00am</span></h4>
                                                        </div>
                                                        <div class="comment-area">
                                                            <p>I must explain to you how all this mistaken idea
                                                                of denouncing pleasure and praising pain was
                                                                born and I will give you a complete account of
                                                                the system</p>
                                                            <div class="comments-reply">
                                                                <a class="comment-reply-link"
                                                                    href="#"><span>Reply</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul>
                                                <li class="comment">
                                                    <div>
                                                        <div class="comment-theme">
                                                            <div class="comment-image"><img src="{!! asset('front/images/img-3.jpg') !!}"
                                                                    alt=""></div>
                                                        </div>
                                                        <div class="comment-main-area">
                                                            <div class="comment-wrapper">
                                                                <div class="comments-meta">
                                                                    <h4>Robert Sonny <span class="comments-date">says Jul
                                                                            21,
                                                                            2022 at 10:00am</span></h4>
                                                                </div>
                                                                <div class="comment-area">
                                                                    <p>I must explain to you how all this
                                                                        mistaken idea of denouncing pleasure and
                                                                        praising pain was born and I will give
                                                                        you a complete account of the system</p>
                                                                    <div class="comments-reply">
                                                                        <a class="comment-reply-link"
                                                                            href="#"><span>Reply</span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="comment">
                                    <div>
                                        <div class="comment-theme">
                                            <div class="comment-image"><img src="{!! asset('front/images/img-1.jpg') !!}" alt="">
                                            </div>
                                        </div>
                                        <div class="comment-main-area">
                                            <div class="comment-wrapper">
                                                <div class="comments-meta">
                                                    <h4>John Abraham <span class="comments-date">says Jul 21,
                                                            2022 at 10:00am</span></h4>
                                                </div>
                                                <div class="comment-area">
                                                    <p>I must explain to you how all this mistaken idea of
                                                        denouncing pleasure and praising pain was born and I
                                                        will give you a complete account of the system</p>
                                                    <div class="comments-reply">
                                                        <a class="comment-reply-link" href="#"><span>Reply</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>

                    </div>

                    <div class="leave-comment">
                        <h3>Leave a reply</h3>
                        <form>
                            <div class="row">
                                <div class="form-group col-lg-6 col-md-6 col-12">
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-12">
                                    <input type="text" name="name" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6 col-md-6 col-12">
                                    <input type="text" name="name" class="form-control" placeholder="Phone">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-12">
                                    <input type="text" name="name" class="form-control" placeholder="Website">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12 col-12">
                                    <textarea class="form-control" placeholder="Write Your Comments"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12 col-12">
                                    <button class="btn btn-post-com">Post Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="col-lg-4 col-md-12 col-12">
                    <div class="detail-right-side">
                        <div class="tech-main">
                            <div class="trending-headline">
                                <div class="trending-headline-inn">
                                    <h3>Categories</h3>
                                    <ul class="category-side">
                                        @php
                                            $categories = App\Models\Deal::where('publish', 'published')->get();
                                        @endphp
                                        @if ($categories)
                                            @foreach ($categories as $c)
                                                <li>
                                                    <h2> <a href="{{ url($c->seo_url) }}" class="ancher-head"> {!! $c->title ?? '' !!} </a> <i class="fa-solid fa-right-long"></i> </a></h2>
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>

                        @php
                            $relatedPost = App\Models\NewsPost::where('publish', 'published')
                                ->where('is_parent',$news->is_parent)
                                ->limit(10)
                                ->select('id', 'name', 'seo_url', 'bannerImage')
                                ->get();
                        @endphp
                        @if ($relatedPost)
                            <div class="tech-main">
                                <div class="trending-headline">
                                    <div class="trending-headline-inn">
                                        <h3>Related Posts</h3>
                                        <ul>
                                            @foreach ($relatedPost as $c)
                                                <li>
                                                    <img src="{!! asset($c->bannerImage ?? 'front/images/th.jpg') !!}">
                                                    <h5><a href="{{ url('news/' . $c->seo_url) }}" class="ancher-head">
                                                            {{ $c->name }} </a></h5>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="tech-main">
                            <div class="tags-side">
                                <i class="fa-solid fa-headset"></i>
                                <h3>How We Can Help You!</h3>
                                <p>labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                                    viverra maecenas accumsan lacus vel facilisis.</p>
                                <a href="#">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!--========================================detail middle section start=====================================-->


@stop
