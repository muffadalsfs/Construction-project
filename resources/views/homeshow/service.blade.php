@extends('header')

@section('content')
<link rel="stylesheet" href="{{ asset('css/logoshow.css') }}">
<link rel="stylesheet" href="{{asset('css/shows/services.css')}}">
<div class="image-container">
    <img src="{{ asset('Images/banner2.jpg') }}" alt="Service Image" class="top-image">
    <h1 class="image-title"> Archives: Services</h1>
 
</div>

<h1 class="services-heading">Our Services</h1>
<div class="services-container">
    @foreach($service as $serv)
    <div class="service-card">
        <a href="{{ route('detailservice', $serv->id) }}">
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
    </div>
    @endforeach
</div>


@endsection
<style>

.services-heading {
  text-align: center;
  padding: 30px 0; 
  font-family: "Rubik", Sans-serif;
  font-size: 36px;
  font-weight: 500;
  color: #333;
}

.services-container {
  display: flex;
  flex-wrap: wrap; 
  justify-content: space-between; 
  gap: 15px; 
  padding: 20px; 
}

.service-card {
  flex: 1 1 calc(20% - 15px);
  max-width: calc(20% - 15px);
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  border-radius: 8px;
  overflow: hidden;
  background-color: #fff;
  text-align: center;
  padding: 10px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  height: 300px;
  transition: transform 0.3s ease;
}

.service-card:hover {
  transform: translateY(-5px);
}

.image-wrapper {
  width: 100%;
  height: 150px;
  overflow: hidden;
  border-radius: 8px;
}

.service-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.service-title {
  font-size: 1rem;
  color: #007bff;
  margin: 10px 0 5px;
  text-decoration: none;
}

.service-title:hover {
  text-decoration: none;
}

.limited-content {
  font-size: 0.8rem;
  color: #666;
  margin-top: 5px;
  text-align: center;
}

@media (max-width: 1024px) {
  .service-card {
    flex: 1 1 calc(25% - 15px);
    max-width: calc(25% - 15px);
  }
}

@media (max-width: 768px) {
  .service-card {
    flex: 1 1 calc(33.33% - 15px);
    max-width: calc(33.33% - 15px);
  }
}

@media (max-width: 480px) {
  .service-card {
    flex: 1 1 calc(50% - 15px);
    max-width: calc(50% - 15px);
    height: auto;
  }
}


</style>