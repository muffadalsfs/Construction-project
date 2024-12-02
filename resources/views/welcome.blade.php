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


<div class="core-value-containers">
    <div class="text-container">
        <h1>Our Core Value</h1>
        <p>We believe in providing the highest level of service to our clients and creating sustainable value for all stakeholders.</p>
    </div>
    <div class="image-container">
        <img src="{{asset('Images/11.jpg')}}" alt="Core Value Image" />
    </div>
</div>



<div class="core-value-container">
    <!-- Video Container -->
    <div class="video-container">
        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <!-- Text Container -->
    <div class="text-container">
        <h1>Build Your House with Passion & Excellence</h1>
        <p>We provide the best construction services with a focus on quality and detail. Our team ensures that every project is built to perfection.</p>
        <p>With years of experience in the industry, we have developed a reputation for delivering exceptional results on time and within budget.</p>
        <p>Let us help you build the home of your dreams with the utmost care and expertise in every step of the process.</p>
    </div>
</div>

  
<div class="engineer-container">
    @if($enginner->count() > 0)
        <h3 class="section-title">Engineers</h3>
    @endif
    <div class="engineer-grid">
    @foreach($enginner as $eg)
            <div class="engineer-card">
                <div class="engineer-img">
                    <img src="{{ url('storage/public/' . $eg->path) }}" alt="{{ $eg->name }}">
                    <div class="engineer-info">
                        <p class="engineer-name">{{ $eg->name }}</p>
                    </div>
                </div>
                @auth
                    <div class="engineer-actions">
                        <a href="{{ route('engineers.edit', $eg->id) }}" class="btn-edit">Edit</a>
                        <form action="{{ route('engineers.destroy', $eg->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete" onclick="return confirm('Are you sure you want to delete this engineer?')">Delete</button>
                        </form>
                    </div>
                @endauth
            </div>
        @endforeach
    </div>
</div>

<div class="silver-background">
    <!-- Containers for Our Client and Feedback Sections -->
    <div class="sections-container">
        <!-- Our Client Section -->
        <div class="clients-section">
            <h1>Our Client</h1>
            <div class="clients-box">
                <div class="client-box">Client 1</div>
                <div class="client-box">Client 2</div>
                <div class="client-box">Client 3</div>
                <div class="client-box">Client 4</div>
                <div class="client-box">Client 5</div>
                <div class="client-box">Client 6</div>
            </div>
        </div>

        <!-- Feedback Section -->
        <div class="feedback-section">
            <h1>Customers Feedback</h1>
            <div class="feedback-slider" id="feedbackSlider">
                <div class="feedback-wrapper">
                    <div class="feedback">
                        <img src="{{asset('Images/girl.jpg')}}" alt="Customer 1">
                        <div class="feedback-name">John Doe</div>
                        <div class="feedback-rating">⭐⭐⭐⭐⭐</div>
                        <div class="feedback-text">Great experience! Highly recommend.</div>
                    </div>
                    <div class="feedback">
                        <img src="{{asset('Images/boy.jpg')}}" alt="Customer 2">
                        <div class="feedback-name">Jane Smith</div>
                        <div class="feedback-rating">⭐⭐⭐⭐</div>
                        <div class="feedback-text">Amazing service and food.</div>
                    </div>
                    <div class="feedback">
                        <img src="{{asset('Images/boy1.jpg')}}" alt="Customer 3">
                        <div class="feedback-name">Michael Johnson</div>
                        <div class="feedback-rating">⭐⭐⭐⭐⭐</div>
                        <div class="feedback-text">Wonderful ambiance and staff!</div>
                    </div>
                </div>
            </div>
            <div class="slider-nav" id="sliderNav">
                <button class="active"></button>
                <button></button>
                <button></button>
            </div>
        </div>
    </div>
</div>

@if($tool->isNotEmpty())
    <div class="tools-container">
        <h1>Latest Tools</h1>
        <div class="tools-slider" id="toolsSlider">
            <div class="tools-wrapper">
                @foreach($tool as $tools)
                    <div class="tool-card">
                        <img src="{{ url('storage/public/' . $tools->path) }}" alt="{{ $tools->name }}">
                        <div class="tool-details">
                            <p class="tool-name">{{ $tools->name }}</p>
                            <p class="tool-price">${{ $tools->price }}</p>
                        </div>
                        @auth
                            <div class="tool-actions">
                                <a href="{{ route('tools.edit', $tools->id) }}" class="btn-edit">Edit</a>
                                <form action="{{ route('tools.delete', $tools->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-delete" onclick="return confirm('Are you sure you want to delete this tool?')">Delete</button>
                                </form>
                            </div>
                        @endauth
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
 

@if($blog->isNotEmpty())
    <h1 class="news-title">Latest News</h1>
    <div class="news-grid">
        @foreach($blog as $blogs)
        <div class="news-card">
            <!-- Date Box -->
            <div class="date-box">
                {{ \Carbon\Carbon::parse($blogs->created_at)->format('M d, Y') }}
            </div>
            <!-- Blog Image -->
            <img class="news-image" src="{{ url('storage/public/' . $blogs->path) }}" alt="{{ $blogs->title }}">
            <!-- Blog Title -->
            <h2 class="blog-title">{{ Str::limit($blogs->title, 40, '...') }}</h2>
            <!-- Blog Content -->
            <p class="blog-content">{{ Str::limit($blogs->content, 150, '...') }}</p>
            <!-- Created by and Comments -->
            <div class="meta-info">
                <span class="created-by">Created by: <strong>{{ $blogs->user->name }}</strong></span>
                <span class="comments">Comments: {{ $blogs->comments_count ?? 0 }}</span>
            </div>
            <!-- Edit and Delete Buttons -->
            @auth
                @if(auth()->user()->id === $blogs->user_id)
                <div class="post-actions">
                    <a href="{{ route('blog.edit', $blogs->id) }}" class="edit-button">Edit</a>
                    <form action="{{ route('blog.delete', $blogs->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-button">Delete</button>
                    </form>
                </div>
                @endif
            @endauth
        </div>
        @endforeach
    </div>
@endif

<footer class="footers">
    <div class="footers-logo">
        <img src="{{ asset('Images/logo-dark.png') }}" alt="Company Logo" class="logos">
    </div>
    <div class="footer-content">
        <div class="footer-columns">
            <p>United States</p>
            <ul>
                <li>New York - 1060</li>
                <li>Tel. + (123) 2500-567-8990</li>
                <li>Mail. koncrete@mail.com</li>
            </ul>
        </div>
        <div class="footer-columns">
            <p>United Kingdom</p>
            <ul>
                <li>London - 1780</li>
                <li>Tel. + (123) 9900-567-8990</li>
                <li>Mail. koncrete@mail.com</li>
            </ul>
        </div>
        <div class="footer-columns">
            <p>South Asia</p>
            <ul>
                <li>Southeo - 590 Street</li>
                <li>Tel. + (123) 1520-567-0000</li>
                <li>Mail. koncrete@mail.com</li>
            </ul>
        </div>
    </div>
</footer>


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
// third js

</script>
@endsection
