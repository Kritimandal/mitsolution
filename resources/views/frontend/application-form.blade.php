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
                            <a href="#apply" class="text-white">
                                <div class="submit-button">Explore All</div>
                            </a>
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
    <div class="container-fluid py-2 mb-5 d-flex justify-content-center" style="padding-left: 5%; padding-right:5%;">
        <div class="col-12 col-md-10 col-lg-8">
            <div class="card vacancy_card_2 p-5 bg-light">
                <h2 class="text-center p-2">Apply Now</h2>
                <form action="/application-store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label id="apply" for="name" class="text-dark h5">Full Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp"
                        placeholder="Enter Your Full Name" required>
                        @if ($errors->has('name'))
                        <div class="error text-danger">{{ $errors->first('name') }}
                        </div>
                    @endif
                    <br>
                    <label for="email" class="text-dark h5">Email</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp"
                        placeholder="Enter your email" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                    @if ($errors->has('email'))
                        <div class="error text-danger">{{ $errors->first('email') }}
                        </div>
                    @endif
                    <br>
                    <label for="phone_no" class="text-dark h5">Phone Number</label>
                    <input type="text" class="form-control" id="phone_no" name="phone_no" aria-describedby="emailHelp"
                        placeholder="Enter your email" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your phone number with anyone
                        else.</small>
                    @if ($errors->has('phone_no'))
                        <div class="error text-danger">{{ $errors->first('phone_no') }}
                        </div>
                    @endif
                    <br>
                    <label for="position" class="text-dark h5">Position</label>
                    <input type="text" class="form-control text-dark h5" name="position" id="position"
                        aria-describedby="emailHelp" placeholder="Enter job position" required>
                    @if ($errors->has('position'))
                        <div class="error text-danger">{{ $errors->first('position') }}
                        </div>
                    @endif
                    <label for="resume" class="text-dark h5">Upload Resume: </label>

                    <input type="file" name="resume" class="form-control text-dark h5" id="resume"
                        placeholder="resume" value="" required>
                    <span class="text-muted">Upload resume in ms word or pdf format only.</span>
                    @if ($errors->has('resume'))
                        <div class="error text-danger">{{ $errors->first('resume') }}
                        </div>
                    @endif
                    <br>

                    <label for="message " class="text-dark h5">Message</label>
                    <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                    @if ($errors->has('message'))
                        <div class="error text-danger">{{ $errors->first('message') }}
                        </div>
                    @endif
                    <div class="container-fluid m-0 px-0 py-2 ">
                        <div class="col-12 col-md-5 py-4" style="max-width: 200px;">
                            <button type="submit" class="submit-button">Send Application</button>
                        </div>
                    </div>
                    <div class="card-body text-center text-success">
                        @if (session('status'))
                            <div class="alert alert-success " role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
