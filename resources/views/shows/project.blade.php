@extends('header')

@section('content')
<link rel="stylesheet" href="{{ asset('css/element/project.css') }}">

<link rel="stylesheet" href="{{asset('css/shows/project.css')}}">
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

<div class="project-grids">
    @forelse ($products as $product)
        <div class="project-cards" data-category="{{ strtolower($product->category) }}">
            <img src="{{ $product->path ? asset('storage/public/' . $product->path) : asset('images/default.jpg') }}" alt="Project Image">
            <h3>{{ $product->title }}</h3>
            <p>{{ $product->category }}</p>
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

<script>
    function filterProjects(category) {
        const projectCards = document.querySelectorAll('.project-cards');  // Get all project cards
        
        projectCards.forEach(card => {
            const projectCategory = card.getAttribute('data-category').toLowerCase();  // Get the data-category of the card

            if (category === 'all' || projectCategory === category) {
                card.style.display = 'block';  // Show this card
            } else {
                card.style.display = 'none';  // Hide this card
            }
        });
    }
</script>

@endsection

