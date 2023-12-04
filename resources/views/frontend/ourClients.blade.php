@extends('layouts.frontend-layout.master')
@section('title')
    {{ $setting->meta_title }}
@endsection
@section('meta_description')
    <meta name="description" content="{{ $setting->meta_description }} ">
@endsection
@section('meta_keywords')
    <meta name="keyword" content="{{ $setting->meta_keywords }} ">
@endsection
@section('content')
    <div class="container-fluid nav-container content_segment" style="min-height: 26vw; padding-top:48px;background:#0F749C">
        <div class="row m-0 p-0 d-flex justify-content-between content-box">
            <div class="col-md-12 col-xxl-7 col-xl-8 col-lg-7">
                <label for="">
                    <h1 class="text-white"> {{ $banner->title }}
                    </h1>
                </label>
                <p class="main-p text-justify">
                    {{ $banner->description }}
                </p>
                <div class="container-fluid m-0 px-0 py-2  mb-lg-5">

                    <div class="container-fluid m-0 px-0 py-2">
                        <div class="col-12 col-md-5 py-4" style="max-width: 200px;">
                            <div class="submit-button"><a class="text-decoration-none text-white" href="#trusted-by">Explore All</a></div>
                        </div>
                    </div>

                </div>
            </div>
            <div class=" col-md-0 d-none d-lg-block col-xxl-5 col-xl-4 col-lg-5">


                <div class="container-fluid px-lg-0 pl-xl-5 px-xl-0 px-xxl-3">
                    <div class="container-fluid px-lg-0 pl-xl-5 px-xl-0 px-xxl-3">
                        <img src="{{ asset('/images/photos/' . $banner->image) }}" width="70%" height="auto"
                            class="img-fluid float-end pl-lg-0 pl-xl-5 px-xl-0 px-xxl-5 py-xxl-3"
                            alt="{{ $banner->alt_text }}">
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="container-fluid py-4" style="padding-left: 8%;  padding-right:8%;" id="trusted-by">
        <h3>Trusted By Companies Including:</h3>
        <div class="row align-items-center d-flex justify-content-evenly">
            @foreach ($clients as $client)
            <div class="col-4 col-xl-2 p-2">
                <div class="card client-card border border-0 d-flex justify-content-center"
                    style="max-height: 100px; min-height: 100px; ">
                    <img src="{{ asset('images/photos/' . $client->image) }}" alt="" style="object-fit: contain; height: 85px;">
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="container-fluid content_segment" style="background-color: #ffff;">
        <div class="row align-items-center">
            <div class="col-12 col-lg-4">
                <div class="container-fluid px-4 pt-4" style="background-color:#0f749c; border-radius:10px; ">
                    <h3 class="text-light">Our Working <br>
                        Process - How<br>
                        We Work For Our<br>
                        Customers</h3>
                    <p class="text-light">We currently support Facebook, Instagram, LinkedIn and Twitter. More to come.
                    </p>
                    <div class="container-fluid m-0 px-0 py-2">
                        <div class="col-12 col-md-5 py-4" style="max-width: 200px;">
                            <a class="text-center text-white submit-button" href="{{ route('contact-us') }}">Hire Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8 pt-3 pt-lg-0">
                <div class="row">
                    @foreach ($service3 as $key => $service)
                        <div class="col-6 px-5">
                            <h1 class="text-dark">0{{ $key + 01 }}</h1>
                            <h4>{{ $service->name }}</h4>
                            <p>
                                {{ $service->description }}
                            </p>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
