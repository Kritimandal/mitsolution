@extends('layouts.frontend-layout.master')

@section('title') 
    <meta name="keyword" content="{{ $meta_title }} ">
@endsection
@section('meta_description')
    <meta name="description" content="{{ $meta_description }} ">
@endsection
@section('meta_keywords')
    <meta name="keyword" content="{{ $meta_keywords }} ">
@endsection
@section('content')

    <div style="padding: 0px;">
        <div class="container-fluid">
            <div class="row d-flex justify-content-evenly">
                @foreach ($posts as $post)
                    <div class="col-12 d-flex justify-content-sm-center col-md-6 py-2">
                        <div class="card">
                            <div style="max-width: 600px;">
                                <img style="width: 100%; object-fit: contain; height: auto;"
                                    src="{{ asset('/images/photos/' . $post->image) }}" alt="{{ $post->alt_text }}">
                            </div>
                            <div class="card-body">
                                <h5 class="pb-2 pb-md-4 text-justify"><a href="{{route('post', $post->id)}}" class="text-decoration-none">{{ $post->title }}</a></h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
