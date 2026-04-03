@extends('front.layouts.master')
@section('title', $data->meta_title)
@section('keywords', $data->meta_keywords)
@section('description', $data->meta_description)

@section('container')

    <!-- About Section -->
    {{-- <section class="banner-wrapper position-relative py-4">

        <div class="container">
            <div class="row align-items-center"> 
                <div class="col-lg-11 col-md-11 col-12">
                    @include('front.layouts.slider')
                </div>
     
                <div class="col-lg-1 col-md-1 col-12 d-flex justify-content-center">
                    <div class="banner-social">
                        <ul class="list-unstyled text-center">
                            <li class="mb-2"><a href="{{ $setting_data['instagram'] }}" class="text-dark"><i class="fab fa-instagram fa-lg"></i></a></li>
                            <li class="mb-2"><a href="{{ $setting_data['facebook'] }}" class="text-dark"><i class="fab fa-facebook-f fa-lg"></i></a></li>
                            <li><a href="{{ $setting_data['twitter'] }}" class="text-dark"><i class="fab fa-twitter fa-lg"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
     
        <div class="banner-shape position-absolute bottom-0 end-0">
            <img src="{{ asset('front/images/banner-shape.png') }}" alt="Banner Shape" class="img-fluid">
        </div>
    </section> --}}
    
    <section class="about_wrapper mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow rounded p-4 text-center">
                        <h4 class="mb-4">User Profile</h4>
                        <p><strong>Name:</strong> {{ $user->name }}</p>
                        {{-- <p><strong>Username:</strong> {{ $user->username }}</p> --}}
                        <p><strong>Email:</strong> {{ $user->email }}</p>
                        {{-- <p><strong>Address:</strong> {{ $user->address }}</p> --}}
                        {{-- <p><strong>City:</strong> {{ $user->city }}</p> --}}
                        {{-- <p><strong>Country:</strong> {{ $user->country }}</p> --}}
                        <a href="{{ route('user.logout') }}" class="btn btn-danger mt-3"><i class="fas fa-sign-out-alt me-2"></i>Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    


@stop
