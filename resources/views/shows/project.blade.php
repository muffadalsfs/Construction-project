@extends('header')

@section('content')


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
            <img src="{{ $product->path ? (file_exists(public_path('storage/public/' . $product->path)) ? url('storage/public/' . $product->path) : asset('Images/1.jpg')) : asset('Images/1.jpg') }}" alt="{{ $product->title }}">

            <h3>{{ $product->title }}</h3>
            <p>{{ $product->category }}</p>
            <div class="button-container">
                <a href="{{ route('project.detail', $product->id) }}" class="project-button">View Details</a>
                <a href="{{ route('project.edit', $product->id) }}" class="project-button">Edit</a>
                <a href="{{ route('project.delete', $product->id) }}" 
                   onclick="return confirm('Are you sure you want to delete this project?')" class="project-button">Delete</a>
            </div>
        </div>
    @empty
        <p>No projects found.</p>
    @endforelse
</div>

<style>
    .filter-button.active {
    background-color: #ffb400;  /* Yellow background for active button */
    color: white;  /* White text for active button */
    border: 1px solid #ffb400;  /* Matching border for active button */
}
/* General styling */
.text-center-section {
  text-align: center;
  margin-bottom: 40px;
}

.text-center-section h1 {
  font-size: 2.5rem;
  margin-bottom: 20px;
  color: #fff;
}

.button-container {
  display: flex;
  justify-content: center;
  gap: 10px;
  margin-bottom: 30px;
}

.filter-button {
  padding: 10px 20px;
  font-size: 1rem;
  border: none;
  border-radius: 5px;
  background-color: #555;
  color: #fff;
  cursor: pointer;
  transition: all 0.3s ease;
}

.filter-button:hover {
  background-color: #ffb400;
  color: #000;
}

.project-grids {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
  padding: 0 20px;
  box-sizing: border-box;
}

.project-cards {
  background-color: #222;
  border-radius: 10px;
  overflow: hidden;
  text-align: center;
  padding: 20px;
  transition: transform 0.3s ease;
}

.project-cards:hover {
  transform: scale(1.05);
}

.project-cards img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  border-bottom: 2px solid #ddd;
}

.project-cards h3 {
  font-size: 1.2rem;
  margin: 10px 0;
}

.project-cards p {
  font-size: 1rem;
  color: #aaa;
}

.project-cards a {
  display: block;
  color: #ffb400;
  margin: 10px 0;
  text-decoration: none;
}

.project-cards a:hover {
  text-decoration: underline;
}

.project-grids p {
  font-size: 1.5rem;
  color: #fff;
  text-align: center;
}

@media (min-width: 1200px) {
  .project-grids {
    grid-template-columns: repeat(4, 1fr);
    margin: 0 30px;
  }

  .text-center-section h1 {
    font-size: 3rem;
  }

  .filter-button {
    font-size: 1.1rem;
    padding: 12px 24px;
  }
}

@media (max-width: 1024px) {
  .project-grids {
    grid-template-columns: repeat(2, 1fr);
    margin: 0 10px;
  }

  .text-center-section h1 {
    font-size: 2rem;
  }

  .filter-button {
    font-size: 0.9rem;
    padding: 8px 16px;
  }
}

@media (max-width: 768px) {
  .project-grids {
    grid-template-columns: 1fr;
    margin: 0 10px;
  }

  .text-center-section h1 {
    font-size: 1.8rem;
  }

  .filter-button {
    font-size: 0.8rem;
    padding: 6px 12px;
  }
}

@media (max-width: 480px) {
  .project-grids {
    gap: 10px;
    margin: 0 5px;
  }

  .text-center-section h1 {
    font-size: 1.5rem;
  }

  .filter-button {
    font-size: 0.7rem;
    padding: 6px 10px;
  }

  .project-cards img {
    height: 150px;
  }

  .project-cards h3 {
    font-size: 1rem;
  }

  .project-cards p {
    font-size: 0.9rem;
  }
}


</style>
<script src="{{ asset('js/script.js') }}"></script>

<script>
function filterProjects(category) {
    const projectCards = document.querySelectorAll('.project-cards');  // Get all project cards
    const filterButtons = document.querySelectorAll('.filter-button');  // Get all filter buttons
    
    // Remove 'active' class from all buttons
    filterButtons.forEach(button => {
        button.classList.remove('active');
    });

    // Add 'active' class to the clicked button
    const activeButton = Array.from(filterButtons).find(button => button.innerText.toLowerCase() === category || (category === 'all' && button.innerText.toLowerCase() === 'show all'));
    if (activeButton) {
        activeButton.classList.add('active');
    }

    // Filter project cards based on the category
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

