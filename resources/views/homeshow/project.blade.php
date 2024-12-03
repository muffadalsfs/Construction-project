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

<script>
    // Function to filter projects based on category
    function filterProjects(category) {
        const projectCards = document.querySelectorAll('.project-card'); // Get all project cards
        
        projectCards.forEach(card => {
            const projectCategory = card.getAttribute('data-category').toLowerCase(); // Get the data-category of the card

            // If category is 'all', or if the card's category matches the selected category, show it
            if (category === 'all' || projectCategory === category) {
                card.style.display = 'block'; // Show this card
            } else {
                card.style.display = 'none'; // Hide this card
            }
        });
    }
</script>

@endsection
