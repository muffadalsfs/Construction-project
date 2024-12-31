@extends('header')

@section('content')
<link rel="stylesheet" href="{{ asset('css/logoshow.css') }}">

<div class="image-container">
    <img src="{{ asset('Images/banner2.jpg') }}" alt="Service Image" class="top-image">
    <h1 class="image-title"> Archives: Services</h1>
 
</div>

<h1 class="services-heading">Our Services</h1> 
<div class="services-container">
    @foreach($service as $serv)
    <div class="service-card">
        <a href="{{ route('detailservice', $serv->id) }}" class="service-link">
            <div class="image-wrapper">
                <img src="{{ $serv->path ? (file_exists(public_path('storage/public/' . $serv->path)) ? url('storage/public/' . $serv->path) : asset('Images/1.jpg')) : asset('Images/1.jpg') }}" 
                     alt="{{ $serv->title }}" 
                     class="service-image">
            </div>
            <div class="service-content">
                <h3 class="service-title">{{ $serv->name }}</h3> 
            </div>
        </a>
        <p class="limited-content">{{ \Illuminate\Support\Str::limit($serv->content, 100) }}</p>
        @auth 
                @if (Auth::id() === $serv->user_id)
                <div class="button-container">
    <a href="{{ route('editservice', $serv->id) }}" class="edit-button">Edit</a>
    <form action="{{ route('deleteservice', $serv->id) }}" method="POST" class="delete-form" onsubmit="return confirm('Are you sure you want to delete this service?');">
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




@endsection
<style>

.services-heading {
  text-align: center; /* Centers the heading */
  padding: 30px 0;
  font-family: "Rubik", Sans-serif;
  font-size: 36px;
  font-weight: 500;
  color: #333;
}

.services-container {
  display: grid;
  grid-template-columns: repeat(3, 1fr); /* Fixed 3 columns per row */
  gap: 20px; /* Spacing between cards */
  padding: 20px; /* Internal padding for the grid */
  margin: 0 auto; /* Centers the grid and adds left/right spacing */
  max-width: 1200px; /* Optional: limits the max width of the grid */
  box-sizing: border-box; /* Ensure padding and margin are included in total width */
}

.service-card {
  background-color: #222; /* Dark card background */
  border-radius: 10px;
  overflow: hidden;
  text-align: center;
  transition: transform 0.3s ease;
}

.service-card:hover {
  transform: translateY(-5px);
}

.image-wrapper {
  width: 100%;
  height: 200px; /* Fix the height of the image wrapper */
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
  border-radius: 8px;
  padding: 0;
}

.service-image {
  width: 100%;
  height: 200px;
  object-fit: cover; /* Auto-adjust image size */
}

.service-title {
  font-size: 1rem;
  color: #007bff;
  margin: 10px 0 5px;
  text-decoration: none; /* Ensure no underline */
  display: block;
}

.service-link {
  text-decoration: none; /* Remove underline from anchor links */
}

.service-title:hover {
  text-decoration: none; /* No underline on hover */
}

.limited-content {
  font-size: 0.8rem;
  color: #666;
  margin-top: 5px;
  text-align: center;
}
.edit-button,
.delete-button {
  padding: 8px 12px;
  border-radius: 5px;
  font-size: 14px;
  text-decoration: none;
  color: white;
  border: none;
  cursor: pointer;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 90px; /* Set consistent width */
  height: 36px; /* Set consistent height */
  box-sizing: border-box; /* Ensure padding is considered within dimensions */
}

.detail-button {
  background-color: #007bff;
}

.detail-button:hover {
  background-color: #0056b3;
}

.edit-button {
  background-color: #28a745;
}

.edit-button:hover {
  background-color: #1e7e34;
}

.delete-button {
  background-color: #dc3545;
}

.delete-button:hover {
  background-color: #c82333;
}

.delete-form {
  margin: 0;
}

@media (max-width: 1024px) {
  .service-card {
    flex: 1 1 calc(33.33% - 15px); /* Three cards per row */
    max-width: calc(33.33% - 15px);
     gap: 10px; /* Minimal spacing between cards */
      margin: 0 5px; /* Narrow side spacing */
  }
}

@media (max-width: 768px) {
  .service-card {
    flex: 1 1 calc(50% - 15px); /* Two cards per row */
    max-width: calc(50% - 15px);
  }
}

@media (max-width: 480px) {
  .service-card {
    flex: 1 1 calc(100% - 15px); /* One card per row */
    max-width: calc(100% - 15px);
    height: auto;
  }
}




</style>