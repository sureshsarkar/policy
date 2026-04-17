@extends('front.layouts.master')
@section('title', $data->meta_title)
@section('keywords', $data->meta_keywords)
@section('description', $data->meta_description)
@section('logo', $data->image)
@section('header-section')
    {!! $data->header_section !!}
@stop
<?php
error_reporting(0);
?>
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

    <!--========================inner banner section start =======================================-->

    @include('front.layouts.banner')

    <!--========================inner banner section end =======================================-->

    <!--========================contact section start =======================================-->

    <section class="contact-page-wrapp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="img--div">
                        <img src="{{asset('front/images/Bposo.png')}}" alt="">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-12">
                    <div class="leave-comment posp-form-desc">
                        {!! $data->shortDescription !!}
                        <form action="{{ route('contactPost') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="form-group col-lg-6 col-md-6 col-12">
                                    <input type="text" name="name" class="form-control" id="nameId"
                                        placeholder="Name*" minlength="3" maxlength="25"
                                        onkeydown="return /[a-z ]/i.test(event.key)" onkeyup="useRefShow('nameId')"
                                        required>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-12">
                                    <input type="text" name="email" id="emailId" class="form-control"
                                        placeholder="Email*" onkeyup="useRefShow('emailId')" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6 col-md-6 col-12">
                                    <input type="text" name="mobile" id="mobileId" class="form-control"
                                        placeholder="Mobile*" minlength="10" maxlength="10"
                                        onkeypress="return digitKeyOnly(event)" onkeyup="useRefShow('mobileId')" required>
                                </div>
                                   <input type="hidden" name="service"  value="Become A Posp">
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12 col-12">
                                    <textarea class="form-control" name="message" id="messageId" minlength="10" maxlength="150"
                                        placeholder="Write Your Comments*" onkeyup="useRefShow('messageId')" required></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12 col-12">
                                    <button type="submit" id="submitBtnId" class="btn btn-post-com">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--========================contact section end =======================================-->

        <!-- ═══ WHY CHOOSE US ═══ -->
 

    @php
        $whychooseus = App\Models\WhyChooseUs::where('publish', 'published')->orderBy('ordering')->get();
    @endphp
    @if ($whychooseus->count() > 0)
        <!-- ═══ WHY CHOOSE US ═══ -->
        <section class="why" id="why">
            <div class="container">
                <div class="row align-items-center mb-5 sr">
                  {!! $data->shortDescription !!}
                </div>
                <div class="row g-4">
                    @foreach ($whychooseus as $wc)
                        <div class="col-sm-6 col-lg-3 sr sr-d1">
                            <div class="why-card">
                                <div class="why-icon wi-w{{ $wc->ordering }}"><i class="fas fa-chart-bar"></i></div>
                                <h5>{{ $wc->title }}</h5>
                                <p>{{ $wc->descreption }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

     @php
        $Keyfeature = App\Models\KeyFeature::where('publish', 'published')->orderBy('ordering')->get();
    @endphp
    @if ($Keyfeature->count() > 0)
        <!-- ═══ BENEFITS ═══ -->
        <section class="benefits" id="benefits">
            <div class="container">
                <div class="text-center mb-5 sr">
                  {!!$data->mediumDescription!!}
                </div>
                <div class="row g-4">
                    @foreach ($Keyfeature as $f)
                        <div class="col-sm-6 col-lg-3 sr sr-d1">
                            <div class="benefit-card bc1">
                                <i class="{{ $f->icon_class }}"></i>
                                <h5>{{ $f->title }}</h5>
                                <p>{{ $f->descreption }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif


@stop
