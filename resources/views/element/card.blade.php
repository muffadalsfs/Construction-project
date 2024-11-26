@extends('layout.header')

@section('content')
<link rel="stylesheet"  href="{{ asset('css/logoshow.css') }}">
<div class="image-container">
    <img src="{{ asset('Images/c.webp') }}" alt="Service Image">
    <h1>Project gallery</h1>
</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
<div class="engineer-container">
    <h3>Engineers</h3>
    <div class="engineer-grid">
        @foreach($enginner as $eg)
            <div class="engineer-card">
                <div class="engineer-img">
                    <img src="{{ url('storage/public/' . $eg->path) }}" alt="{{ $eg->name }}">
                </div>
                <div class="engineer-name">
                    <p>{{ $eg->name }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection