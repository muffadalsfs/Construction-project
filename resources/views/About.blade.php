@extends('header')

@section('content')
  <link rel="stylesheet" href="{{asset('css/about.css')}}"> 
  <div class="cover-container">
    <img src="{{ asset('Images/banner2.jpg') }}" alt="Cover Image" class="cover-image">
    <div class="cover-text">
    About
    </div>
  </div>


  <div class="core-value-container">
  <!-- right Section: Image -->
  <div class="image-section">
    <img src="{{ asset('Images/11.jpg') }}" alt="Core Value Image" />
  </div>

  <!-- left Section: Text -->
  <div class="text-section">
    <h1>Welcome to</h1>
    <div class="yellow-line"></div>
    <h1>Koncrete Website</h1>
    <p>Simply dummy text of the printing and typesetting industry has been the industry's standard.</p>
    <p>Mimply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
<p> when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    <button class="cta-button">Learn More</button>
  </div>
</div>




  
    <h1 class="services-heading">Our Services</h1>
    <h1 class="services"></h1>
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




    <div class="highlight-box">
        <p class="highlight-text">Are you looking for a Construction & Industrial Experts? </p>
        <button class="highlight-button">Request</button>
    </div>
    @endsection
<style>


.counters-container {
  display: flex;
  justify-content: space-around; /* Space between counters */
  align-items: center; /* Align items vertically */
  border-radius: 10px;
  padding: 96px 0px 110px 0px;
  flex-wrap: wrap; /* Allow counters to wrap on smaller screens */
  gap: 20px; /* Add space between items */
  background: url('{{ asset('Images/back.jpg') }}') no-repeat center center / cover; /* Single background image */
 
}


.services-container {
  display: flex;
  flex-wrap: wrap; /* Allows wrapping for responsive layout */
  justify-content: center; /* Center the items in the row */
  gap: 20px; /* Space between boxes */
  padding: 20px 30px; /* Added horizontal padding for side spacing */
  background-image: url('{{ asset('Images/service-banner1.png') }}');

  background-size: cover; /* Ensure the image covers the entire section */
  background-position: center; /* Center the background image */
  background-repeat: no-repeat; /* Prevent tiling */
}



.highlight-box {
  display: flex; /* Arrange text and button in one row */
  align-items: center; /* Vertically center content */
  justify-content: center; /* Horizontally center content */
  background-color: #ffb400;
  background-image: url('{{ asset('Images/scale.png') }}');
  background-repeat: repeat-x;
  padding: 20px; /* Add some padding */
  border-radius: 8px; /* Rounded corners */
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Optional shadow for better visual */
  height: 200px;
}


</style>

<script src="{{asset('js/about.js')}}"></script>