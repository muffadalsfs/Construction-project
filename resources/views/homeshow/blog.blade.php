@extends('layout.header')

@section('content')
<link rel="stylesheet" href="{{ asset('css/logoshow.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="image-container">
    <img src="{{ asset('Images/c.webp') }}" alt="Service Image">
    <h1>Blog Page</h1>
</div>

<div class="blog-container">
    @foreach($blogs as $blog)
    <div class="blog-card">
        <!-- Date with Yellow Background -->
       
        <!-- Image, Title, Description, and Metadata -->
        <div class="blog-content">
            <div class="image-with-text">
                <img src="{{ url('storage/public/' . $blog->path) }}" alt="{{ $blog->title }}" class="blog-image">
                <div class="blog-date">
            Date: 17-April-2019
        </div>
                <div class="image-text">
                    <h3>{{ $blog->title }}</h3>
                </div>
            </div>
            <p class="blog-description">
                {{ $blog->description }}
            </p>
            <div class="blog-meta">
                <p>Created by: <strong>{{ $blog->creator_name }}</strong></p>
                <p>Comments: <strong>{{ $blog->comments }}</strong></p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
 <style>/* Container for all blog cards */
.blog-container {
    display: flex;
    flex-wrap: wrap; /* Ensures the cards wrap if there's not enough space */
    gap: 20px; /* Spacing between cards */
    justify-content: center; /* Centers the cards in the container */
    margin-top: 20px;
}

/* Blog card styling */
.blog-card {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 300px; /* Fixed width for cards */
    padding: 15px;
    text-align: left;
}

/* Date with yellow background */
.blog-date {
    background-color: yellow;
    padding: 2px 5px; /* Reduced padding */
    border-radius: 4px;
    font-size: 12px; /* Smaller font size */
    font-weight: bold;
    text-align: center;
    margin-bottom: 5px; /* Reduced margin */
}


/* Blog image styling */
.image-with-text {
    text-align: center;
    margin-bottom: 15px;
}

.blog-image {
    width: 100%;
    max-height: 150px; /* Fixed height for the image */
    object-fit: cover; /* Ensures images are cropped proportionally */
    border-radius: 4px;
}

/* Blog title styling */
.image-text h3 {
    font-size: 20px;
    font-weight: bold;
    margin-top: 10px;
    color: #333;
}

/* Blog description styling */
.blog-description {
    font-size: 16px;
    color: #555;
    margin-bottom: 10px;
}

/* Blog metadata (creator name and comments) */
.blog-meta p {
    font-size: 14px;
    color: #777;
    margin: 5px 0;
}

.blog-meta strong {
    color: #333;
}
</style>