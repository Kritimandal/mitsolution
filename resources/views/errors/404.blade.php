@extends('layouts.frontend-layout.master')
@section('title')
    404 Page
@endsection
@section('meta_description')
    <meta name="description" content="This is a 404 page. ">
@endsection
@section('meta_keywords')
    <meta name="keyword" content="404 page, 404 page layout, MIT solution">
@endsection
@section('content')
    <section class="page-404"
        style="background: url('{{ asset('images/medias/404.jpg') }}') no-repeat center;background-size: cover; height: 500px; display: flex; justify-content: center; align-items: center;">

        <div class="container-fluid content-overlay w-50 h-50 m-auto">
            <div class="container color-overlay" style="text-align: center;">
                <center>
                    <h2 class="text-dark text-shadow ">

                        Look like you're lost
                    </h2>
                    <p class="lead text-shadow text-dark">Oops!! <br>The page you are looking for is not avaible!</p>
                    <div class="w-50 text-center">
                        <a href="{{ route('homepage') }}" class="w-30 submit-button ">Go to Home</a>
                    </div>
                </center>
            </div>
        </div>
    </section>
@endsection
