@extends('layout.header')

@section('content')
<link rel="stylesheet" href="{{ asset('css/logoshow.css') }}">
<div class="image-container">
    <img src="{{ asset('Images/c.webp') }}" alt="Service Image" class="top-image">
    <h1 class="image-title">Blog Gallery</h1>
</div>

<h1 class="news-title">Latest News</h1>
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
<style>
    /* Grid Layout for Blog Cards */
.news-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-top: 20px;
}

/* Each individual card */
.news-card {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    padding: 15px;
}

/* Date Box - Positioned on the top left */
.date-box {
    position: absolute;
    top: 10px;
    left: 10px;
    background-color: rgba(0, 0, 0, 0.7);
    color: white;
    padding: 5px;
    font-size: 14px;
    border-radius: 3px;
}

/* Blog Image Styling */
.news-image {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 8px;
}

/* Blog Title */
.news-title {
    font-size: 20px;
    font-weight: bold;
    margin: 10px 0;
}

/* Blog Content (Limit to 2 lines with ellipsis) */
.news-content {
    font-size: 16px;
    color: #555;
    line-height: 1.5;
    max-height: 3em; /* Limit to 2 lines */
    overflow: hidden;
    text-overflow: ellipsis;
}

/* Read More Button */
.read-more {
    display: inline-block;
    margin-top: 10px;
    padding: 8px 15px;
    background-color: #007BFF;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
}

.read-more:hover {
    background-color: #0056b3;
}

</style>