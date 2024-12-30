@extends('header')

@section('content')

<link rel="stylesheet" href="{{ asset('css/logoshow.css') }}">

<link rel="stylesheet" href="{{ asset('css/homeshow/blog.css') }}">
<div class="image-container">
    <img src="{{ asset('Images/banner2.jpg') }}" alt="Service Image">
    <h1>blog Page</h1>
</div>

<div class="blog-container">
    @foreach($blog as $user)
    <div class="blog-card">
        <div class="blog-image-container">
        <a href="{{ route('blog.detail', $user->id) }}"> <img src="{{ $user->path ? (file_exists(public_path('storage/public/' . $user->path)) ? url('storage/public/' . $user->path) : asset('Images/t6.jpg')) : asset('Images/t6.jpg') }}" alt="{{ $user->title }}"
        class="blog-image"></a>
            <span class="blog-date">{{ $user->created_at->format('M d, Y') }}</span>
        </div>
     
        <div class="blog-content">
            <p class="title">{{ $user->title }}</p>
            <p class="limited-content">{{ \Illuminate\Support\Str::limit($user->content, 100) }}</p>
            @auth 
                @if (Auth::id() === $user->user_id)
                <a href="{{ route('blog.delete', $user->id) }}" class="delete-button">Delete</a>
                <a href="{{ route('blog.edit', $user->id) }}" class="edit-button">Edit</a>
                @endif
                @endauth
            <div class="blog-meta">
                <span>Created by: {{ $user->user->name }}</span>
                <span class="comment-option">Comments</span> 
            </div>
        </div>
    </div>
    @endforeach
</div>


@endsection

