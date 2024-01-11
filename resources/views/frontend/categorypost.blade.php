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
    <div style="padding: 0px;margin-top:48px;">
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
                                <h5 class="pb-2 pb-md-2 text-justify"><a href="{{ route('post', $post) }}"
                                        class="text-decoration-none">{{ $post->title }}</a> </h5> 
                                        <small>Posted at: {{ $post->updated_at->format('Y F d') }} &nbsp; Reading time:{{ calculateReadingTime($post->description) }} min &nbsp; Share on:<a
                                            href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('post', $post)) }}&title={{ urlencode($post->title) }}&picture={{ urlencode(asset('/images/photos/' . $post->image)) }}"
                                            target="_blank"> <i class="fa-brands fa-facebook-f"></i> </a> &nbsp; <a
                                            href="https://twitter.com/intent/tweet?url={{ urlencode(route('post', $post)) }}&text={{ urlencode($post->title) }}&via=yourTwitterHandle&hashtags=your,hashtags&related=twitterapi,twitter"
                                            target="_blank"><i class="fa-brands fa-x-twitter"></i></a>  </small>
                                       
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
