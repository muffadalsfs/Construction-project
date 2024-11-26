@extends('layout.header')

@section('content')
<link rel="stylesheet"  href="{{ asset('css/logoshow.css') }}">
<div class="image-container">
    <img src="{{ asset('Images/c.webp') }}" alt="Service Image">
    <h1>Service Page</h1>
</div>
<h1 class="main-heading">We Provide Construction, Industrial & All Kinds Of Services</h1>

        <!-- Date with Yellow Background -->
       
        <!-- Image, Title, Description, and Metadata -->
        <div class="blog-container">
    @foreach($blogs as $blog)
    <div class="blog-card">
        <div class="image-with-text">
            <img src="{{ url('storage/public/' . $blog->path) }}" alt="{{ $blog->title }}" class="blog-image">
            <h3 class="blog-title">{{ $blog->title }}</h3>
        </div>
        <p class="blog-content">
            {{ \Illuminate\Support\Str::limit($blog->content, 100) }} <!-- Shortened content -->
        </p>
        <a href="{{ url('detail', $blog->id) }}" class="detail-button">Detail</a>
        @auth
            @if (Auth::id() === $blog->user_id)
                <div class="blog-actions">
                    <a href="{{ url('delete', $blog->id) }}" class="delete-button">Delete</a>
                    <a href="{{ url('edit', $blog->id) }}" class="edit-button">Edit</a>
                </div>
            @endif
        @endauth
    </div>
    @endforeach
</div>
@endsection 
<style>/* Center the heading */
.main-heading {
    text-align: center;
    font-size: 28px;
    color: #333;
    margin: 20px 0;
}
.blog-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

.blog-card {
    width: 30%; /* Ensures three cards per row */
    border: 1px solid #ddd;
    border-radius: 10px;
    overflow: hidden;
    background: #fff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s, color 0.3s;
}

.blog-card:hover {
    background-color: gold;
    color: white;
}

.image-with-text {
    text-align: center;
    padding: 10px;
}

.blog-image {
    width: 100%;
    height: 200px; /* Fixed size for images */
    object-fit: cover; /* Ensures images fit nicely without stretching */
}

.blog-title {
    font-size: 1.5em;
    margin-top: 10px;
}

.blog-content {
    padding: 10px;
    font-size: 1em;
    color: #333;
}

.detail-button,
.delete-button,
.edit-button {
    display: inline-block;
    padding: 8px 12px;
    margin: 10px 5px;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    font-size: 1em;
    cursor: pointer;
    color: #fff;
    background-color: #007BFF; /* Default blue button */
    transition: background-color 0.3s;
}

.detail-button:hover {
    background-color: #0056b3;
}

.delete-button {
    background-color: #dc3545;
}

.delete-button:hover {
    background-color: #a71d2a;
}

.edit-button {
    background-color: #ffc107;
    color: black;
}

.edit-button:hover {
    background-color: #e0a800;
}

.blog-actions {
    text-align: center;
}

/* Container for all cards */
.
</style>

