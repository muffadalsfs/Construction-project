@extends('header')

@section('content')
<link rel="stylesheet" href="{{ asset('css/logoshow.css') }}">
<link rel="stylesheet" href="{{asset('css/element/blog.css')}}">
<div class="image-container">
    <img src="{{ asset('Images/c.webp') }}" alt="Service Image" class="top-image">
    <h1 class="image-title">Blog Gallery</h1>
</div>

<h1 class="news-title">Latest News</h1>
<div class="news-grid">
    @foreach($blog as $blogs)
    <div class="news-card">
      
        <div class="date-box">
            {{ \Carbon\Carbon::now()->format('M d, Y') }}
        </div>
       
        <a href="{{ route('blog.detail', $blogs->id) }}"><img class="news-image" src="{{ url('storage/public/' . $blogs->path) }}" alt="{{ $blogs->title }}">
        
        <div class="card-content">
            <h2 class="blog-title">{{ $blogs->title }}</h2></a>
            <p class="blog-content">{{ Str::limit($blogs->content, 100, '...') }}</p>
            <div class="meta-info">
                <span class="username">{{ $blogs->user->name ?? 'Anonymous' }}</span>
                <span class="comments">{{ $blogs->comments_count ?? 0 }} Comments</span>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection