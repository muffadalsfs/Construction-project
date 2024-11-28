@extends('layout.header')

@section('content')
<link rel="stylesheet" href="{{ asset('css/logoshow.css') }}">
<link rel="stylesheet" href="{{ asset('css/element/blog.css') }}">
<div class="image-container">
    <img src="{{ asset('Images/c.webp') }}" alt="Service Image" class="top-image">
    <h1 class="image-title">Blog Gallery</h1>
</div>

<h1 class="news-title">Latest Newdds</h1>
<div class="news-grid">
    @foreach($blog as $blogs)
    <div class="news-card">
        <!-- Date Box -->
        <div class="date-box">
            {{ \Carbon\Carbon::parse($blogs->created_at)->format('M d, Y') }}
        </div>
        <!-- Blog Image -->
        <img class="news-image" src="{{ url('storage/public/' . $blogs->path) }}" alt="{{ $blogs->name }}">
        <!-- Blog Title -->
        <h2 class="news-title">{{ $blogs->title }}</h2>
        <!-- Blog Content (Limited to 2 lines) -->
        <p class="news-content">{{ Str::limit($blogs->content, 150, '...') }}</p>
        <!-- Read More Button -->
      
    </div>
    @endforeach
</div>
@endsection
