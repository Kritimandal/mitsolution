@extends('layouts.frontend-layout.master')
@section('content')

<div class="container-fluid content_segment">
    <h1 class="text-center">  {{ $post->title }}</h1>
    <img src="{{asset('/images/photos/'. $post->image)}}" alt="{{ $post->alt_text}}" >
    <p class="text-justify py-3">
        {{$post->description}}
    </p>
</div>

@endsection