
<script src="{{ asset('front/assets/jquery/jquery.min.js') }}?ver={!! $setting_data['version_css_js'] ?? '1.0.0' !!}"></script>

<script src="{{ asset('front/assets/bootstrap/js/bootstrap.min.js') }}?ver={!! $setting_data['version_css_js'] ?? '1.0.0' !!}"></script>
<script src="{{ asset('front/assets/owl/owl.carousel.min.js') }}?ver={!! $setting_data['version_css_js'] ?? '1.0.0' !!}"></script>
<script src="{{ asset('front/assets/vendor/fancybox/jquery.fancybox.min.js') }}?ver={!! $setting_data['version_css_js'] ?? '1.0.0' !!}"></script>
<script src="{{ asset('front/js/wow.min.js') }}?ver={!! $setting_data['version_css_js'] ?? '1.0.0' !!}"></script>
<script src="{{ asset('front/js/script.js') }}?ver={!! $setting_data['version_css_js'] ?? '1.0.0' !!}"></script>


<script src="{{ asset('toastr/toastr.js') }}?ver={!! $setting_data['version_css_js'] ?? '1.0.0' !!}"></script>
<script>
$(document).ready(function(){
    @if(Session::has("success"))
        toastr.success("{{ Session::get('success') }}");
    @endif
    @if(Session::has("danger"))
        toastr.error("{{ Session::get('danger') }}");
    @endif
  } );

</script>

@yield("js")
