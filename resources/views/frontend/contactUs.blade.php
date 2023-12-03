@extends('layouts.frontend-layout.master')
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
                        <div class="submit-button">Explore All</div>
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
    <div class="container-fluid py-2 mb-5 d-flex justify-content-center" style="padding-left: 5%; padding-right:5%;">
        <div class="col-12 col-md-10 col-lg-8">
            <div class="card vacancy_card_2 p-5 bg-light">
                <h3 class="text-center p-2">Contact Us</h3>
                <form action="">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp"
                        placeholder="Enter Your Name">

                    <br>
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                        placeholder="Enter your email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                    <br>
                    <label for="phone_no">Phone Number</label>
                    <input type="text" class="form-control" id="phone_no" aria-describedby="emailHelp"
                        placeholder="Enter your email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your phone number with anyone
                        else.</small><br>
                    <label for="pmessage">Message</label>
                    <textarea class="form-control" id="message" rows="3"></textarea>
                    <div class="container-fluid m-0 px-0 py-2 ">
                        <div class="col-12 col-md-5 py-4" style="max-width: 200px;">
                            <div class="submit-button">Contact Us</div>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
@endsection
