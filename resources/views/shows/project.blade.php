@extends('layout.header')

@section('content')
<link rel="stylesheet" href="{{ asset('css/element/project.css') }}">
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

<style>
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
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
    gap: 10px;
}

.filter-button {
    padding: 10px 15px;
    color:black;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    margin: 5px;
    position: relative;
    overflow: hidden;
}

.filter-button::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 3px;
    background-color: yellow;
    transition: width 0.3s ease-in-out;
}

.filter-button:hover::after {
    width: 100%;
}

/* Project Grid */
.project-grids {
    display: flex;  /* Use flexbox for the container */
    flex-wrap: wrap; /* Allow wrapping of cards to the next line */
    justify-content: space-between;  /* Space between items */
    gap: 20px;  /* Space between items */
    margin-top: 20px;
    padding: 20px;
}

/* Project Card */
.project-cards {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
    width: calc(33.33% - 20px);  /* 3 cards per row with spacing */
    margin-bottom: 20px;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.project-cards:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
}

.project-cards img {
    width: 100%;
    height: 150px;
    object-fit: cover;
    border-radius: 8px;
}

.project-cards h3 {
    font-size: 18px;
    font-weight: bold;
    margin: 10px 0;
    color: #333;
}

.project-cards p {
    color: #777;
    margin-bottom: 20px;
}

/* Buttons */
.project-cards a {
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

.project-cards a:hover {
    background-color: #0056b3;
}

/* Responsive Design */
@media (max-width: 768px) {
    .project-cards {
        width: calc(50% - 20px); /* 2 cards per row on medium screens */
    }
}

@media (max-width: 600px) {
    .project-cards {
        width: calc(100% - 20px); /* 1 card per row on small screens */
    }
}

</style>
