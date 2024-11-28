@extends('layout.header')

@section('content')
<link rel="stylesheet" href="{{ asset('css/show.css') }}">

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

<style>


.blog-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    padding: 20px;
}

.blog-card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    width: 300px;
    overflow: hidden;
    position: relative;
}

.blog-image-container {
    position: relative;
    overflow: hidden;
}

.blog-image {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.blog-date {
    position: absolute;
    top: 10px;
    left: 10px;
    background: gold;
    color: #000;
    padding: 5px 10px;
    border-radius: 5px;
    font-size: 12px;
}

.blog-content {
    padding: 15px;
}

.title {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
}

.limited-content {
    font-size: 14px;
    color: #555;
    height: 3em;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
}

.blog-meta {
    display: flex;
    justify-content: space-between;
    margin-top: 10px;
    font-size: 12px;
    color: #777;
}

.blog-actions {
    margin-top: 10px;
    display: flex;
    justify-content: space-between;
}

.detail-button, .delete-button, .edit-button {
    text-decoration: none;
    font-size: 14px;
    padding: 5px 10px;
    border-radius: 5px;
    color: #fff;
}

.detail-button {
    background-color: #007bff;
}

.delete-button {
    background-color: #dc3545;
}

.edit-button {
    background-color: #28a745;
}

</style>