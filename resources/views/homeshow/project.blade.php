@extends('layout.header')

@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/logoshow.css') }}">

<div class="image-container">
    <img src="{{ asset('Images/c.webp') }}" alt="Service Image">
    <h1>Project Page</h1>
</div>

<div class="text-center-section">
    <h1>Explore Our Projects</h1>
    <div class="button-container">
        <button class="filter-button" onclick="filterProjects('category1')">Category 1</button>
        <button class="filter-button" onclick="filterProjects('category2')">Category 2</button>
        <button class="filter-button" onclick="filterProjects('category3')">Category 3</button>
        <button class="filter-button" onclick="filterProjects('all')">Show All</button>
    </div>
</div>

<div id="project-grid" class="project-grid">
    @forelse ($products as $product)
    <div class="project-card">
        <img src="{{ url('storage/public/' . $product->path) }}" alt="Project Image" class="project-image">
        <h3>{{ $product->title }}</h3>
        <p>{{ $product->content }}</p>
    </div>
    @empty
    <p>No projects available</p>
    @endforelse
</div>

<script src="{{ asset('js/script.js') }}"></script>
@endsection
<style>
    /* General styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0;
}

/* Header image container */
.image-container {
    text-align: center;
    padding: 20px;
    background-color: #f9f9f9;
}

.image-container img {
    max-width: 100%;
    height: auto;
}

.image-container h1 {
    font-size: 28px;
    margin-top: 10px;
    color: #333;
}

/* Section styling */
.text-center-section {
    text-align: center;
    padding: 20px;
}

.text-center-section h1 {
    font-size: 28px;
    font-weight: bold;
    color: #333;
    margin-bottom: 20px;
}

.button-container {
    margin-bottom: 20px;
}

.filter-button {
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 14px;
    cursor: pointer;
    margin: 5px;
}

.filter-button:hover {
    background-color: #0056b3;
}

/* Project grid */
.project-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* 3 columns */
    gap: 20px;
    padding: 20px;
    justify-items: center;
}

/* Project card */
.project-card {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
    padding: 15px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    width: 300px; /* Fixed width for uniformity */
}

.project-card:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
}

.project-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 8px;
}

.project-card h3 {
    font-size: 18px;
    font-weight: bold;
    color: #333;
    margin-top: 10px;
}

.project-card p {
    font-size: 14px;
    color: #555;
    margin: 10px 0;
}

/* Responsive design */
@media (max-width: 768px) {
    .project-grid {
        grid-template-columns: repeat(2, 1fr); /* 2 columns for medium screens */
    }
}

@media (max-width: 576px) {
    .project-grid {
        grid-template-columns: 1fr; /* Single column for small screens */
    }
}

</style>