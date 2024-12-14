@extends('header')

@section('content')

<link rel="stylesheet"  href="{{ asset('css/raf.css') }}">

<div class="slider-container">
  <div class="slider" id="project-slider">
    @foreach($Project as $projects)
    <div class="slide">
      <div class="image-container">
        <img src="{{ url('storage/public/' . $projects->path) }}" alt="{{ $projects->title }}">
      </div>
      <div class="slide-content">
        <h2>{{ $projects->title }}</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p>Praesent libero. Sed cursus ante dapibus diam.</p>
        <a href="{{ route('project.detail', $projects->id) }}"><button>Learn More</button></a>
        @auth
        <a href="{{ route('project.edit', $projects->id) }}" class="edit-btn">Edit</a>
        <a href="{{ route('project.delete', $projects->id) }}" class="delete-btn" onclick="return confirm('Are you sure you want to delete this project?')">Delete</a>
        @endauth
      </div>
    </div>
    @endforeach
  </div>
</div>

   
<div class="highlight-box">
    <p class="highlight-text">Are you looking for a Construction & Industrial Experts?</p>
    <button class="highlight-button">Request</button>
</div>



<div class="content-container">
    <!-- Left Section -->
    <div class="text-section">
        <h1>Welcome to </h1>
        <h1> Koncrete Website </h1>

        <p> Simply dummy text of the printing and typesetting industry has been the industry's standard. </p>
        <p>Mimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        .</p>
        <button class="cta-button">Learn More</button>
    </div>

    <!-- Right Section: Image Grid -->
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
        <a href="{{ route('project.detail', $projects->id) }}">  <img src="{{ url('storage/public/' . $pros->path) }}" alt="{{ $pros->title }}" class="project-image">
            <div class="project-info">
                <h3 class="project-title">{{ $pros->title }}</h3>
                <p class="project-category">{{ $pros->category }}</p>
            </div>
        </div>
        <a>
        @endforeach
    </div>
        </div>
        @else
        <h1 class="no-projects">No projects available at the moment.</h1>
        @endif

        <div class="cores"> <!-- Changed 'core' to 'cores' -->
    <div class="text-container">
        <h1>Our Core Value</h1>
        <p>We believe in providing the highest level of service to</p>
        <p>our clients and creating sustainable value for all stakeholders.</p>
        
        <!-- New rectangular box with text -->
        <div class="rectangular-box">
            <p>
Modern Technology we used for you
</p>
        </div>
        <div class="rectangular-box">
        <button onclick="myFunction()"> <p>We have Experinced Technician Team.</p></button>
        </div>
        <div class="rectangular-box">
            <p>Completely revolution in Agriculture</p>
        </div>
    </div>
    <div class="show">
        <img src="{{ asset('Images/11.jpg') }}" alt="Core Value Image" />
    </div>
</div>






<div class="core">
<div class="video-containers">
    <div class="video-thumbnail" onclick="playVideo()">
        <img src="{{ asset('Images/background.jpg') }}" alt="Video Thumbnail">
        <div class="play-button">&#9658;</div>
    </div>
    <iframe
    id="background-video"
    src="https://www.youtube.com/embed/sPhvyHG15es?autoplay=1&controls=1"
    style="display:none; width: 100%; height: 900px; border-radius: 8px;"
    frameborder="0"
   
    allowfullscreen>
</iframe>

</div>

    <div class="text-containers">
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
    <div class="sections-container">
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
        <h1>Our Latest Products </h1>
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
    <h1 class="news-title">Our Latest News </h1>
    <div class="news-grid">
        @foreach($blog as $blogs)
        <div class="news-card">

            <div class="date-box">
                {{ \Carbon\Carbon::parse($blogs->created_at)->format('M d, Y') }}
            </div>
           
            <a href="{{ route('blog.detail', $blogs->id) }}">  <img class="news-image" src="{{ url('storage/public/' . $blogs->path) }}" alt="{{ $blogs->title }}">
           
            <h2 class="blog-title">{{ Str::limit($blogs->title, 40, '...') }}</h2>
          
            <p class="blog-content">{{ Str::limit($blogs->content, 150, '...') }}</p>
                      <div class="meta-info">
                <span class="created-by">Created by: <strong>{{ $blogs->user->name }}</strong></span>
                <span class="comments">Comments: {{ $blogs->comments_count ?? 0 }}</span>
            </div>
          
            @auth
                @if(auth()->user()->id === $blogs->user_id)
                <div class="post-actions">
                    <a href="{{ route('blog.edit', $blogs->id) }}" class="edit-button">Edit</a>
                    <a href="{{ route('blog.delete', $blogs->id) }}" class="delete-button">Delete</a>
                </div>
                @endif
            @endauth
        </div>
        @endforeach
    </div>
</a>
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
<style>
    .highlight-box {
  display: flex; /* Arrange text and button in one row */
  align-items: center; /* Vertically center content */
  justify-content: center; /* Horizontally center content */
  background-color: #ffb400;
  padding: 20px; /* Add some padding */
  border-radius: 8px; /* Rounded corners */
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Optional shadow for better visual */
  height: 200px;
   background-image: url('{{ asset('Images/scale.png') }}');
  background-repeat: repeat-x;
}


.content-container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 50px;
  gap: 20px;
  max-width: 1200px; /* Limit container width for large screens */
  margin: 0 auto; /* Center the container horizontally */
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url('{{ asset('Images/servicebg.jpg') }}');
}


</style>
<script src="{{asset('js/all.js')}}"></script>

<script>
function playVideo() {
    const thumbnail = document.querySelector('.video-thumbnail');
    const video = document.getElementById('background-video');
    
    thumbnail.style.display = 'none'; // Hide the thumbnail
    video.style.display = 'block';   // Show the iframe
}

</script>

@endsection