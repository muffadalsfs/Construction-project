@extends('header')

@section('content')

<link rel="stylesheet" href="{{ asset('css/logoshow.css') }}">

<link rel="stylesheet" href="{{ asset('css/homeshow/blog.css') }}">
<div class="image-container">
    <img src="{{ asset('Images/c.webp') }}" alt="Service Image">
    <h1>blog Page</h1>
</div>

<div class="blog-container">
    @foreach($blog as $user)
    <div class="blog-card">
        <div class="blog-image-container">
            <img src="{{ url('storage/public/' . $user->path) }}" alt="Blog Image" class="blog-image">
            <span class="blog-date">{{ $user->created_at->format('M d, Y') }}</span>
        </div>
        <a href="{{ route('blog.detail', $user->id) }}">View Details</a>
        <div class="blog-content">
            <p class="title">{{ $user->title }}</p>
            <p class="limited-content">{{ \Illuminate\Support\Str::limit($user->content, 100) }}</p>
            <div class="blog-meta">
                <span>Created by: {{ $user->user->name }}</span>
                <span class="comment-option">Comments</span>
            </div>
            
        </div>
    </div>
    @endforeach
</div>


@endsection

