@extends('layout.header')

@section('content')
<link rel="stylesheet"  href="{{ asset('css/style.css') }}">


    <h1>Explore Our Projects</h1>
    <div class="button-container">
        <button class="filter-button" onclick="filterProjects('category1')">Category 1</button>
        <button class="filter-button" onclick="filterProjects('category2')">Category 2</button>
        <button class="filter-button" onclick="filterProjects('category3')">Category 3</button>
        <button class="filter-button" onclick="filterProjects('all')">Show All</button>
    </div>
</div>

@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

<div class="project-grid">
    @forelse ($products as $product)
        <div class="project-card">
            <img src="{{ $product->path ? asset('storage/public/' . $product->path) : asset('images/default.jpg') }}" alt="Project Image">
            <h3>{{ $product->title }}</h3>
            <p>{{ $product->content }}</p>
            <a href="{{ route('project.detail', $product->id) }}">View Details</a>
            <a href="{{ route('project.edit', $product->id) }}">Edit</a>
            <a href="{{ route('project.delete', $product->id) }}" 
               onclick="return confirm('Are you sure you want to delete this project?')">Delete</a>
        </div>
    @empty
        <p>No projects found.</p>
    @endforelse
</div>

<script src="{{ asset('js/script.js') }}"></script>
@endsection
<style>
/* General Body Styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0;
}

/* Section Styling */
.text-center-section {
    text-align: center;
    padding: 20px;
}

.text-center-section h1 {
    font-size: 28px;
    font-weight: bold;
    color: #333333;
    margin-bottom: 20px;
}

.button-container {
    margin-bottom: 20px;
}

.filter-button {
    padding: 10px 15px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    margin: 5px;
}

.filter-button:hover {
    background-color: #0056b3;
}

/* Project Grid */
.project-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* Ensures 3 items per row */
    gap: 20px;
    justify-content: center;
    margin-top: 20px;
    padding: 20px;
}

/* Project Card */
.project-card {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.project-card:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
}

.project-card img {
    width: 100%;
    height: 150px;
    object-fit: cover;
    border-radius: 8px;
}

.project-card h3 {
    font-size: 18px;
    font-weight: bold;
    margin: 10px 0;
    color: #333;
}

.project-card p {
    color: #777;
    margin-bottom: 20px;
}

/* Buttons */
.project-card a {
    display: inline-block;
    margin-top: 10px;
    padding: 8px 12px;
    font-size: 14px;
    border-radius: 5px;
    text-decoration: none;
    color: white;
    background-color: #007bff;
    transition: background-color 0.3s ease;
}

.project-card a:hover {
    background-color: #0056b3;
}

/* Responsive Design */
@media (max-width: 768px) {
    .project-grid {
        grid-template-columns: repeat(2, 1fr); /* 2 items per row on medium screens */
    }
}

@media (max-width: 600px) {
    .project-grid {
        grid-template-columns: repeat(1, 1fr); /* 1 item per row on small screens */
    }
}
</style>