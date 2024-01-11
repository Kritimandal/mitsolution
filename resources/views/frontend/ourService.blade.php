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
    <div class="container-fluid nav-container content_segment" style="min-height: 26vw; margin-top:48px;">
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
                            <a class="text-decoration-none text-white" href="#we-serve"><div class="submit-button">Explore
                                    All</div></a>
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
    @foreach ($services as $key => $service)
    @php
    $firstpost = $service->post->first();
    $pageSlug = $firstpost ? route('subcategory-post', $service) : '#';
@endphp
        @if ($key % 2 != 0)
            <div class="container-fluid content_segment" style="background-color: #f8f8f8;">
                <div class="row">
                    <div class="col-12 order-2 order-md-1 order-md-1 col-md-8 px-0 pt-3 align-items-center">
                        <h2>{{ $service->name }}</h2>
                        <p class="main-p text-dark">{{ $service->description }}
                        </p>

                        <div class="container-fluid m-0 px-0 py-2">
                            <div class="col-12 col-md-5 py-4" style="max-width: 200px;">
                               
                                {{-- <a
                                href="{{ isset($service->post->first()->slug) ? route('subcategory-post', $service->id) : '#' }} "
                                class="text-decoration-none text-white"> <div class="submit-button">Read More</div></a> --}}
                                <a
                                href="{{ $pageSlug }} "
                                class="text-decoration-none text-white"> <div class="submit-button">Read More</div></a>
                            </div>
                        </div>

                    </div>
                    <div
                        class="col-12 order-1 order-md-2 order-lg-2 px-0 col-md-4  d-flex justify-content-center align-items-center">
                        <div class="container-fluid p-0 m-0" style="max-width: 300px"><img
                                src="{{ asset('/images/photos/' . $service->image) }}" class="img-fluid"
                                alt="{{ $service->alt_text }}">
                        </div>
                    </div>

                </div>
            </div>
        @else
            <div class="container-fluid content_segment">
                <div class="row">
                    <div
                        class="col-12 order-1 order-md-2 order-lg-1  col-md-4  d-flex justify-content-center align-items-center">
                        <div class="container-fluid p-0 m-0" style="max-width: 300px"><img
                                src="{{ asset('/images/photos/' . $service->image) }}" class="img-fluid"
                                alt="{{ $service->alt_text }}">
                        </div>
                    </div>
                    <div class="col-12 order-2 order-md-1 order-md-2 col-md-8 pt-3 align-items-center">
                        <h2>{{ $service->name }}</h2>
                        <p class="main-p text-dark">{{ $service->description }}</p>
                        <div class="container-fluid m-0 px-0 py-2">
                            <div class="col-12 col-md-5 py-4" style="max-width: 200px;">
                                {{-- <a
                                href="{{ isset($service->post->first()->slug) ? route('subcategory-post', $service->post->first()) : '#' }} "
                                class="text-decoration-none text-white"> <div class="submit-button">Read More</div></a> --}}
                                <a
                                href="{{ $pageSlug }} "
                                class="text-decoration-none text-white"> <div class="submit-button">Read More</div></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        @endif
        <hr class="p-0 m-0">
    @endforeach

    <div class="container-fluid content_segment" id="we-serve" style="background-color: #ffff;">
        <div class="row align-items-center">
            <div class="col-12 col-lg-4">
                <div class="container-fluid px-4 pt-4" style="background-color:#0f749c; border-radius:10px; ">
                    <h3 class="text-light">Our Working <br>
                        Process - How<br>
                        We Work For Our<br>
                        Customers</h3>
                    {{-- <p class="text-light">We currently support Facebook, Instagram, LinkedIn and Twitter. More to come.
                    </p> --}}
                    <div class="container-fluid m-0 px-0 py-2">
                        <div class="col-12 col-md-5 py-4" style="max-width: 200px;">
                            <a href="{{ route('contact-us') }}"
                            class="text-decoration-none text-white"> <div class="submit-button">Hire Us</div></a>
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
    {{-- industried we serve --}}


    <div class="container-fluid content_segment" style="background-color: #f8f8f8;">
        <h3>Industries We Serve</h3>
        <div class="row justify-content-center py-4">
            @foreach ($service2 as $service)
                <div class="col-12 col-sm-6 col-lg-4 py-3 py-lg-2">
                    <div class="container-fluid d-flex justify-content-center" style="height: 100%;">
                        <div class="col-12 col-xl-10">
                            {{-- <a href="#" class="text-decoration-none"> --}}
                            <div class="card industries_we_serve_card pt-4 px-2  mt-3">
                                <div class="container-fluid d-flex justify-content-center">
                                    <img src="{{ isset($service->image) ? asset('/images/photos/' . $service->image) : asset('/images/medias/mitsolution-logo.png') }}" width="30%"
                                        class="img-fluid" alt="">
                                </div>
                                <h5 class="pt-3 text-center" style="color: #0e1f51"> {{ $service->name }}</h5>
                                <p class="text-dark text-center" style="font-size: 16px; font-weight:500;">
                                    {{ $service->description }}
                                </p>

                            </div>
                            {{-- </a> --}}
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
    <hr class="p-0 m-0">
    <div class="container-fluid content_segment">
        <div class="row justify-content-center align-items-center">
            <h3>What makes us special?</h3>
            <p class="main-p text-dark px-5">MIT Solution is one of the most reckoned Web Development companies.
                Rapidly changing business state of affairs and latest technologies being .</p>
            <h6 class="text-center fw-bold" style="color:#ff555a;">WE WORK WITH FOLLOWING TECHNOLOGIES!</h6>
            <div class="col-7">
                <div class="cntainer-fluid py-4">
                    <div class="row d-flex justify-content-between px-4">
                        <div class="col-2 fw-bold text-dark">
                            PHP
                        </div>
                        <div class="col-2 text-end fw-bold text-dark">90%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="background-color:#ff555a; width: 90%;"
                            aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">90%</div>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <div class="cntainer-fluid py-4">
                    <div class="row d-flex justify-content-between px-4">
                        <div class="col-2 fw-bold text-dark">
                            Java
                        </div>
                        <div class="col-2 text-end fw-bold text-dark">95%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="background-color:#ff555a; width: 95%;"
                            aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <div class="cntainer-fluid py-4">
                    <div class="row d-flex justify-content-between px-4">
                        <div class="col-2 fw-bold text-dark">
                            Laravel
                        </div>
                        <div class="col-2 text-end fw-bold text-dark">90%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="background-color:#ff555a; width: 90%;"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <div class="cntainer-fluid py-4">
                    <div class="row d-flex justify-content-between px-4">
                        <div class="col-2 fw-bold text-dark">
                            HTML
                        </div>
                        <div class="col-2 text-end fw-bold text-dark">98%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="background-color:#ff555a; width: 98%;"
                            aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">98%</div>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <div class="cntainer-fluid py-4">
                    <div class="row d-flex justify-content-between px-4">
                        <div class="col-2 fw-bold text-dark">
                            Java Script
                        </div>
                        <div class="col-2 text-end fw-bold text-dark">80%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="background-color:#ff555a; width: 80%;"
                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <div class="cntainer-fluid py-4">
                    <div class="row d-flex justify-content-between px-4">
                        <div class="col-2 fw-bold text-dark">
                            MySQL
                        </div>
                        <div class="col-2 text-end fw-bold text-dark">92%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="background-color:#ff555a; width: 92%;"
                            aria-valuenow="92" aria-valuemin="0" aria-valuemax="100">92%</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
