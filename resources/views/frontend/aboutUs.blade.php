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
                        <div class="submit-button"><a href="#our-solution" class="text-decoration-none text-white">Explore All</a></div>
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
@endsection