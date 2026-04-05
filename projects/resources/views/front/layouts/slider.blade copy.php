

@php
$bannerData = App\Models\Slider::where('cms_id', $data->id)
    ->where('publish', 'published')
    ->orderBy('ordering', 'ASC')
    ->select('id', 'title', 'image', 'cms_id', 'description', 'link')
    ->limit(3)
    ->get();
// pre($bannerData);
@endphp
<!--========================banner section start =======================================-->
@if (count($bannerData) > 0)
<section class="banner-wrapper">
    <div class="container-fluids">
        <div class="owl-carousel banner-slide">
            @foreach ($bannerData as $c)
                <div class="item">
                    <div class="banner-slide-box">
                        <img src="{{ asset($c->image ?? 'front/images/banner-green.jpg') }}">
                        <div class="banner-con-div">
                            <div class="banner-con-inner">
                                <div class="container">
                                    <div class="content-div">
                                        <h5>{{ $c->title ?? ''}}</h5>
                                        {!! $c->description !!}
                                        <div class="header1-buttons banner-button">
                                            <div class="button">
                                                <a class="theme-btn1" href="{{ url('user-login') }}"><span><i
                                                            class="fas fa-sign-in-alt"></i></span> Login </a>
                                            </div>
                                            <div class="button">
                                                <a class="theme-btn1" href="{{ url('contact-us') }}"><span><i
                                                            class="fas fa-phone-alt"></i></span> Contact Us </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach 
        </div>
    </div>
</section>
@endif
<!--========================banner section end =======================================-->
