@extends('layouts.frontend-layout.master')
@section('title')
    {{ $banner->category->meta_title }}
@endsection
@section('meta_description')
    <meta name="description" content="{{ $banner->category->meta_description }} ">
@endsection
@section('meta_keywords')
    <meta name="keyword" content="{{ $banner->category->meta_keywords }} ">
@endsection
@section('content')
    <div class="container-fluid nav-container content_segment" style="min-height: 26vw; padding-top:48px;">
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
                            <a href="#join" class="text-white">  <div class="submit-button">Explore All</div></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class=" col-md-0 d-none d-lg-block col-xxl-5 col-xl-4 col-lg-5">


                <div class="container-fluid px-lg-0 pl-xl-5 px-xl-0 px-xxl-3">
                    <div class="container-fluid px-lg-0 pl-xl-5 px-xl-0 px-xxl-3">
                        <img src="{{ asset('/images/photos/' . $banner->image) }}"
                            class="img-fluid float-end pl-lg-0 pl-xl-5 px-xl-0 px-xxl-5 py-xxl-3" alt="">
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="container-fluid content_segment">
        <h4>Benifits</h4>
        <h5 class="text-dark mb-4">Why You should Join Our Awsome Team</h5>
        <div class="row">
            <div class="col-12 col-lg-6 d-none d-lg-block d-flex align-items-center">

                <img src="{{ asset('/images/photos/careers.png') }}" width="80%" class="img-fluid px-3" alt="">
            </div>
            <div class="col-12 col-lg-6">
                <div class="row pt-3">
                    @foreach ($benefits as $benefit)
                        <div class="col-6">
                            <div class="card p-3 benifits-card">
                                <div class="container-fluid">
                                    <img src="{{ asset('/images/photos/' . $benefit->image) }}" class="img-thumbnail" alt=""
                                        style="max-height:80px; aspect-ratio:1/1; padding:5%; border:0; background-color:#e7f2ff">
                                    <h5 class="text-dark pt-3">{{$benefit->name}}</h5>
                                    <p class="text-reset">{{$benefit->description}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid content_segment" id="join" style="background-color: #f8f8f8;">
        <h4>How To Join?</h4>
        <div class="row px-3 justify-content-center">
            @foreach ($joins as $join)
                <div class="col-6 col-md-4 col-lg-3 pb-3 pb-lg-2">
                    <div class="container-fluid" style="padding-top: 60px;">
                        <div class="card industries_we_serve_card" style="height: 100%">
                            <div class="container-fluid d-flex justify-content-center">
                                <div class="avatar bg-light p-3" style="border:3px solid #ff6a6f; margin-top:-50px">
                                    <img src="{{ asset('/images/photos/' . $join->image) }}" alt="">
                                </div>
                            </div>

                            <div class="container-fluid" style="height: 200px">
                                <h3 class="text-center pt-3">{{ $join->title }}</h3>
                                <p class="fw-semibold text-dark test-align-denter px-4">
                                    {{ $join->description }}
                                </p>
                            </div>
                            <div class="card-footer d-flex justify-content-center"
                                style="background-color: white; border:0;">
                                <a href="{{ route('application-create') }}">
                                    <div class="btn" style="color: white; background-color:#ff555a; margin-bottom:-26px">
                                        Drop your Cv</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
