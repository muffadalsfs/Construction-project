@extends('header')

@section('content')

<link rel="stylesheet" href="{{ asset('css/logoshow.css') }}">
<link rel="stylesheet" href="{{ asset('css/element/project.css') }}">
<div class="image-container">
    <img src="{{ asset('Images/banner2.jpg') }}" alt="Service Image">
    <h1>Project gallery</h1>
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

    <div class="project-card" data-category="{{ $product->category }}">
        <div class="project-image-wrapper">

         <a href="{{ route('project.detail', $product->id) }}">         <img src="{{ $product->path ? (file_exists(public_path('storage/public/' . $product->path)) ? url('storage/public/' . $product->path) : asset('Images/1.jpg')) : asset('Images/1.jpg') }}" alt="{{ $product->title }}"
         class="project-image"></a>
        </div>
        <div class="project-details">
        <a href="{{ route('project.detail', $product->id) }}">  <h3 class="project-title">{{ $product->title }}</h3></a>
            <p class="project-content">{{ $product->content }}</p>
        </div>

    </div>
    @empty
    <p>No projects available</p>
    @endforelse
</div>

@endsection

<style>
.filter-button.active {
    background-color: #ffb400; /* Yellow background color for active button */
    color: white; /* White text color */
    border: 1px solid #ffb400; /* Border to match the background */
}



</style>
<script src="{{asset('js/element/project.js')}}"></script>