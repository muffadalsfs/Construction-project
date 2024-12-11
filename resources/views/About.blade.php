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
    <div class="text-section">
        <h1>Welcome to </h1>
        <h1> Koncrete Website </h1>

        <p> Simply dummy text of the printing and typesetting industry has been the industry's standard. </p>
        <p>Mimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        .</p>
        <button class="cta-button">Learn More</button>
    </div>
      <div class="image-container">
        <img src="{{asset('Images/11.jpg')}}" alt="Core Value Image" />
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
  padding: 20px;
  background: url('{{ asset('Images/back.jpg') }}') no-repeat center center / cover; /* Single background image */
  border-radius: 10px; /* Rounded corners for container */
  gap: 10px; /* Space between cards */
  height: 200px;
}




</style>

<script src="{{asset('js/about.js')}}"></script>