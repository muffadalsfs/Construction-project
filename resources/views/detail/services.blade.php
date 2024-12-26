@extends('header')

@section('content')
<link rel="stylesheet" href="{{ asset('css/logoshow.css') }}">
<link rel="stylesheet" href="{{ asset('css/detail/services.css') }}">
<div class="image-container">
    <img src="{{ asset('Images/banner2.jpg') }}" alt="Service Image">
    <h1>{{$service->name}}</h1>
</div>
<div class="service-container">
    <div class="service-image-name">
        <div class="image-wrapper">
        <img src="{{ $service->path ? (file_exists(public_path('storage/public/' . $service->path)) ? url('storage/public/' . $service->path) : asset('Images/1.jpg')) : asset('Images/1.jpg') }}" alt="{{ $service->title }}"
        class="service-fixed-image">
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
