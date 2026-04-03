<!--
<section class="inner-banner">
    <img src="{{ asset($bannerImage) }}" alt="{{ $name }}" title="{{ $name }}">
    <div class="inner-page-banner">
        <div class="inner-banner-content">
            <h2>{{ strtoupper($name) }}</h2>

        </div>
    </div>
    <ul class="breadcrumb">
        <li><a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a></li>
        <li>{{ strtoupper($name) }}</li>
    </ul>
</section>

 -->



<!--========================inner banner section start =======================================-->

<section class="inner-banner-wrapper">
    <div class="inner-banner-img">
        <img src="{{ asset($bannerImage ?? 'front/images/inner-banner.png') }}" alt="{{ $name }}"
            title="{{ $name }}">
        <div class="inner-banner-main">
            <div class="container">
                <div class=" inner-banner-con">
                    <div class="inner-banner-con-inn">
                        <h2>{{ $name ?? '' }}</h2>
                    </div>
                    <div class="bread-crumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('') }}"><i
                                            class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $name ?? '' }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--========================inner banner section end =======================================-->



{{-- <section class="inner-banner-wrapper">
    <div class="inner-banner-img">
        <img src="{{ asset($bannerImage) }}" alt="{{ $name }}" title="{{ $name }}">
        <div class="over-lay"></div>
        <div class="inner-banner-con">
            <div class="container">
                <div class="inner-banner-con-inn">
                    <h2>{{strtoupper($name)}}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="bread-crumb mb-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{strtoupper($name)}}</li>
                </ol>
            </nav>
        </div>
    </div>
</section> --}}
