@extends('header')

@section('content')
<link rel="stylesheet" href="{{ asset('css/logoshow.css') }}">
<div class="image-container">
    <img src="{{ asset('Images/banner2.jpg') }}" alt="Service Image" class="top-image">
    <h1 class="image-title"> Service Gallery </h1>
</div>

<div class="service-container">
    @foreach($service as $serv)
    <div class="service-card">
        <div class="image-wrapper">
        <a href="{{ route('detailservice', $serv->id) }}"> <img src="{{ $serv->path ? (file_exists(public_path('storage/public/' . $serv->path)) ? url('storage/public/' . $serv->path) : asset('Images/1.jpg')) : asset('Images/1.jpg') }}" alt="{{ $serv->title }}"
        class="service-image">
        </div>
        <div class="service-content">
            <h3 class="service-title">{{ $serv->name }}</h3>
            <p class="limited-content">{{ \Illuminate\Support\Str::limit($serv->content, 100) }}</p>
            <div class="service-actions">
                </a>
                @auth 
                @if (Auth::id() === $serv->user_id)
                <a href="{{ route('editservice', $serv->id) }}" class="edit-button">Edit</a>
                <form action="{{ route('deleteservice', $serv->id) }}" method="POST" class="delete-form" onsubmit="return confirm('Are you sure you want to delete this service?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-button">Delete</button>
                </form>
                @endif
                @endauth
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
<style>
 .service-container {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 20px;
  padding: 20px;
  justify-content: center;
  margin: 0 auto;
  max-width: 1200px;
}

.service-container a {
  text-decoration: none;
}

.service-card {
  background-color: #fff;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  padding: 15px;
}

.image-wrapper {
  width: 100%;
  height: 150px;
  overflow: hidden;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-bottom: 15px;
}

.service-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 5px;
}

.service-content {
  padding: 10px 0;
}

.service-title {
  font-size: 1.2rem;
  font-weight: bold;
  margin-bottom: 10px;
  color: #333;
}

.limited-content {
  font-size: 0.9rem;
  color: #555;
  margin-bottom: 15px;
}

.service-actions {
  display: flex;
  justify-content: center;
  gap: 10px;
  flex-wrap: nowrap;
}

.detail-button,
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
  width: 90px;
  height: 36px;
  box-sizing: border-box;
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

a {
  text-decoration: none;
}

@media (max-width: 1024px) {
  .service-container {
    grid-template-columns: repeat(3, 1fr);
    padding: 15px;
  }
}

@media (max-width: 768px) {
  .service-container {
    grid-template-columns: repeat(2, 1fr);
    padding: 10px;
  }

  .button-container {
    flex-direction: column;
    gap: 10px;
  }

  .edit-button,
  .delete-button {
    text-align: center;
  }
}

@media (max-width: 480px) {
  .service-container {
    grid-template-columns: 1fr;
    padding: 5px;
  }
}


</style>