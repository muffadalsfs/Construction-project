@extends('header')

@section('content')

<link rel="stylesheet" href="{{ asset('css/logoshow.css') }}">
<link rel="stylesheet" href="{{ asset('css/homeshow/project.css') }}">

<div class="image-container">
    <img src="{{ asset('Images/banner2.jpg') }}" alt="Service Image">
    <h1>Project Page</h1>
</div>
@if($products->isNotEmpty())
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
        <a href="{{ route('project.detail', $product->id) }}">  <img src="{{ $product->path ? (file_exists(public_path('storage/public/' . $product->path)) ? url('storage/public/' . $product->path) : asset('Images/1.jpg')) : asset('Images/1.jpg') }}" alt="{{ $product->title }}"
        class="project-image"></a>
        </div>
        <div class="project-details">
            
            <h3 class="project-title">{{ $product->title }}</h3>
            <p class="project-content">{{ $product->content }}</p>
            <p class="project-category">{{ $product->category }}</p>
            @auth 
                @if (Auth::id() === $product->user_id)
                <a href="{{ route('project.edit', $product->id) }}" class="project-button">Edit</a>
                <a href="{{ route('project.delete', $product->id) }}" 
                   onclick="return confirm('Are you sure you want to delete this project?')" class="project-button">Delete</a>
            </div>
            @endif
            @endauth

        </div>
    </div>
    @empty
    <p>No projects available</p>
    @endforelse
</div>
@endif
<script src="{{asset('js/project.js')}}"></script>

@endsection
