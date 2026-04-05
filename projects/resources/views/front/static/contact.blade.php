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
                    <div class="leave-comment">
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
                                <div class="form-group col-lg-6 col-md-6 col-12">
                                    <input type="text" name="website" id="websiteId" minlength="3" maxlength="300"
                                        class="form-control" placeholder="Website*" onkeyup="useRefShow('websiteId')"
                                        required>
                                </div>
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
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="map-div">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3613.941871822243!2d55.134505676079435!3d25.06995923684142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f13458e9e73ed%3A0x644be003b58e37!2sAardys%20properties%20llc!5e0!3m2!1sen!2sin!4v1746016764022!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--========================contact section end =======================================-->




@stop
