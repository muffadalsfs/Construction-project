@extends('header')

@section('content')
<!-- <link rel="stylesheet" href="{{asset('css/shows/services.css')}}"> -->
<div class="cover-container">
  <img src="{{ asset('Images/c.webp') }}" alt="Cover Image" class="cover-image">
  <div class="cover-text">
  About
  </div>
</div>


<div class="core-value-container">
  <div class="text-container">
    <h1>We are leading company in this field, And provide specific our every customers. </h1>
    <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s

Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap text of the printing and typesetting industry.
.</p>
    <button class="service-button">Learn More</button>
  </div>
  <div class="image-container">
    <img src="{{asset('Images/11.jpg')}}" alt="Core Value Image" />
  </div>
</div>

  
<h1 class="services-heading">Our Services</h1>
<div class="services-container">
    @foreach($service as $serv)
    <div class="service-card">
        <div class="image-wrapper">
          <img src="{{ asset('storage/public/' . $serv->path) }}" alt="Service Image" class="service-image">
        </div>
        <div class="service-content">
            <a href="{{ route('detailservice', $serv->id) }}">
                <h3 class="service-title">{{ $serv->name }}</h3>
            </a>
            <p class="limited-content">{{ \Illuminate\Support\Str::limit($serv->content, 100) }}</p>
        </div>
    </div>
    @endforeach
</div>

<div class="counters-container">
  <div class="counter-card">
    <img src="{{ asset('Images/hand.webp') }}" alt="Logo" class="counter-logo">
    <div class="counter-info">
      <h3 class="counter-number" data-target="428">100</h3>
      <p class="counter-text">Finished projects</p>
    </div>
  </div>
  <div class="counter-card">
    <img src="{{ asset('Images/man.webp') }}" alt="Logo" class="counter-logo">
    <div class="counter-info">
      <h3 class="counter-number" data-target="1250">100</h3>
      <p class="counter-text">Expert Team Members</p>
    </div>
  </div>
  <div class="counter-card">
    <img src="{{ asset('Images/first.webp') }}" alt="Logo" class="counter-logo">
    <div class="counter-info">
      <h3 class="counter-number" data-target="1154">100</h3>
      <p class="counter-text">Received Awards</p>
    </div>
  </div>
</div>





@if($enginner->isNotEmpty())
<div class="engineer-container">
    <h3 class="section-title">Engineers</h3>
    <div class="engineer-grid">
        @foreach($enginner as $eg)
            <div class="engineer-card">
                <div class="engineer-img">
                    <img src="{{ url('storage/public/' . $eg->path) }}" alt="{{ $eg->name }}">
                </div>
                <div class="engineer-name">
                    <p>{{ $eg->name }}</p>
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
@endif




<div class="highlight-box">
    <p class="highlight-text">Are you looking for a Construction & Industrial Experts? </p>
    <button class="highlight-button">Request</button>
</div>
@endsection
<style>
   .cover-container {
  position: relative;
  width: 100%; /* Full width of the container */
  height: 50vh; /* Half the viewport height */
  overflow: hidden; /* Hide any overflow */
}

.cover-image {
  width: 100%;
  height: 100%;
  object-fit: cover; /* Ensures the image covers the container without distortion */
  position: absolute;
  top: 0;
  left: 0;
}

.cover-text {
  position: absolute;
  left:10%; /* Adjust as needed for spacing from the right edge */
  top: 40%; /* Center vertically */
  transform: translateY(-50%); /* Adjust vertical alignment */
  font-weight: 900;
  color: #fff; /* White text */
  padding: 10px 20px; /* Optional: Add padding around text */
  font-size: 3.5rem; /* Adjust font size as needed */
  border-radius: 5px; /* Optional: Add rounded corners to text box */
  
}

/* second layer*/
.core-value-container {
  display: flex;
  align-items: center; /* Vertically center content */
  justify-content: center; /* Center horizontally */
  gap: 20px; /* Add space between the text and image */
  padding: 20px; /* Optional padding around the container */
  flex-wrap: wrap; /* Allow wrapping for responsiveness */
}

.text-container {
  flex: 1; /* Take up equal width with the image */
  display: flex;
  flex-direction: column; /* Stack elements vertically */
  justify-content: center; /* Center vertically */
  text-align: left; /* Align text to the left */
}

.image-container {
  flex: 1; /* Take up equal width with the text */
  display: flex;
  justify-content: center; /* Center the image horizontally */
}

.image-container img {
  max-width: 100%; /* Ensure the image fits the container */
  height: auto; /* Maintain aspect ratio */
  border-radius: 8px; /* Optional rounded corners */
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Optional shadow for better aesthetics */
}

