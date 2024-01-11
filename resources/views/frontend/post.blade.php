@extends('layouts.frontend-layout.master')
@section('title')
    {{ $post->meta_title }}

@endsection
@section('meta_description')
    <meta name="description" content="{{ $post->meta_description }} ">
@endsection
@section('meta_keywords')
    <meta name="keyword" content="{{ $post->meta_keywords }} ">
    <meta property="og:title" content="{{ $post->title }}">
    <meta property="og:description" content="{{ $post->description }}">
    <meta property="og:image" content="{{ asset('/images/photos/' . $post->image) }}">
    <meta property="og:url" content="{{ route('post', $post) }}">
    <meta property="og:type" content="article">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $post->title }}">
    <meta name="twitter:description" content="{{ $post->description }}">
    <meta name="twitter:image" content="{{ asset('/images/photos/' . $post->image) }}">
@endsection
@section('title')
    {{ $post->meta_description }}
@endsection
@section('content')
    <div class="container-fluid content_segment p-md-5 p-1">
        <p class="text-dark float-right ps-1" style="border-left: 2px solid red"> You're here: Home>> Post >>
            {{ $post->subcategory->name }} >> {{ $post->title }} </p>
    </div>
    <div class="container-fluid w-75 content_segment m-auto pt-md-3 pt-1">

        <div class="post-image">
            <img src="{{ asset('/images/photos/' . $post->image) }}" class="image-fluid" alt="{{ $post->alt_text }}"
                style="width:100%; height:auto;border:1px solid black;">
           
        </div>
        <h1 class="text-center text-primary mt-2"> {{ $post->title }}</h1>
        <small>Posted at: {{ $post->updated_at->format('Y F d') }} &nbsp; Reading time:{{ calculateReadingTime($post->description) }} min &nbsp; Share on:<a
            href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('post', $post)) }}&title={{ urlencode($post->title) }}&picture={{ urlencode(asset('/images/photos/' . $post->image)) }}"
            target="_blank"> <i class="fa-brands fa-facebook-f"></i> </a> &nbsp; <a
            href="https://twitter.com/intent/tweet?url={{ urlencode(route('post', $post)) }}&text={{ urlencode($post->title) }}&via=yourTwitterHandle&hashtags=your,hashtags&related=twitterapi,twitter"
            target="_blank"><i class="fa-brands fa-x-twitter"></i></a>  </small>
        <p class="text-justify py-3">
            {!! $post->description !!}
        </p>
    </div>
@endsection
