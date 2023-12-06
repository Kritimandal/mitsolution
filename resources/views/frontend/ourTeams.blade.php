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
                            <a href="#pills-board" class="text-decoration-none text-white"><div class="submit-button">Explore All</div></a>
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
    <div class="container-fluid py-2" style="padding-left: 5%; padding-right:5%;">

        <!-- changed margin here -->
        <div class="container-fluid">
            <ul class="nav nav-pills leaders-navs nav-justified" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-board-tab" data-bs-toggle="pill" data-bs-target="#pills-board"
                        type="button" role="tab" aria-controls="pills-board" aria-selected="true"
                        style="border-radius: 0; color: white;">Board Of Directors</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-our-team-tab" data-bs-toggle="pill" data-bs-target="#pills-our-team"
                        type="button" role="tab" aria-controls="pills-our-team" aria-selected="false"
                        style="border-radius: 0; color: white;" tabindex="-1">Our Team</button>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-board" role="tabpanel" aria-labelledby="pills-board-tab"
                style="padding: 0px;">
                <div class="container-fluid">
                    <div class="row d-flex justify-content-evenly">
                        @foreach ($boardmembers as $boardmember)
                        
                        <div class="col-11 d-flex justify-content-sm-center col-md-6 col-lg-4 col-xl-3 py-2">
                            <div class="card hover-image">
                                <div class="imgBx">
                                    <img src="{{ asset('/images/photos/' . $boardmember->image) }}">
                                </div>
                                <div class="details">
                                    <h3 class="pb-2 pb-md-4 text-white">{{ $boardmember->name }}</h3>
                                    <h5 class="text-center text-light">{{ $boardmember->designation }}</h5>
                                    <p>{{ $boardmember->content }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>

            </div>
            <div class="tab-pane fade" id="pills-our-team" role="tabpanel" aria-labelledby="pills-our-team-tab">
                <div class="container-fluid px-5 py-2" style="background-color: #f8f8f8">

                    <div class="row px-3">
                        @foreach ($teams as $team)
                            <div class="col-4 py-3">
                                <div class="card our-team-card py-4">
                                    <div class="container-fluid text-center">
                                        <div class="container-fluid aspect-ratio-1x1 d-flex justify-content-center">
                                            <img src="{{ asset('/images/photos/' . $team->image) }}" alt=" {{$team->alt_text}}"
                                                class="rounded-circle img-fluid border border-5"
                                                style="max-width: 150px; aspect-ratio:1/1;">
                                            <br>
                                        </div>
                                        <i class="bi bi-caret-up-fill"></i>
                                        <h4 class="text-dark"> {{ $team->name }} </h4>
                                        <h5> {{ $team->designation }} </h5>
                                        <h6> {{ $team->content }} </h6>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                       

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
