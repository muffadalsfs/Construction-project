@extends('layout.header')

@section('content')
<link rel="stylesheet" href="{{ asset('css/logoshow.css') }}">
<!-- Top Image with Heading -->
<div class="image-container">
    <img src="{{ asset('Images/c.webp') }}" alt="Service Image" class="top-image">
    <h1 class="image-title">Team Gallery</h1>
 
</div>


<!-- Link to External CSS -->


<!-- Engineers Section -->
<div class="engineer-container">
    <h3 class="section-title">Engineers</h3>
    <div class="engineer-grid">
        @foreach($enginner as $eg)
            <div class="engineer-card">
                <div class="engineer-img">
                    <img src="{{ url('storage/public/' . $eg->path) }}" alt="{{ $eg->name }}">
                    <div class="overlay">
                        <p class="engineer-name">{{ $eg->name }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


@endsection
<style>
    .engineer-container {
    max-width: 1200px;
    margin: 0 auto;
    text-align: center;
    font-family: Arial, sans-serif;
}

.section-title {
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
}

.engineer-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}

.engineer-card {
    position: relative;
    width: 22%; /* Approximately 4 cards in a row */
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease;
}

.engineer-card:hover {
    transform: scale(1.05);
}

.engineer-img {
    position: relative;
    width: 100%;
    height: 0;
    padding-top: 100%; /* Keeps the image square */
    overflow: hidden;
    border-radius: 10px;
}

.engineer-img img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: opacity 0.3s ease;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: rgba(0, 0, 0, 0.6);
    opacity: 0;
    transition: opacity 0.3s ease;
    border-radius: 10px;
}

.engineer-card:hover .overlay {
    opacity: 1;
}

.engineer-name {
    font-size: 18px;
    color: #fff;
    font-weight: bold;
    text-align: center;
}

</style>