.service-button {
  margin-top: 20px; /* Space between text and button */
  align-self: flex-start; /* Align the button to the left of the text */
  padding: 10px 20px; /* Button padding */
  font-size: 1rem; /* Button font size */
  color: black; /* Button text color */
  background: gold; /* Button background color */
  border: none; /* Remove border */
  border-radius: 5px; /* Rounded corners */
  cursor: pointer; /* Pointer cursor on hover */
  transition: background 0.3s ease; /* Smooth hover effect */
}

.service-button:hover {
  color:white;
}

/* Responsive adjustments for mobile */
@media (max-width: 768px) {
  .core-value-container {
    flex-direction: column; /* Stack elements vertically */
    text-align: center; /* Center text for smaller screens */
  }

  .text-container {
    text-align: center; /* Center the text */
  }

  .service-button {
    align-self: center; /* Center the button */
  }
}

/* third layer */
/* Centering the heading */
.services-heading {
  text-align: center;
  font-size: 2rem; /* Adjust for desired size */
  margin-bottom: 20px;
}

/* Container for service cards */
.services-container {
  display: flex;
  flex-wrap: wrap; /* Allows wrapping for responsive layout */
  justify-content: center; /* Center the items in the row */
  gap: 20px; /* Space between boxes */
  padding: 20px; /* Optional padding */
}

/* Individual service card styling */
.service-card {
  flex: 1 1 calc(25% - 20px); /* 4 cards per row with spacing */
  max-width: calc(25% - 20px); /* Ensure consistent max width */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Optional shadow */
  border-radius: 8px; /* Rounded corners */
  overflow: hidden; /* Prevent overflow from child elements */
  background-color: #fff; /* Card background */
  text-align: center; /* Center the content */
  padding: 15px; /* Inner padding for spacing */
  transition: transform 0.3s ease; /* Hover effect */
}

.service-card:hover {
  transform: translateY(-5px); /* Lift on hover */
}

/* Service image styling */
.image-wrapper img {
  width: 100%;
  height: auto;
  border-radius: 8px;
}

/* Service content styling */
.service-title {
  font-size: 1.2rem;
  margin: 10px 0;
  color: #007bff;
  text-decoration: none;
}

.service-title:hover {
  text-decoration: underline;
}

.limited-content {
  font-size: 0.9rem;
  color: #666;
}

/* Responsive styles for mobile */
@media (max-width: 768px) {
  .service-card {
    flex: 1 1 calc(50% - 20px); /* 2 cards per row */
    max-width: calc(50% - 20px);
  }
}

@media (max-width: 480px) {
  .service-card {
    flex: 1 1 100%; /* 1 card per row */
    max-width: 100%;
  }
}
/* four layer */
/* Container with background */
.counters-container {
  display: flex;
  justify-content: space-around; /* Space between counters */
  align-items: center; /* Align items vertically */
  padding: 20px;
  background: url('{{ asset('Images/back.jpg') }}') no-repeat center center / cover; /* Single background image */
  border-radius: 10px; /* Rounded corners for container */
  gap: 10px; /* Space between cards */
}

/* Each counter card styling */
.counter-card {
  display: flex;
  align-items: center;

  border-radius: 8px;
  padding: 10px 15px;
  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Light shadow */
  flex: 1;
  max-width: 250px; /* Adjust width as needed */
  text-align: center; /* Center content */
}

/* Logo Styling */
.counter-logo {
  width: 60px;
  height: 100px;
  margin-right: 15px; /* Space between logo and text */
  
}

/* Counter Info Styling */
.counter-info {
  display: flex;
  flex-direction: column; /* Stack number and text vertically */
  
}

.counter-number {
  font-size: 3.5rem; /* Large counter number */
  color: white; /* Blue color for the counter */
  margin: 0;
  font-weight: 900;
}

.counter-text {
  font-size: 1rem; /* Smaller text for the description */
  color: white;
  margin: 5px 0 0;
}

/* Responsive styles for mobile */
@media (max-width: 768px) {
  .counters-container {
    flex-direction: column; /* Stack counters vertically */
    gap: 20px; /* Increase gap between counters */
  }

  .counter-card {
    max-width: 100%; /* Full width for mobile */
  }
}
/*five layer */
/* Container styling */
/* Engineer container */
.engineer-container {
  text-align: center;
  padding: 20px;
}

.section-title {
  font-size: 1.8rem;
  margin-bottom: 20px;
  color: #333;
}

/* Engineer grid */
.engineer-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr); /* 4 cards per row */
  gap: 20px; /* Space between cards */
  justify-content: center; /* Center cards horizontally */
}

