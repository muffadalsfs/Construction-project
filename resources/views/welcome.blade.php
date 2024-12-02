@extends('layout.header')

@section('content')
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"> -->

<link rel="stylesheet"  href="{{ asset('css/raf.css') }}">
<div class="slider-container">
  <div class="slider" id="project-slider">
    @foreach($Project as $projects)
    <div class="slide">
      <div class="slide-content">
        <h2>{{ $projects->title }}</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p>Praesent libero. Sed cursus ante dapibus diam.</p>
        <button>Learn More</button>
        <br><br>

        @auth
        <a href="{{ route('project.edit', $projects->id) }}" class="edit-btn">Edit</a>
        <a href="{{ route('project.delete', $projects->id) }}" class="delete-btn" onclick="return confirm('Are you sure you want to delete this project?')">Delete</a>
        @endauth
      </div>
      <img src="{{ url('storage/public/' . $projects->path) }}" alt="{{ $projects->title }}">
    </div>
    @endforeach
  </div>
</div>


<div class="highlight-box">
    <p class="highlight-text">Are you looking for a Construction & Industrial Experts? </p>
    <button class="highlight-button">Request</button>
</div>


<div class="content-container">
    <!-- Left Section -->
    <div class="text-section">
        <h1>Welcome to Website</h1>
        <p>This is your first paragraph providing some welcoming information about the site.</p>
        <p>This is your second paragraph giving more context or details about the website.</p>
        <button class="cta-button">Learn More</button>
    </div>

    <!-- Right Section -->
    <div class="image-grid">
        <div class="image-box">
            <img src="{{ asset('Images/1.jpg') }}" alt="Image 1">
            <div class="image-text">Building</div>
        </div>
        <div class="image-box">
            <img src="{{ asset('Images/2.jpeg') }}" alt="Image 2">
            <div class="image-text">Industrial</div>
        </div>
        <div class="image-box">
            <img src="{{ asset('Images/3.jpg') }}" alt="Image 3">
            <div class="image-text">Road</div>
        </div>
        <div class="image-box">
            <img src="{{ asset('Images/4.jpg') }}" alt="Image 4">
            <div class="image-text">Interior</div>
        </div>
    </div>
</div>


@if($pro->isNotEmpty())
<div class="project-container">
    <!-- Heading -->
    <h1 class="project-heading">Latest Projects</h1>

    <!-- Category Buttons -->
    <div class="button-container">
        <button class="project-button" onclick="filterProjects('All')">All</button>
        <button class="project-button" onclick="filterProjects('Construction')">Construction</button>
        <button class="project-button" onclick="filterProjects('Automotive')">Automotive</button>
        <button class="project-button" onclick="filterProjects('Industrial')">Industrial</button>
        <button class="project-button" onclick="filterProjects('Mechanics')">Mechanics</button>
    </div>

    <!-- Projects Grid -->
    <div class="project-grid">
        @foreach($pro as $pros)
        <div class="project-card" data-category="{{ $pros->category }}">
            <img src="{{ url('storage/public/' . $pros->path) }}" alt="{{ $pros->title }}" class="project-image">
            <div class="project-info">
                <h3 class="project-title">{{ $pros->title }}</h3>
                <p class="project-category">{{ $pros->category }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@else
<!-- No Projects Message -->
<h1 class="no-projects">No projects available at the moment.</h1>
@endif

  

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{asset('js/tool.js')}}"></script>
<script src="{{asset('js/feedback.js')}}"></script>
<script>
document.addEventListener('DOMContentLoaded', () => {
  const slider = document.getElementById('project-slider');
  let currentIndex = 0;

  const slides = document.querySelectorAll('.slide');
  const totalSlides = slides.length;

  function showSlide(index) {
    slider.style.transform = `translateX(-${index * 100}%)`;
  }

  // Auto-slide (optional)
  setInterval(() => {
    currentIndex = (currentIndex + 1) % totalSlides;
    showSlide(currentIndex);
  }, 5000); // 5 seconds
});
// second js
function filterProjects(category) {
    const projects = document.querySelectorAll('.project-card');

    projects.forEach(project => {
        if (category === 'All' || project.dataset.category === category) {
            project.style.display = 'block';
        } else {
            project.style.display = 'none';
        }
    });
}

</script>
@endsection
