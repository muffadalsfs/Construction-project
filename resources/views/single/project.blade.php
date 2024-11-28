@extends('layout.header')

@section('content')
<link rel="stylesheet" href="{{ asset('css/logoshow.css') }}">

@foreach($single as $for)
<div class="image-container">
    <img src="{{ asset('Images/c.webp') }}" alt="Service Image" class="header-image">
    <h1 class="center-text">{{ $for->title }}</h1>
</div>

<div class="project-details">
    <div class="project-image-container">
        <img src="{{ asset('storage/public/' . $for->path) }}" alt="Project Image" class="project-image">
    </div>
    
    <div class="project-info">
        <p class="center-text"><strong>Project Name:</strong> {{$for->title}}</p>
        <p class="center-text"><strong>Customer Name:</strong> {{$for->name}}</p>
        <p class="center-text"><strong>Location:</strong> {{$for->Location}}</p>
        <p class="center-text"><strong>Value:</strong> {{$for->value}}</p>
    </div>

    <h3 class="center-text">Why Choose Our Service?</h3>
    <p class="paragraph center-text">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, 
        pulvinar dapibus leo. Click edit button to change this text.
    </p>
    <p class="paragraph center-text">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, 
        pulvinar dapibus leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
    </p>

    <div class="static-images">
        <img src="{{ asset('Images/images1.jpeg') }}" alt="Static Image 1" class="static-image">
        <img src="{{ asset('Images/man.jpg') }}" alt="Static Image 2" class="static-image">
    </div>

    <p class="paragraph center-text">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, 
        pulvinar dapibus leo.
    </p>

    <div class="button-group">
        <a href="{{ url('/') }}" class="cancel-button">Back to Home</a>
    </div>
</div>
@endforeach
@endsection

<style>
   /* Center everything inside the container */
.center-text {
    text-align: center;
}

/* Header image and title styling */
.image-container {
    text-align: center;
    margin-bottom: 20px;
}

.header-image {
    max-width: 100%;
    height: auto;
    margin-bottom: 20px;
}

/* Project details container */
.project-details {
    text-align: center;
    margin: 20px;
    font-family: Arial, sans-serif;
}

/* Container for the project image */
.project-image-container {
    text-align: center;
    margin-bottom: 20px;
}

.project-image {
    max-width: 70%;
    height: auto;
    border-radius: 10px;
}

/* Project information (name, location, etc.) */
.project-info {

}

.project-info p {
    font-size: 16px;
    line-height: 1.6;
}

/* Static images styling */
.static-images {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin: 20px 0;
}

.static-images img {
    max-width: 1150px;
    height: auto;
    border-radius: 10px;
}

/* Paragraph styling */
.paragraph {
    margin: 10px 0;
    line-height: 1.6;
}

/* Button styling */
.cancel-button {
    padding: 10px 20px;
    background-color: #007BFF;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 20px;
}

.cancel-button:hover {
    background-color: #0056b3;
}


</style>