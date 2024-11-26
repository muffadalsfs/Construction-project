@extends('layout.header')

@section('content')
<link rel="stylesheet"  href="{{ asset('css/logoshow.css') }}">
<div class="image-container">
    <img src="{{ asset('Images/c.webp') }}" alt="Service Image">

</div>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .detail-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            background: #f9f9f9;
        }

        .blog-image {
            position: relative;
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 10px;
        }

        .title-overlay {
            position: absolute;
            top: 240px;
            left: 20px;
            
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1.5em;
        }

        .static-images {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 20px 0;
        }

        .static-images img {
            width: 45%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }

        .paragraph {
            margin: 20px 0;
            line-height: 1.8;
            text-align: justify;
        }

        .button-group {
            margin: 20px 0;
        }

        .cancel-button {
            padding: 10px 20px;
            margin: 0 10px;
            background: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .cancel-button:hover {
            background: #0056b3;
        }
    </style>
@foreach($single as $singles)
<div class="detail-container">
        <div style="position: relative;">
            <img src="{{ url('storage/public/' . $singles->path) }}" alt="Blog Image" class="blog-image">
            <div class="title-overlay">{{ $singles->title }}</div>
        </div>

        <h3>Our Professional & Expert Team</h3>
        <p class="paragraph">{{ $singles->content }}</p>

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
</body>
@endforeach
@endsection 