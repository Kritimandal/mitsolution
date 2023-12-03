@extends('layouts.frontend-layout.master')
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
                            <div class="submit-button">Explore All</div>
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
        @if (($key % 2) != 0)
        <div class="container-fluid content_segment" style="background-color: #f8f8f8;">
            <div class="row">
                <div class="col-12 order-2 order-md-1 order-md-1 col-md-8 px-0 pt-3 align-items-center">
                    <h2>{{ $service->name }}</h2>
                    <p class="main-p text-dark">{{ $service->description }}
                    </p>
                    <div class="container-fluid m-0 px-0 py-2">
                        <div class="col-12 col-md-5 py-4" style="max-width: 200px;">
                            <div class="submit-button">Read More</div>
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
                            <div class="submit-button">Read More</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
            
        @endif
        <hr class="p-0 m-0">
    @endforeach

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
                            <div class="submit-button"><a href="{{ route('contact-us') }}">Hire Us</a></div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-8 pt-3 pt-lg-0">
                <div class="row">
                    @foreach ( $service3 as $key=>$service )
                    <div class="col-6 px-5">
                        <h1 class="text-dark">0{{$key + 01}}</h1>
                        <h4>{{ $service->name}}</h4>
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
                                        <img src="{{ asset('/images/photos/' . $service->image) }}" width="30%" class="img-fluid"
                                            alt="">
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
@endsection
