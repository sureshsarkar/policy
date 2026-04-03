@extends('front.layouts.master')

@section('title', $data->meta_title)

@section('keywords', $data->meta_keywords)

@section('description', $data->meta_description)



@section('container')





    {{-- @php

pre($user);

@endphp --}}

    <!--========================my account banner section start =======================================-->

    {{-- @include('front.layouts.banner') --}}

    <section class="my-acc-banner">

        <div class="inner-banner-main">

            <div class="container">

                <div class=" inner-banner-con">

                    <div class="inner-banner-con-inn">

                        <h2>My Account</h2>

                    </div>

                    <div class="bread-crumb">

                        <nav aria-label="breadcrumb">

                            <ol class="breadcrumb">

                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>

                                <li class="breadcrumb-item active" aria-current="page">My Account</li>

                            </ol>

                        </nav>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!--========================my account banner section start =======================================-->



    <!--========================my account section start =======================================-->



    <section class="my-account-middle">

        <div class="container">

            <div class="my-account-tabs">

                <div class="row">

                    <div class="col-lg-2 col-md-12 col-12 px-0">

                        <div class="nav flex-column nav-pills side-tab" id="v-pills-tab" role="tablist"

                            aria-orientation="vertical">

                            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"

                                data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"

                                aria-selected="true">Poll Questions</button>

                            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"

                                data-bs-target="#v-pills-profile" type="button" role="tab"

                                aria-controls="v-pills-profile" aria-selected="false">Profile</button>

                            <button class="nav-link" id="v-pills-change-password-tab" data-bs-toggle="pill"

                                data-bs-target="#v-pills-change-password" type="button" role="tab"

                                aria-controls="v-pills-change-password" aria-selected="false">Change Password</button>

                            <button class="nav-link" id="v-pills-Voted-tab" data-bs-toggle="pill"

                                data-bs-target="#v-pills-Voted" type="button" role="tab" aria-controls="v-pills-Voted"

                                aria-selected="false">Voted</button>

                            <button class="nav-link logoutCls" type="button" role="tab"><a

                                    href="{{ route('user.logout') }}">Log Out</a> </button>

                        </div>

                    </div>

                    <div class="col-lg-10 col-md-12 col-12 px-0">

                        <div class="tab-content side-right-tab" id="v-pills-tabContent">

                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"

                                aria-labelledby="v-pills-home-tab">

                                <div class="poll-question-main">

                                    <div class="poll-quest-head">

                                        <h3>Share your opinion and see <span>what others think!</span></h3>

                                        <p>You can vote only once per question, so choose wisely. Every vote counts and

                                            reflects your opinion. Your voice matters — go ahead and make it heard.</p>

                                    </div>

                                    <div class="question-categories">

                                        <div class="quest-cat-inn">

                                            <form action="{{ route('dashboard') }}" method="GET">

                                                <div class="form-group category-forms col-lg-4 col-md-6 col-12">

                                                    <select class="form-select" aria-label="Default select example"

                                                        name="category_id" onchange="this.form.submit()">

                                                        <option selected>Select Categories</option>

                                                        @if (isset($questionCategory) && count($questionCategory) > 0)

                                                            @foreach ($questionCategory as $c)

                                                                <option value="{{ base64_encode($c->id) }}">

                                                                    {{ $c->title }}

                                                                </option>

                                                            @endforeach

                                                        @endif

                                                    </select>

                                                </div>

                                            </form>

                                        </div>

                                    </div>

                                    <div class="row vote-box-scroll-y">

                                        @if (isset($questions) && count($questions) > 0)

                                            @foreach ($questions as $c)

                                                <div class="col-lg-4 col-md-6 col-12">

                                                    <div class="poll-box">

                                                        <p>{{ $c->category->title ?? '' }}</p>

                                                        <h3>{{ $c->title }}</h3>

                                                        @if (isset($c->votes[0]->question_id))

                                                            <a href="javascript:void(0);" class="votedCls">Voted</a>

                                                        @else

                                                        <a href="javascript:void(0);" 

                                                        id="vote-btn-{{ $c->id }}" 

                                                        onclick="voteNow({{ $c->id }})">Vote</a>

                                                        @endif



                                                    </div>

                                                </div>

                                            @endforeach

                                        @endif

                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"

                                aria-labelledby="v-pills-profile-tab">

                                <div class="my-profile-tab-main">

                                    <div class="poll-quest-head">

                                        <h3>My <span>Profile</span></h3>

                                        <p>View and manage your personal details in one place. Keep your information up to

                                            date to get the best experience. This is your space — make it truly yours.</p>

                                    </div>



                                    <div class="profile-section-div">

                                        <form>

                                            <div class="row">

                                                <div class="form-group col-lg-12 col-md-12 col-12">

                                                    <div class="profile-edit-image">

                                                        <div class="avatar-upload">

                                                            <div class="avatar-edit">

                                                                <input type='file' id="imageUpload"

                                                                    accept=".png, .jpg, .jpeg" />

                                                                <label for="imageUpload"></label>

                                                            </div>

                                                            <div class="avatar-preview">

                                                                <div id="imagePreview"

                                                                    style="background-image: url(http://i.pravatar.cc/500?img=7);">

                                                                </div>

                                                            </div>

                                                        </div>

                                                        <a href="#"><i class="far fa-edit"></i> Edit Profile</a>

                                                    </div>

                                                </div>

                                                <div class="row">

                                                    <div class="form-group col-lg-4 col-md-6 col-12">

                                                        <label>Full Name</label>

                                                        <input type="text" name="name" class="form-control"

                                                            placeholder="Your Name" value="{{ $user->name }}"

                                                            readonly="">

                                                    </div>

                                                    <div class="form-group col-lg-4 col-md-6 col-12">

                                                        <label>Email Address</label>

                                                        <input type="text" name="email" class="form-control"

                                                            placeholder="Email" value="{{ $user->email }}"

                                                            readonly="">

                                                    </div>



                                                    <div class="form-group col-lg-4 col-md-6 col-12">

                                                        <label>Phone Number</label>

                                                        <input type="text" name="mobile" class="form-control"

                                                            placeholder="Phone Number" value="{{ $user->mobile }}"

                                                            readonly="">

                                                        <div class="verify-text">

                                                            <p class="verify">Verify</p>

                                                            <p class="verified"><i class="fas fa-check"></i></p>

                                                        </div>

                                                    </div>

                                                    <div class="form-group col-lg-4 col-md-6 col-12">

                                                        <label>Pan Card</label>

                                                        <input type="text" name="name" class="form-control"

                                                            placeholder="Pan Card" value="{{ $user->pan }}"

                                                            readonly="">

                                                    </div>

                                                    <div class="form-group col-lg-4 col-md-6 col-12">

                                                        <label>Address</label>

                                                        <input type="text" name="name" class="form-control"

                                                            placeholder="Address"

                                                            value="1 Sheikh Mohammed bin Rashid Blvd - Downtown Dubai - Dubai - United Arab Emirates"

                                                            readonly="">

                                                    </div>



                                                    <div class="form-group col-lg-4 col-md-6 col-12">

                                                        <label>Country</label>

                                                        <!-- <input type="text" name="name" class="form-control" placeholder="Phone Number" value="+971-123-456-7890" readonly=""> -->

                                                        <select class="form-select" aria-label="Default select example"

                                                            readonly="">

                                                            <option selected>UAE</option>

                                                            <option value="1">One</option>

                                                            <option value="2">Two</option>

                                                            <option value="3">Three</option>

                                                        </select>

                                                    </div>

                                                    <div class="form-group col-lg-4 col-md-6 col-12">

                                                        <label>City</label>

                                                        <input type="text" name="name" class="form-control"

                                                            placeholder="City" value="UAE" readonly="">

                                                    </div>

                                                    <div class="form-group col-lg-4 col-md-6 col-12">

                                                        <label>Zip Code</label>

                                                        <input type="text" name="name" class="form-control"

                                                            placeholder="Zip Code" value="110022" readonly="">

                                                    </div>

                                                </div>

                                                <div class="row">

                                                    <div class="form-group col-lg-12 col-md-6 col-12">

                                                        <div class="profile-up-button">

                                                            <button class="btn btn-profle-update">

                                                                Update Profile

                                                            </button>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </form>

                                    </div>

                                </div>

                            </div>





                            <div class="tab-pane fade" id="v-pills-change-password" role="tabpanel"

                                aria-labelledby="v-pills-change-password-tab">

                                <div class="change-pass-main">

                                    <div class="poll-quest-head">

                                        <h3>Change <span>Password</span></h3>

                                        <p>Update your password to keep your account secure. We recommend using a strong,

                                            unique password to protect your personal information. Your security matters —

                                            stay in control.</p>

                                    </div>

                                    <div class="change-password-form">

                                        <div class="login-form-inner">

                                            <form action="{{ route('user-change-password') }}" method="POST">

                                                @csrf

                                                <div class="form-group pass-view-inp">

                                                    <input type="password" class="form-control" name="current_password"

                                                        id="currentPassword" placeholder="Current Password">

                                                    <p class="btn btn-pass-view"

                                                        onclick="viewPasswordFunc('currentPassword')"><i

                                                            class="far fa-eye"></i></p>

                                                </div>

                                                <div class="form-group pass-view-inp">

                                                    <input type="password" class="form-control" name="password"

                                                        id="newPassword" placeholder="New Password" required>

                                                    <p class="btn btn-pass-view"

                                                        onclick="viewPasswordFunc('newPassword')"><i

                                                            class="far fa-eye"></i></p>

                                                </div>

                                                <div class="form-group pass-view-inp">

                                                    <input type="password" class="form-control" name="cpassword"

                                                        id="cpassword" placeholder="Confirm Password" required>

                                                    <p class="btn btn-pass-view" onclick="viewPasswordFunc('cpassword')">

                                                        <i class="far fa-eye"></i>

                                                    </p>

                                                </div>



                                                <div class="form-group">

                                                    <button type="submit" class="btn btn-sign-in">Update

                                                        Password</button>

                                                </div>





                                            </form>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="v-pills-Voted" role="tabpanel"

                                aria-labelledby="v-pills-Voted-tab">

                                <div class="poll-question-main voted-wrapp">

                                    <div class="poll-quest-head">

                                        <h3>Opinion <span>Recorded</span></h3>

                                        <p>Thanks for sharing your opinion! Your vote has been recorded and counted. Stay

                                            tuned to see how others feel — your input helps shape the bigger picture. You've

                                            made your voice heard — great choice!</p>

                                    </div>

                                    <div class="row">

                                        @if (isset($vodetQuestions) && count($vodetQuestions) > 0)

                                            @foreach ($vodetQuestions as $cs)

                                                <div class="col-lg-4 col-md-6 col-12">

                                                    <div class="poll-box">

                                                         <p>{{ $cs->category->title ?? '' }}</p>

                                                        <h3>{{ $cs->title }}</h3>

                                                        <a href="#">Voted</a>

                                                    </div>

                                                </div>

                                            @endforeach

                                        @endif

                                        



                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



            </div>

        </div>

    </section>

    <!--========================my account section end =======================================-->

@stop

