@extends('layout.header')

@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/logoshow.css') }}">

<div class="image-container">
    <img src="{{ asset('Images/c.webp') }}" alt="Service Image">
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
            <img src="{{ url('storage/public/' . $product->path) }}" alt="Project Image" class="project-image">
        </div>
        <div class="project-details">
            <h3 class="project-title">{{ $product->title }}</h3>
            <p class="project-content">{{ $product->content }}</p>
        </div>
    </div>
    @empty
    <p>No projects available</p>
    @endforelse
</div>

<script src="{{ asset('js/script.js') }}"></script>
@endsection

<style>
    /* General styling */
/* General Styles */
.text-center-section {
    text-align: center;
    margin: 20px 0;
    font-family: Arial, sans-serif;
}

.button-container {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin: 20px 0;
}

.filter-button {
    background-color: transparent;
    border: none;
    color: black;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    padding: 10px 20px;
    position: relative;
    text-transform: uppercase;
}

.filter-button:hover {
    color: gold;
}

.filter-button::after {
    content: '';
    display: block;
    width: 0;
    height: 2px;
    background-color: gold;
    margin: 0 auto;
    transition: width 0.3s ease;
}

.filter-button:hover::after {
    width: 100%;
}

/* Project Grid */
#project-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 20px;
    margin: 20px auto;
    max-width: 1200px;
}

.project-card {
    width: 30%; /* Adjust width for 3 cards per row */
    border: 1px solid #ddd;
    border-radius: 10px;
    overflow: hidden;
    background-color: #fff;
    transition: transform 0.3s ease;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
}

.project-card:hover {
    transform: translateY(-10px);
}

.project-image-wrapper {
    width: 100%;
    height: 200px;
    overflow: hidden;
}

.project-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.project-details {
    padding: 15px;
    text-align: center;
}

.project-title {
    font-size: 18px;
    font-weight: bold;
    margin: 10px 0;
}

.project-content {
    font-size: 14px;
    color: #666;
}


</style>
<script>
    function filterProjects(category) {
    const cards = document.querySelectorAll('.project-card');
    cards.forEach(card => {
        if (category === 'all' || card.getAttribute('data-category') === category) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}

</script>