@extends('layout.header')

@section('content')
<link rel="stylesheet"  href="{{ asset('css/logoshow.css') }}">
<link rel="stylesheet"  href="{{ asset('css/homeshow/service.css') }}">
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


/* Container for all cards */
.
</style>

