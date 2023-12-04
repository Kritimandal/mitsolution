@extends('layouts.frontend-layout.master')
@section('title')
    {{ $post->meta_title }}
@endsection
@section('meta_description')
    <meta name="description" content="{{ $post->meta_description }} ">
@endsection
@section('meta_keywords')
    <meta name="keyword" content="{{ $post->meta_keywords }} ">
@endsection
@section('title')
{{$post->meta_description}}
@endsection
@section('content')

<div class="container-fluid w-75 content_segment m-auto">
    <h1 class="text-center">  {{ $post->title }}</h1>
    <div class="post-image">
    <img src="{{asset('/images/photos/'. $post->image)}}" class="image-fluid" alt="{{ $post->alt_text}}" style="width:100%; height:auto;" >
    </div>
    <p class="text-justify py-3">
        {!! $post->description !!}
    </p>
</div>

@endsection