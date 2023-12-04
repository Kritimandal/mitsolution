@extends('layouts.frontend-layout.master')
@section('content')
    <section class="page-404"
        style="background: url('{{ asset('images/medias/404.jpg') }}') no-repeat center;background-size: cover; height: 500px; display: flex; justify-content: center; align-items: center;">

        <div class="container-fluid content-overlay w-50 h-50 m-auto">
            <div class="container color-overlay" style="text-align: center;">
                <center>
                    <h2 class="text-dark text-shadow ">

                        Look like you're lost
                    </h2>
                    <p class="lead text-shadow text-dark">the page you are looking for is not avaible!</p>
                    <div class="w-50 text-center">
                        <a href="{{ route('homepage') }}" class="w-30 submit-button ">Go to Home</a>
                    </div>
                </center>
            </div>
        </div>
    </section>
@endsection
