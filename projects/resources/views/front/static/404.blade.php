@extends("front.layouts.master")

@section("container")
<section class="coming-soon-wrapp error-page pt-5">
  <div class="container">
    <div class="coming-con">
        <h3><i class="fa fa-map-signs text-gray-silver"></i> 404!</h3> 
       <h5>Oops! Not Found</h5>
       <a href="{{url('/')}}">Back to Home</a>
    </div>
  </div>
</section>
  
@stop