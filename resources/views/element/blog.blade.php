@extends('layout.header')

@section('content')
<link rel="stylesheet"  href="{{ asset('css/style.css') }}">
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
        <!-- Blog Content -->
        <p class="news-content">{{ Str::limit($blogs->content, 150, '...') }}</p>
        <!-- Read More Button -->
       
    </div>
    @endforeach
</div>
@endsection
