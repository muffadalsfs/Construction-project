@extends('layout.header')

@section('content')
<link rel="stylesheet" href="{{ asset('css/logoshow.css') }}">
<div class="image-container">
    <img src="{{ asset('Images/c.webp') }}" alt="Service Image">
    <h1>{{$service->name}}</h1>
</div>
<div class="service-container">
    <div class="service-image-name">
        <div class="image-wrapper">
            <img src="{{ url('storage/public/' . $service->path) }}" alt="Service Image" class="service-fixed-image">
            <h1 class="service-name">{{$service->name}}</h1>
        </div>
    </div>
    <div class="service-content">
        <p>{{$service->content}}</p>
        <h3>Why Choose Our Service?</h3>
        <p class="paragraph">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, 
            pulvinar dapibus leo. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
        </p>
        <p class="paragraph">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, 
            pulvinar dapibus leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.
        </p>
        <div class="static-images">
            <img src="{{ asset('Images/images1.jpeg') }}" alt="Static Image 1">
            <img src="{{ asset('Images/man.jpg') }}" alt="Static Image 2">
        </div>
        <p class="paragraph">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
        </p>
        <div class="button-group">
            <a href="showservice" class="back-link">Back</a>
        </div>
    </div>
</div>
@endsection

<style>
   .service-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 20px;
    font-family: Arial, sans-serif;
}

.image-wrapper {
    position: relative;
    display: inline-block;
}

.service-fixed-image {
    max-width: 1150px; /* Fixed size for the image */
    border-radius: 10px;
}

.service-name {
    position: absolute;
    bottom: 10px; /* Adjust position as needed */
    left: 50%;
    transform: translateX(-50%);
    color: white;
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background for readability */
    padding: 5px 10px;
    border-radius: 5px;
    font-size: 16px;
    text-align: center;
}

.service-content {
    max-width: 800px;
    text-align: center;
    line-height: 1.6;
}

.static-images {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin: 20px 0;
}

.static-images img {
    max-width: 150px;
    border-radius: 5px;
    box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.1);
}

.cancel-button {
    display: inline-block;
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

.back-link {
    margin-top: 20px;
    font-size: 14px;
    color: #007BFF;
    text-decoration: underline;
}

</style>