@extends('layout.header')

@section('content')
<link rel="stylesheet" href="{{asset('css/shows/services.css')}}">


<div class="core-value-container">
        <div class="text-container">
            <h1>Our Core Value</h1>
            <p>We believe in providing the highest level of service to our clients and creating sustainable value for all stakeholders.</p>
        </div>
        <div class="image-container">
            <img src="{{asset('Images/11.jpg')}}" alt="Core Value Image" />
        </div>
    </div>
    
    <div class="service-container">
  
    @foreach($service as $serv)
    <div class="service-card">
        <div class="image-wrapper">
          <img src="{{ asset('storage/public/' . $serv->path) }}" alt="Service Image" class="service-image">
        </div>
        <div class="service-content">
        <a href="{{ route('detailservice', $serv->id) }}"><h3 class="service-title">{{ $serv->name }}</h3></a>

            <p class="limited-content">{{ \Illuminate\Support\Str::limit($serv->content, 100) }}</p>

        </div>
    </div>
    @endforeach
</div>
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
<div class="highlight-box">
    <p class="highlight-text">Are you looking for a Construction & Industrial Experts? </p>
    <button class="highlight-button">Request</button>
</div>
@endsection
<style>
    .core-value-container {
    display: flex; /* Align items side by side */
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
    padding:50px;
    gap: 20px; /* Add space between text and image */
}

/* Text Container */
.text-container {
    text-align: center; /* Center text horizontally */
    max-width: 500px; /* Limit width of text */
    order: 1; /* Ensure text appears on the left side */
}

.text-container h1 {
    font-size: 36px;
    margin-bottom: 20px;
    color: #333; /* Dark color for the heading */
}

.text-container p {
    font-size: 18px;
    color: #666; /* Lighter color for the paragraph */
}

/* Image Container */
.image-container {
    order: 2; /* Ensure image appears on the right side */
}

.image-container img {
    width: 1000px; /* Fixed width for the image */
    height: 500px; /* Maintain aspect ratio */
}
/*second style*/
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
    gap: 80px;
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
    pointer-events: none; /* Prevent overlay from interfering with clicks */
}

.engineer-card:hover .engineer-name {
    opacity: 1;
}
.engineer-actions {
    margin-top: 10px;
    display: flex;
    gap: 10px;
}

.btn-edit, .btn-delete {
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

.btn-edit {
    background-color: #007bff;
}

.btn-delete {
    background-color: #dc3545;
}

.btn-delete:hover {
    background-color: #c82333;
}
.btn-edit:hover {
    background-color: #0056b3;
}

/*eight layer*/

.silver-background {
    background-color: #c0c0c0; /* Silver background color */
    padding: 40px 20px; /* Add padding around the container */
}
.highlight-box {
    background-color: #ffeb3b; /* Bright yellow background */
    padding: 20px;
    border-radius: 10px;
    display: flex; /* Use flexbox for alignment */
    justify-content: center; /* Center text and button horizontally */
    align-items: center; /* Vertically center align text and button */
    margin:  auto; /* Centers the box */
    max-width: 100%; /* Increased width for the box */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Adds a subtle shadow */
}

/* Text Styles */
.highlight-text {
    font-size: 40px; /* Larger text size */
    font-weight: bold;
    color:white; /* Neutral dark color for the text */
    margin-right: 20px; /* Adds space between the text and button */
    white-space: nowrap; /* Prevents text from wrapping */
}

/* Button Styles */
.highlight-button {
    background-color: white; /* Dark background for contrast */
    color: black; /* White text */
    border: none;
    padding: 10px 20px; /* Larger button size */
    font-size: 16px;
    font-weight: bold;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.3s ease-in-out; /* Smooth transitions for hover effects */
}

/* Hover Effect */
.highlight-button:hover {
    background-color: gold; /* Slightly darker background on hover */
    color: white; /* Yellow text on hover for contrast */
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); /* Enhanced shadow effect */
    transform: scale(1.05); /* Slight zoom on hover */
}

.highlight-button:active {
    transform: scale(0.95); /* Button shrink effect on click */
}

</style>

