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
    {{-- banner section --}}

    <div class="container-fluid nav-container content_segment" style="min-height: 26vw; margin-top:0px;">
        <div class="row m-0 p-0 d-flex justify-content-between content-box">
            <div class="col-md-12 col-xxl-7 col-xl-8 col-lg-7">
                <label for="">
                    <h2 class="text-white"> {!! $banner->title !!}
                    </h2>
                </label>
                <p class="main-p text-justify">
                    {{ $banner->description }}
                </p>
                <div class="container-fluid m-0 px-0 py-2  mb-lg-5">

                    <div class="container-fluid m-0 px-0 py-2">
                        <div class="col-12 col-md-5 py-4" style="max-width: 200px;">
                            <a href="#our-solution" class="text-decoration-none text-white">
                                <div class="submit-button">
                                    Explore All</div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class=" col-md-0 d-none d-lg-block col-xxl-5 col-xl-4 col-lg-5">


                <div class="container-fluid px-lg-0 pl-xl-5 px-xl-0 px-xxl-3">
                    <div class="container-fluid px-lg-0 pl-xl-5 px-xl-0 px-xxl-3">
                        <img src="{{ asset('/images/photos/' . $banner->image) }}"
                            class="img-fluid float-end pl-lg-0 pl-xl-5 px-xl-0 px-xxl-5 py-xxl-3"
                            alt="{{ $banner->alt_text }}">
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="container-fluid content_segment">
        <label class="mb-4 mb-md-1  mb-lg-4 pt-3" for="our-services">


            <h2>{{ $subcategory->name }}</h2>
        </label>
        <div class="row">
            <div class="col-12 order-1 order-md-2 order-lg-1  col-md-4  d-flex justify-content-center align-items-center">
                <div class="container-fluid p-0 m-0" style="max-width: 400px"><img
                        src="{{ asset('/images/photos/' . $subcategory->image) }}" class="img-fluid"
                        alt="{{ $subcategory->alt_text }}">
                </div>
            </div>
            <div class="col-12 order-2 order-md-1 order-md-2 col-md-8">
                <div
                    class="container-fluid text-content-box text-dark px-0 pt-0 pt-md-0 pt-lg-5 d-flex justify-content-center">
                    {!! $subcategory->description !!}
                </div>
                <div class="container-fluid  pt-3">
                    <div class="row">
                        <div class="col-4 d-flex justify-content-center align-items-center">
                            <div class="container-fluid justify-content-center align-items-center">
                                <h3 class="text-dark text-center">10</h3>
                                <div class="container-fluid d-flex justify-content-center">
                                    <span class="text-center fw-semibold"> Team Members</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 d-flex justify-content-center align-items-center">
                            <div class="container-fluid justify-content-center align-items-center">
                                <h3 class="text-dark text-center">+20</h3>
                                <div class="container-fluid d-flex justify-content-center">
                                    <span class="text-center fw-semibold">Succesful Projects</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 d-flex justify-content-center align-items-center">
                            <div class="container-fluid justify-content-center align-items-center">
                                <h3 class="text-dark text-center">+7</h3>
                                <div class="container-fluid d-flex justify-content-center">
                                    <span class="text-center fw-semibold"> Years in IT Sphere</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- end service section --}}

    {{-- our solution section --}}
    <section class="solution-section wrapper" id="our-solution">
        <div class="container ">
            <h2>Our Solutions</h2>
            <div class="d-flex align-items-start p-0 m-0 tech-we-work ">
                <div class="nav navss flex-column nav-pills me-1 nav-tabs-first-section" id="v-pills-tab" role="tablist"
                    aria-orientation="vertical" style=" border-right: 1px solid rgb(225, 225, 225);">
                    <button class="nav-link call my-1 active" id="v-pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                        aria-selected="true">Web</button>
                    <button class="nav-link my-1" id="v-pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                        aria-selected="false" tabindex="-1">Database</button>
                    <button class="nav-link my-1" id="v-pills-messages-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                        aria-selected="false" tabindex="-1">Analytics</button>
                    <button class="nav-link my-1" id="v-pills-settings-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings"
                        aria-selected="false" tabindex="-1">Testing</button>
                </div>
                <div class="tab-content" id="v-pills-tabContent" style="width: 100%;">
                    <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab">
                        <div class="row pt-4 m-0 d-flex justify-content-evenly align-items-center">
                            @foreach ($technologies1 as $technology)
                                <div class="col-4 p-2 col-md-2">
                                    <div class="card tech-icons  px-0 m-0">
                                        <div class=" card-body"><img src="{{ 'images/photos/' . $technology->image }}"
                                                alt="{{ $technology->alt_text }}" width="100%">
                                        </div>
                                        <div class="text-center">
                                            <span class="icon-label">{{ $technology->name }}</span>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab">
                        <div class="row pt-4 m-0 d-flex justify-content-evenly align-items-center">
                            @foreach ($technologies2 as $technology)
                                <div class="col-4 p-2 col-md-2">
                                    <div class="card tech-icons  px-0 m-0">
                                        <div class=" card-body"><img src="{{ 'images/photos/' . $technology->image }}"
                                                alt="{{ $technology->alt_text }}" width="100%">
                                        </div>
                                        <div class="text-center">
                                            <span class="icon-label">{{ $technology->name }}</span>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>

                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                        aria-labelledby="v-pills-messages-tab">
                        <div class="row pt-4 m-0 d-flex justify-content-evenly align-items-center">
                            @foreach ($technologies3 as $technology)
                                <div class="col-4 p-2 col-md-2">
                                    <div class="card tech-icons  px-0 m-0">
                                        <div class=" card-body"><img src="{{ 'images/photos/' . $technology->image }}"
                                                alt="{{ $technology->alt_text }}" width="100%">
                                        </div>
                                        <div class="text-center">
                                            <span class="icon-label">{{ $technology->name }}</span>
                                        </div>
                                    </div>

                                </div>
                            @endforeach



                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                        aria-labelledby="v-pills-settings-tab">
                        <div class="row pt-4 m-0 d-flex justify-content-evenly align-items-center">
                            @foreach ($technologies4 as $technology)
                                <div class="col-4 p-2 col-md-2">
                                    <div class="card tech-icons  px-0 m-0">
                                        <div class=" card-body"><img src="{{ 'images/photos/' . $technology->image }}"
                                                alt="{{ $technology->alt_text }}" width="100%">
                                        </div>
                                        <div class="text-center">
                                            <span class="icon-label">{{ $technology->name }}</span>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- end our solution section --}}

    {{-- our project section --}}

    <div class="container-fluid content_segment">
        <h2>Our Projects</h2>
        <div class="container-fluid p-0 m-0 project-bg"
            style=" background-image:url('{{ asset('images/medias/project-banner.png') }}'); background-size: fit; background-repeat: no-repeat; ">
            <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="90000">
                        <div class="container-fluid px-0 px-lg-5">
                            <div class="row px-2 px-md-5 d-flex justify-content-between align-items-center ">
                                <div class="col-sm-8 col-md-9 col-xl-6 p-0 m-0 d-flex align-items-center" style="min-height:500px;">
                                    <div class="container-fluid" style="margin:auto">
                                        <img src="{{ asset('images/photos/' . $project1->image) }}" class="img-fluid"
                                            alt="{{$project1->alt_text}}">
                                    </div>
                                </div>
                                <div
                                    class="col-sm-4 col-md-3 col-xl-5 p-0 m-0 d-flex justify-content-center align-items-center ">
                                    <div class="container-fluid p-0 m-0">
                                        <h2 class="text-center text-white"> {{ $project1->name }}</h2>
                                        <div class="row d-flex justify-content-center p-0 m-0">

                                            <div
                                                class="col-12 col-xl-5 d-flex justify-content-end p-0 m-0 d-flex justify-content-center justify-content-xl-end pb-1 pb-xl-0 ">
                                                <a href=" {{ isset($project1->post) ? route('post', $project1->post) : '#' }}"
                                                    class="text-decoration-none p-0 m-0">
                                                    <div class="btn align-items-center refrence-button">
                                                        <h5 class="text-light">About</h5>
                                                    </div>
                                                </a>
                                            </div>
                                            <div
                                                class="col-12 col-xl-7 p-0 m-0 d-flex justify-content-center justify-content-xl-start">
                                                <a href="{{ $project1->demo_url }}" class="text-decoration-none">
                                                    <div class="btn align-items-center  refrence-button">
                                                        <h5 class="text-light">Site Extension</h5>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach ($projects as $project)
                        <div class="carousel-item" data-bs-interval="90000">
                            <div class="container-fluid px-0 px-lg-5">
                                <div class="row px-2 px-md-5 d-flex justify-content-between align-items-center">
                                    <div class="col-sm-8 col-md-9 col-xl-6 p-0 m-0 d-flex align-items-center project" style="min-height:500px!important;">
                                        <div class="container-fluid" style="margin:auto">
                                            <img src="{{ asset('images/photos/' . $project->image) }}" class="img-fluid"
                                                alt="{{$project->alt_text}}">
                                        </div>
                                    </div>
                                    <div
                                        class="col-sm-4 col-md-3 col-xl-5 p-0 m-0 d-flex justify-content-center align-items-center ">
                                        <div class="container-fluid p-0 m-0">
                                            <h2 class="text-center text-white"> {{ $project->name }}</h2>
                                            <div class="row d-flex justify-content-center p-0 m-0">

                                                <div
                                                    class="col-12 col-xl-5 d-flex justify-content-end p-0 m-0 d-flex justify-content-center justify-content-xl-end pb-1 pb-xl-0 ">
                                                    <a href=" {{ isset($project->post) ? route('post', $project->post) : '#' }}"
                                                        class="text-decoration-none p-0 m-0">
                                                        <div class="btn align-items-center refrence-button">
                                                            <h5 class="text-light">About</h5>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div
                                                    class="col-12 col-xl-7 p-0 m-0 d-flex justify-content-center justify-content-xl-start">
                                                    <a href="{{ $project->demo_url }}" class="text-decoration-none">
                                                        <div class="btn align-items-center  refrence-button">
                                                            <h5 class="text-light">Site Extension</h5>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>

                </button>
            </div>
        </div>

    </div>


    {{-- end our project section --}}


    {{-- our testimonial section --}}


    <div class="container ">
        <div class="row">
            <div class="col-6">

                <h2>Testimonials</h2>
                <p class="text-dark">See What Our Customer Say About Us</p>

            </div>
            <div class="col-6 d-flex justify-content-end">
                <div class="container-fluid d-flex justify-content-end">
                    <button class="carousel-control-prev-top px-4" type="button" data-bs-target="#testimonials"
                        data-bs-slide="prev">
                        <h5 class="circle-icon"> <i class="fa-solid fa-arrow-left"></i></h5>
                    </button>
                    <button class="carousel-control-next-top px-4" type="button" data-bs-target="#testimonials"
                        data-bs-slide="next">
                        <h5 class="circle-icon"> <i class="fa-solid fa-arrow-right"></i></h5>
                    </button>
                </div>
            </div>
        </div>

        <div id="testimonials" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <div class="row justify-content-center">
                        @foreach ($testimonials as $testimonial)
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 p-2">
                                <div class="card client-card border border-0" style="height:100%;">
                                    <p>{{ $testimonial->content }}</p>
                                    <div class="row align-items-center">
                                        <div class="col-3 p-3">
                                            <div class="avatar" style="width: 60px !important; height: 60px !important;">
                                                <img src="{{ isset($testimonial->image) ? asset('/images/photos/' . $testimonial->image) : asset('/images/medias/mitsolution-logo.png') }}"
                                                    class="img-fluid" alt="{{ $testimonial->alt_text }}">
                                            </div>
                                        </div>
                                        <div class="col-9 fw-semibold text-dark">{{ $testimonial->name }}
                                            <br>
                                            <span
                                                class="text-secondary fw-normal">{{ $testimonial->designation }}</span><br>
                                            @php
                                                $counter = 1;
                                            @endphp

                                            @while ($counter <= $testimonial->rating)
                                                <i class="fa-solid fa-star" style="color: #ffa41c"></i>
                                                @php
                                                    $counter++;
                                                @endphp
                                            @endwhile
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="3000">
                    <div class="row justify-content-center">
                        @foreach ($testimonials2 as $testimonial)
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 p-2">
                                <div class="card client-card border border-0" style="height:100%;">
                                    <p>{{ $testimonial->content }}</p>
                                    <div class="row align-items-center">
                                        <div class="col-3 p-3">
                                            <div class="avatar" style="width: 60px !important; height: 60px !important;">
                                                <img src="{{ isset($testimonial->image) ? asset('/images/photos/' . $testimonial->image) : asset('/images/medias/mitsolution-logo.png') }}"
                                                    class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="col-9 fw-semibold text-dark">{{ $testimonial->name }}
                                            <br>
                                            <span
                                                class="text-secondary fw-normal">{{ $testimonial->designation }}</span><br>
                                            @php
                                                $counter = 1;
                                            @endphp

                                            @while ($counter <= $testimonial->rating)
                                                <i class="fa-solid fa-star" style="color: #ffa41c"></i>
                                                @php
                                                    $counter++;
                                                @endphp
                                            @endwhile


                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>


            </div>
        </div>
    </div>


    {{-- end our testimonial section --}}

    {{-- our clients section --}}


    <div class="container ">

        <h2>Happy Clients</h2>

        <div id="happy_clients" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
            <div class="carousel-inner">

                <div class="carousel-item" data-bs-interval="3000">
                    <div class="row align-items-center d-flex justify-content-evenly">
                        @foreach ($clients as $client)
                            <div class="col-4 col-xl-2 p-2">
                                <div class="card client-card border border-0 d-flex justify-content-center"
                                    style="max-height: 100px; min-height: 100px; ">
                                    <img src="{{ isset($client->image) ? asset('/images/photos/' . $client->image) : asset('/images/medias/mitsolution-logo.png') }}"
                                        alt="" style="object-fit: contain; height: 85px;">
                                </div>
                                <div class="container-fluid">
                                    <h6 class="text-center text-secondary">{{ $client->name }}</h6>
                                </div>
                            </div>
                        @endforeach
                    </div>


                </div>

                <div class="carousel-item active" data-bs-interval="3000">
                    <div class="row align-items-center d-flex justify-content-evenly">
                        @foreach ($clients2 as $client)
                            <div class="col-4 col-xl-2 p-2">
                                <div class="card client-card border border-0 d-flex justify-content-center"
                                    style="max-height: 100px; min-height: 100px; ">
                                    <img src="{{ isset($client->image) ? asset('/images/photos/' . $client->image) : asset('/images/medias/mitsolution-logo.png') }}"
                                        alt="" style="object-fit: contain; height: 85px;">
                                </div>
                                <div class="container-fluid">
                                    <h6 class="text-center text-secondary">{{ $client->name }}</h6>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#happy_clients" data-bs-slide="prev">
                <h4 class="circle-icon"> <i class="fa-solid fa-arrow-left"></i></h4>

            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#happy_clients" data-bs-slide="next">
                <h4 class="circle-icon"> <i class="fa-solid fa-arrow-right"></i></h4>

            </button>

        </div>
    </div>
    {{-- end our clients section --}}
@endsection