/* Engineer card */
.engineer-card {
  background: #fff;
  border-radius: 10px;
  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
  overflow: hidden; /* Ensure content stays within card */
  text-align: center;
  transition: transform 0.3s, box-shadow 0.3s; /* Smooth hover effect */
  position: relative;
}

.engineer-card:hover {
  transform: translateY(-5px); /* Lift card slightly on hover */
  box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2); /* Deeper shadow on hover */
}

.engineer-img {
  width: 100%;
  height: 200px; /* Set a fixed height for consistency */
  overflow: hidden; /* Prevent overflow of the image */
}
/* Engineer image */
.engineer-img img {
  width: 100%;
  height: 100%; /* Match parent container's height */
  object-fit: cover; /* Fill the container while maintaining aspect ratio */
}

/* Engineer name (hidden by default) */
.engineer-name {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7); /* Semi-transparent background */
  color: #fff;
  font-size: 1.2rem;
  padding: 10px;
  opacity: 0; /* Hidden initially */
  transition: opacity 0.3s ease; /* Smooth fade-in effect */
}

.engineer-card:hover .engineer-name {
  opacity: 1; /* Show on hover */
}

/* Authenticated user actions */
.engineer-actions {
  position: relative; /* Ensure buttons are positioned relative to the card */
  margin-top: 10px;
  display: flex;
  justify-content: center; /* Center buttons horizontally */
  gap: 10px; /* Space between buttons */
}

.btn-edit, .btn-delete {
  display: inline-block;
  padding: 5px 15px;
  color: #fff;
  font-size: 0.9rem;
  text-decoration: none;
  border-radius: 5px;
  border: none;
  cursor: pointer;
}

.btn-edit {
  background: #007bff;
}

.btn-edit:hover {
  background: #0056b3;
}

.btn-delete {
  background: #dc3545;
}

.btn-delete:hover {
  background: #a71d2a;
}

/* Responsive styling for mobile */
@media (max-width: 768px) {
  .engineer-grid {
    grid-template-columns: repeat(2, 1fr); /* 2 cards per row on smaller screens */
    gap: 15px; /* Adjust spacing for smaller viewports */
  }
}

@media (max-width: 480px) {
  .engineer-grid {
    grid-template-columns: 1fr; /* 1 card per row on very small screens */
  }
}

/* six layer */
/* Highlight box styling */
.highlight-box {
    background-color: yellow; /* Yellow background */
    display: flex; /* Flexbox for alignment */
    align-items: center; /* Center items vertically */
    justify-content: center; /* Center items horizontally */
    padding: 20px; /* Spacing around the content */
    text-align: center; /* Center text inside */
    flex-wrap: wrap; /* Allow wrapping for responsiveness */
    gap: 10px; /* Spacing between text and button */
  }
  
  /* Text Styling */
  .highlight-text {
    font-size: 3.5rem; /* Adjust text size */
    color: white; /* Dark text color for contrast */
    margin: 0; /* Remove default margins */
  }
  
  /* Button Styling */
  .highlight-button {
    padding: 10px 20px; /* Button padding */
    font-size: 1rem; /* Button font size */
    color: black; /* Button text color */
    background-color: white; /* Red button background */
    border: none; /* Remove border */
    border-radius: 5px; /* Rounded corners */
    cursor: pointer; /* Pointer cursor on hover */
    transition: background-color 0.3s ease, transform 0.2s; /* Smooth hover effect */
  }
  
  .highlight-button:hover {
    background-color: gold; /* Darker red on hover */
    transform: scale(1.05); /* Slightly enlarge on hover */
    color:white;
  }
  
  /* Responsive Styling */
  @media (max-width: 768px) {
    .highlight-box {
      flex-direction: column; /* Stack text and button vertically on smaller screens */
    }
  }
/* Responsive styling for mobile */
@media (max-width: 768px) {
  .highlight-box {
    flex-direction: column; /* Stack text and button vertically */
    text-align: center; /* Center text and button horizontally */
  }

  .highlight-text {
    margin-bottom: 10px; /* Add space between text and button */
  }
}


</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const counters = document.querySelectorAll('.counter-number');

  counters.forEach(counter => {
    const updateCounter = () => {
      const target = +counter.getAttribute('data-target');
      const count = +counter.innerText;

      const increment = Math.ceil(target / 100); // Adjust increment speed

      if (count < target) {
        counter.innerText = count + increment;
        setTimeout(updateCounter, 30); // Adjust speed of update
      } else {
        counter.innerText = target;
      }
    };

    updateCounter();
  });
});


</script>