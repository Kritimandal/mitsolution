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

<div class="container-fluid nav-container content_segment" style="min-height: 26vw; padding-top:48px;">
    <div class="row m-0 p-0 d-flex justify-content-between content-box">
        <div class="col-md-12 col-xxl-7 col-xl-8 col-lg-7">
            <label  for="">
                <h1 class="text-white"> {{$banner->title}}
                </h1>
            </label>
            <p class="main-p text-justify">
                {{$banner->description}}
            </p>
            <div class="container-fluid m-0 px-0 py-2  mb-lg-5">

                <div class="container-fluid m-0 px-0 py-2">
                    <div class="col-12 col-md-5 py-4" style="max-width: 200px;">
                        <a href="#our-solution" class="text-decoration-none text-white"> <div class="submit-button">Explore All</div></a>
                    </div>
                </div>

            </div>
        </div>
        <div class=" col-md-0 d-none d-lg-block col-xxl-5 col-xl-4 col-lg-5">


            <div class="container-fluid px-lg-0 pl-xl-5 px-xl-0 px-xxl-3">
                <div class="container-fluid px-lg-0 pl-xl-5 px-xl-0 px-xxl-3">
                    <img src="{{ asset('/images/photos/'. $banner->image) }}" class="img-fluid float-end pl-lg-0 pl-xl-5 px-xl-0 px-xxl-5 py-xxl-3" alt="">
                </div>
            </div>


        </div>
    </div>
</div>
<div class="container-fluid  content_segment">
    <h1 class="text-center text-dark pb-5">Companies we've collaborated with</h1>
    <div class="row  d-flex justify-content-between">
        <div class="col-8 col-sm-8 col-md-9 col-lg-8 col-xl-7">
            <p>Passage its ten led heated removal cordial. Preference any astonished unreserved Mrs. Prosperous
                understood Middleton in conviction an uncommonly do. Supposing so be resolving breakfast am or
                perfectly. Is drew am hill from me. Valley by oh twenty direct me sold.</p>
            <div class="container-fluid" style="border-left: #ff555a solid 4px">
                <p>
                    Prosperous understood Middleton in conviction an uncommonly do. Supposing Is drew am hill from
                    me
                </p>
            </div>
            <div class="container-fluid m-0 px-0 py-2">
                <div class="col-12 col-md-5 py-4" style="max-width: 200px;">
                    <div class="submit-button" style="background-color: black">Contact Us</div>
                </div>
            </div>
        </div>
        <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-5 d-flex justify-content-start">
            <div class="container-fluid m-0 p-3" style="background-color: #f1f1f1; border-radius:10px">
                <div class="row d-flex justify-content-center my-4">
                    <div class="col-12 col-xl-5 py-2 py-xl-0">
                        <div class="container-fluid px-3"><img src="images/logos/rbb_logo.png" class="img-fluid" alt=""></div>
                    </div>
                    <div class="col-12 col-xl-5 py-2 py-xl-0">
                        <div class="container-fluid"><img src="images/logos/konnectlead_logo.png" class="img-fluid" alt=""></div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center my-5">
                    <div class="col-12 col-xl-5 py-2 py-xl-0">
                        <div class="container-fluid px-3"><img src="images/logos/mit_logo.png" class="img-fluid" alt=""></div>
                    </div>
                    <div class="col-12 col-xl-5 py-2 py-xl-0">
                        <div class="container-fluid d-flex justify-content-center"><img src="images/logos/tewa_logo.png" width="60px" class="img-fluid" alt=""></div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center my-5">
                    <div class="col-12 col-xl-5 py-2 py-xl-0">
                        <div class="container-fluid px-3"><img src="images/logos/sanakisan_logo.png" class="img-fluid" alt=""></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<hr class="p-0 m-0">
<div class="container-fluid content_segment" style="background-color: #f8f8f8">
    <label for="our-services" style="padding-top: 4%;">
        <h4>Why MIT?</h4>
        <h5 class="text-dark">We Provide Solutions To
            Grow Your Business</h5>
        <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. thinking to further the
            overall proposition. </p>
    </label>
    <div class="row d-flex justify-content-between">
        <div class="col-12 col-md-7">
            <div class="row py-2">
                <div class="col-5">
                    <div class="row m-0 p-0">
                        <div class="col-2 d-flex justify-content-end">
                            <div class="container-fluid p-0 m-0" style="aspect-ratio:1/1;">
                                <img src="images/icons/check_icon.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-10 m-0 p-0">
                            <span class="fw-bold text-dark">2,800+ </span> <span class="text-dark">Active
                                Clients</span>
                            <p>provide a robust synopsis for
                                high level overviews.</p>
                        </div>
                    </div>

                </div>
                <div class="col-5">
                    <div class="row m-0 p-0">
                        <div class="col-2 d-flex justify-content-end">
                            <div class="container-fluid p-0 m-0" style="aspect-ratio:1/1;">
                                <img src="images/icons/check_icon.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-10 m-0 p-0">
                            <span class="fw-bold text-dark">10+ </span> <span class="text-dark">
                                Team members</span>
                            <p>provide a robust synopsis for
                                high level overviews.</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row py-3">
                <div class="col-5">
                    <div class="row m-0 p-0">
                        <div class="col-2 d-flex justify-content-end">
                            <div class="container-fluid p-0 m-0" style="aspect-ratio:1/1;">
                                <img src="images/icons/check_icon.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-10 m-0 p-0">
                            <span class="fw-bold text-dark">30+ </span> <span class="text-dark">Completed
                                Projects</span>
                            <p>We've completed projects for reputrd companies.</p>
                        </div>
                    </div>

                </div>
                <div class="col-5">
                    <div class="row m-0 p-0">
                        <div class="col-2 d-flex justify-content-end">
                            <div class="container-fluid p-0 m-0" style="aspect-ratio:1/1;">
                                <img src="images/icons/check_icon.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-10 m-0 p-0">
                            <span class="fw-bold text-dark">10+ </span> <span class="text-dark">Active
                                Projects</span>
                            <p>We are currently working on many projects in different fields.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-12 col-md-5">
            <div class="container-fluid py-4">
                <div class="row p-0 m-0">
                    <div class="col-5 d-flex justify-content-end">
                        <div role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="--value: 95"></div>
                    </div>
                    <div class="col-7">
                        <span>Clients</span><br>
                        <span class="fw-semibold text-dark">Quick Response</span>
                        <p style="font-size: 14px;">Objectively products whereas parallel platforms procedures</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-5 d-flex justify-content-end">
                        <div role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="--value: 85"></div>
                    </div>
                    <div class="col-7">
                        <span>Projects</span><br>
                        <span class="fw-semibold text-dark">Finished Jobs</span>
                        <p style="font-size: 14px;">Objectively products whereas parallel platforms procedures</p>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="container-fluid m-0 px-0 py-2">
        <div class="col-12 col-md-5 py-4" style="max-width: 200px;">
            <div class="submit-button">Hire Us</div>
        </div>
    </div>
</div>
@endsection