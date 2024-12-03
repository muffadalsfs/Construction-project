@extends('header')

@section('content')

<link rel="stylesheet" href="{{ asset('css/logoshow.css') }}">
<link rel="stylesheet" href="{{ asset('css/homeshow/project.css') }}">

<div class="image-container">
    <img src="{{ asset('Images/c.webp') }}" alt="Service Image">
    <h1>Project Page</h1>
</div>

<div class="text-center-section">
    <h1>Explore Our Projects</h1>
    <div class="button-container">
        <button class="filter-button" onclick="filterProjects('all')">Show All</button>
        <button class="filter-button" onclick="filterProjects('automotive')">Automotive</button>
        <button class="filter-button" onclick="filterProjects('construction')">Construction</button>
        <button class="filter-button" onclick="filterProjects('industrial')">Industrial</button>
        <button class="filter-button" onclick="filterProjects('mechanics')">Mechanics</button>
    </div>
</div>

<div id="project-grid" class="project-grid">
    @forelse ($products as $product)
    <div class="project-card" data-category="{{ strtolower($product->category) }}">
        <div class="project-image-wrapper">
            <img src="{{ url('storage/public/' . $product->path) }}" alt="Project Image" class="project-image">
        </div>
        <div class="project-details">
            <a href="{{ route('project.detail', $product->id) }}">View Details</a>
            <h3 class="project-title">{{ $product->title }}</h3>
            <p class="project-content">{{ $product->content }}</p>
            <p class="project-category">{{ $product->category }}</p>
        </div>
    </div>
    @empty
    <p>No projects available</p>
    @endforelse
</div>

<script src="{{asset('js/project.js')}}"></script>

@endsection
