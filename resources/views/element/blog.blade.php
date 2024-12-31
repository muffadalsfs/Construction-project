@extends('header')

@section('content')
<link rel="stylesheet" href="{{ asset('css/logoshow.css') }}">
<link rel="stylesheet" href="{{ asset('css/element/blog.css') }}">

<div class="image-container">
    <img src="{{ asset('Images/banner2.jpg') }}" alt="Service Image" class="top-image">
    <h1 class="image-title">Blog Gallery</h1>
</div>

@if($blog->isNotEmpty())
    <h1 class="news-title">Our Latest News</h1>
    <div class="news-grid">
        @foreach($blog as $blogs)
            <div class="news-card">
                <!-- Date Box -->
                <div class="date-box">
                    &#128197; {{ \Carbon\Carbon::parse($blogs->created_at)->format('M d, Y') }}
                </div>

                <!-- Image Section -->
                <div class="image-wrapper">
                    <a href="{{ route('blog.detail', $blogs->id) }}">
                        <img src="{{ $blogs->path ? (file_exists(public_path('storage/public/' . $blogs->path)) ? url('storage/public/' . $blogs->path) : asset('Images/23.jpeg')) : asset('Images/23.jpeg') }}" 
                             alt="{{ $blogs->title }}" class="news-image">
                    </a>
                </div>

                <!-- Blog Title -->
                <h2 class="blog-title">{{ Str::limit($blogs->title, 40, '...') }}</h2>

                <!-- Blog Content -->
                <p class="blog-content">{{ Str::limit($blogs->content, 150, '...') }}</p>

                <!-- Meta Information -->
                <div class="meta-info">
                    <div class="created-by">Created by: <strong>{{ $blogs->user->name }}</strong></div>
                    <div class="comments">Comments: {{ $blogs->comments_count ?? 0 }}</div>
                </div>

                <!-- Post Actions -->
                @auth
                    @if(auth()->user()->id === $blogs->user_id)
                        <div class="post-actions">
                            <a href="{{ route('blog.edit', $blogs->id) }}" class="edit-button">Edit</a>
                            <a href="{{ route('blog.delete', $blogs->id) }}" class="delete-button">Delete</a>
                        </div>
                    @endif
                @endauth
            </div>
        @endforeach
    </div>
@endif

@endsection




