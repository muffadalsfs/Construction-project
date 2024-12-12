@extends('header')

@section('content')

<link rel="stylesheet"  href="{{ asset('css/detail/project.css') }}">
<link rel="stylesheet"  href="{{ asset('css/logoshow.css') }}">
<div class="image-container">
    <img src="{{ asset('Images/banner2.jpg') }}" alt="Service Image">
    @foreach($single as $project)
    <h1>{{$project->title}}</h1>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Detail Page</title>
    
</head>
<body>
    <!-- Detail Page Content -->
    <div class="detail-container">
        <div style="position: relative;">
            <img src="{{ url('storage/public/' . $project->path) }}" alt="Blog Image" class="blog-image">
            <div class="title-overlay">{{ $project->title }}</div>
        </div>

        <h3>Our Professional & Expert Team</h3>
        <p class="paragraph">Project name:{{$project->title}}</p>
        <p class="paragraph">Customer name:{{$project->name}}</p>
        <p class="paragraph">Location:{{$project->Location}}</p>
        <p class="paragraph">value:{{$project->value}}</p>
        <h3>Why Choose Our Service?</h3>
        <p class="paragraph">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, 
            pulvinar dapibus leo. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
        </p>
        <p class="paragraph">
        Lorem ipsum dolor sit amet, consectetur adiClick edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.piscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adiClick edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.piscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
        </p>
        <div class="static-images">
            <img src="{{asset('Images/images1.jpeg')}}" alt="Static Image 1">
            <img src="{{asset('Images/man.jpg')}}" alt="Static Image 2">
        </div>

        <p class="paragraph">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
        </p>
        <p class="paragraph">
        Lorem ipsum dolor sit amet, consectetur adiClick edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.piscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
        </p>
        <p class="paragraph">
        Lorem ipsum dolor sit amet, consectetur adiClick edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.piscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adiClick edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.piscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
        </p>
        <div class="button-group">
          
            <a href="{{ url('/') }}" class="cancel-button">Back to Home</a>
        </div>
    </div>
    @endforeach
</body>
</html>
@endsection