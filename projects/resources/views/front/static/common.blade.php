@extends("front.layouts.master")
@section("title",$data->meta_title)
@section("keywords",$data->meta_keywords)
@section("description",$data->meta_description)
@section("header-section")
{!! $data->header_section !!}
@stop
@section("footer-section")
{!! $data->footer_section !!}
@stop
@section("css")
    <style>
        .left-sec_appr {
            width: 100%;
        }
        .sub-footer{
            display:none;
        }
    </style>
@stop


@section("container")

    @php
        $name=$data->name;
        $bannerImage=asset('front/images/inner-banner.jpg');
        if($data->bannerImage){
            $bannerImage=asset($data->bannerImage);
        }
    @endphp
    

    
    
 @include('front.layouts.banner')

<!--===========================================privacy policy sec========================================-->

<section class="privacy-policy-wrapp">
	 <div class="container">
	 	<div class="privacy-policy-con">
          {!! $data['shortDescription'] !!}
	 	</div>
	 </div>
</section>

<!--===========================================privacy policy sec========================================-->

 

@stop
