<footer>
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="footer-about">
                        <img src="{{ asset($setting_data['footer_logo'] ?? 'front/images/logo-white.png') }}">
                        <p>{{ $setting_data['about'] ?? '' }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="quick-link">
                        <h5>Quick Links</h5>
                        <ul>
                            <li><a href="{{ url('') }}">Home</a></li>
                            <li><a href="{{ url('about-us') }}">About Us</a></li>
                            <li><a href="{{ url('contact-us') }}">Contact Us</a></li>
                            <li><a href="{{ url('gallery') }}">Gallery</a></li>
                            <li><a href="{{ url('user-login') }}">login</a></li>
                            <li><a href="{{ url('user-register') }}">Register</a></li>
                            <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
                            <li><a href="{{ url('terms-and-condition') }}">Terms & Condition</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="footer-contact">
                        <h5>Contact Us</h5>
                        <ul>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <p>{{ $setting_data['address'] ?? '' }}</p>
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i>
                                <p><a
                                        href="mailto:{{ $setting_data['email'] ?? '' }}">{{ $setting_data['email'] ?? '' }}</a>
                                </p>
                            </li>
                            <li>
                                <i class="fas fa-phone-alt"></i>
                                <p><a
                                        href="tel:{{ $setting_data['mobile'] ?? '' }}">{{ $setting_data['mobile'] ?? '' }}</a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="footer-newsletter">
                        <h5>Newsletter</h5>
                        <form action="{{ route('newsletterPost') }}" method="POST">
                            @csrf
                            <div class="input-group mb-3"> 
                                <input type="text" class="form-control" name="email" id="subscribeEmailId"
                                    onkeyup="useRefNewsLetter('subscribeEmailId')" placeholder="Enter Your Email"
                                    required>
                                <button class="btn btn-outline-secondary" type="submit" id="subscribeBtnId"
                                    id="button-addon2"><i class="far fa-paper-plane"></i></button>
                            </div>
                        </form>
                        <div class="top-right">
                            <ul>
                                <li>
                                    <h5>Follow Us</h5>
                                </li>
                                @if ($setting_data['instagram'])
                                    <li><a href="{{ $setting_data['instagram'] ?? '' }}" target="_blank"
                                            aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                                @endif
                                @if ($setting_data['facebook'])
                                    <li><a href="{{ $setting_data['facebook'] ?? '' }}" target="_blank"
                                            aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                @endif
                                @if ($setting_data['linkedin'])
                                    <li><a href="{{ $setting_data['linkedin'] ?? '' }}" target="_blank"
                                            aria-label="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                @endif
                                @if ($setting_data['twitter'])
                                    <li><a href="{{ $setting_data['twitter'] ?? '' }}" target="_blank"
                                            aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        {!! $setting_data['copyright'] ?? '' !!}
    </div>
</footer>

@include('front.layouts.js')



@yield('js')


<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.16.1/sweetalert2.min.js"></script>
<script>
    // send OTP code start 
    $("#sendOtpBtnId").click(function(e) {
        e.preventDefault()
        let url = "{{ route('send-otp') }}";
        let mobile = $("#mobileId").val();

        fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                mobile: mobile
            })
        }).then(res => res.json()).then(data => {
            if (data.success) {
                $("#sendOtpBtnId").addClass('d-none');
                $("#otpDiv").removeClass('d-none');
                $("#verifyOtpBtnId").removeClass('d-none');

                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: data.message + ' OTP:' + data.otp,
                    showConfirmButton: false,
                    timer: 5000
                });
            } else {
                Swal.fire({
                    position: "top-end",
                    icon: "error",
                    title: data.message,
                    showConfirmButton: false,
                    timer: 5000
                });
            }



        });

    })
    // send OTP code end

    // verify OTP code start 
    $("#verifyOtpBtnId").click(function(e) {
        e.preventDefault()
        let url = "{{ route('verify-otp') }}";
        let otp = $("#otpId").val();

        fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                otp: otp
            })
        }).then(res => res.json()).then(data => {
            console.log(data);
            // return

            if (data.success) {
                $("#verifyCheckId").removeClass('d-none');
                $("#sendOtpBtnId").addClass('d-none');
                $("#verifyOtpBtnId").addClass('d-none');
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: data.message,
                    showConfirmButton: false,
                    timer: 2000
                });
            } else {
                $("#sendOtpBtnId").addClass('d-none');
                $("#unVerifyCheckId").removeClass('d-none');
            }
        });
    })
    // verify OTP code start 



    //   vote now code start 
    function voteNow(questionId) {
        Swal.fire({
            title: "Are you sure?",
            text: "You are about to vote on this question.",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, vote it!"
        }).then((result) => {
            if (result.isConfirmed) {
                let url = "{{ route('vote-now') }}";

                fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        id: questionId
                    })
                }).then(res => res.json()).then(data => {
                    console.log(data);
                    if (data.success) {
                        let btn = document.getElementById(`vote-btn-${questionId}`);
                        if (btn) {
                            btn.outerHTML = `<a href="javascript:void(0);" class="votedCls">Voted</a>`;
                        }

                        Swal.fire({
                            position: "top-end",
                            icon: "success",
                            title: data.message,
                            showConfirmButton: false,
                            timer: 2000
                        });
                    }
                });
            }
        });
    }

    //   vote now code end 
</script>
