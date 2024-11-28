@extends('layout.header')

@section('content')
<link rel="stylesheet" href="{{ asset('css/shows/blog.css') }}">

<h1>blog page</h1>
<div class="blog-container">
    @foreach($blog as $user)
    <div class="blog-card">
        <div class="blog-image-container">
            <img src="{{ url('storage/public/' . $user->path) }}" alt="Blog Image" class="blog-image">
            <span class="blog-date">{{ $user->created_at->format('M d, Y') }}</span>
        </div>
        <div class="blog-content">
            <p class="title">{{ $user->title }}</p>
            <p class="limited-content">{{ \Illuminate\Support\Str::limit($user->content, 100) }}</p>
            <div class="blog-meta">
                <span>Created by: {{ $user->user->name }}</span>
                <span class="comment-option">Comments</span>
            </div>
            <div class="blog-actions">
                <a href="{{ url('detail', $user->id) }}" class="detail-button">Detail</a>
                @auth 
                @if (Auth::id() === $user->user_id)
                <a href="{{ url('delete', $user->id) }}" class="delete-button">Delete</a>
                <a href="{{ url('edit', $user->id) }}" class="edit-button">Edit</a>
                @endif
                @endauth
            </div>
        </div>
    </div>
    @endforeach
</div>


@endsection
