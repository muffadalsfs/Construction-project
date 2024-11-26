@extends('layout.header')

@section('content')

<!-- Top Image with Heading -->
<div class="image-container">
    <img src="{{ asset('Images/c.webp') }}" alt="Service Image" class="top-image">
    <h1 class="image-title">Team Gallery</h1>
 
</div>


<!-- Link to External CSS -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<!-- Engineers Section -->
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
            </div>
        @endforeach
    </div>
</div>

@endsection

<style>
/* Top Image with Title */
.image-container {
    position: relative;
    max-width:  100%;
    height: 50vh; /* Half of the viewport height */
    overflow: hidden; /* Ensures the image doesn't exceed the container */
    display: flex;
    align-items: center; /* Vertically center content */
}

.top-image {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensures the image covers the container without distortion */
}

.image-title {
    position: absolute;
    top: 20%; /* Adjust as needed for vertical alignment */
    left: 10%; /* Align text to the left */
    color: white;
    font-size: 36px;
    font-weight: bold;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
    margin: 0;
}

/* Button below the text */
.image-button {
    position: absolute;
    top: 40%; /* Adjust for positioning relative to the text */
    left: 10%;
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    text-decoration: none;
    font-size: 16px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.image-button:hover {
    background-color: #0056b3;
}


/* Engineers Section */
.engineer-container {
    max-width: 1200px;
    margin: 40px auto;
    text-align: center;
}

.section-title {
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
}

/* Grid Layout for Engineer Cards */
.engineer-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    justify-content: center;
}

/* Engineer Card Styling */
.engineer-card {
    position: relative;
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
    text-align: center;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.engineer-card:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
}

/* Engineer Image */
.engineer-img img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-bottom: 1px solid #ddd;
}

/* Hidden Name Overlay */
.engineer-name {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.7);
    color: white;
    font-size: 18px;
    padding: 10px;
    opacity: 0;
    transition: opacity 0.3s ease;
    text-align: center;
}

.engineer-card:hover .engineer-name {
    opacity: 1;
}
</style>
