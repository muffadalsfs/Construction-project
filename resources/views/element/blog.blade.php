@extends('header')

@section('content')
<link rel="stylesheet" href="{{ asset('css/logoshow.css') }}">

<div class="image-container">
    <img src="{{ asset('Images/c.webp') }}" alt="Service Image" class="top-image">
    <h1 class="image-title">Blog Gallery</h1>
</div>

<h1 class="news-title">Latest News</h1>
<div class="news-grid">
    @foreach($blog as $blogs)
    <div class="news-card">
        <!-- Date Box -->
        <div class="date-box">
            {{ \Carbon\Carbon::now()->format('M d, Y') }}
        </div>
        <!-- Blog Image -->
        <a href="{{ route('blog.detail', $blogs->id) }}"><img class="news-image" src="{{ url('storage/public/' . $blogs->path) }}" alt="{{ $blogs->title }}">
        <!-- Blog Content -->
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
<style>




.top-image {
    width: 100%;
    height: 300px;
    object-fit: cover;
}


.news-title {
    text-align: center;
    font-size: 28px;
    margin: 20px 0;
}

.news-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    padding: 0 20px;
}

.news-card {
    position: relative;
    width: 300px;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s, box-shadow 0.2s;
}

.news-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
}

.date-box {
    position: absolute;
    top: 170px;
    left: 10px;
    background-color: yellow;
    color: black;
    font-size: 12px;
    font-weight: bold;
    padding: 4px 8px;
    border-radius: 3px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
}

.news-image {
    width: 100%;
    height: 180px;
    object-fit: cover;
    border-bottom: 1px solid #ddd;
}

.card-content {
    padding: 15px;
    text-align: left;
}

.blog-title {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
}

.blog-content {
    font-size: 14px;
    color: #555;
    line-height: 1.5;
    margin-bottom: 15px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
}

.meta-info {
    display: flex;
    justify-content: space-between;
    font-size: 12px;
    color: #999;
}

</style>