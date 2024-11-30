@extends('layout.header')

@section('content')
<div class="about-section">
    <div class="about-container">
        <div class="about-left">
            <h1>About Us</h1>
            <p>Your content goes here. Add relevant details about your company or project.</p>
            <button class="hover-button">Learn More</button>
        </div>
        <div class="about-right">
            <img src="{{ asset('path/to/image.jpg') }}" alt="About Image">
        </div>
    </div>
</div>

<div class="service-section">
    <h1>Service</h1>
    <div class="service-container">
        @foreach($service as $se)
        <div class="service-card">
            <img src="{{ url('storage/public/' . $se->path) }}" alt="{{ $se->title }}">
            <a href="{{ route('detailservice', $se->id) }}">
                <p>{{ $se->name }}</p>
            </a>
        </div>
        @endforeach
    </div>
</div>

<div class="counter-section" style="background-image: url('path/to/background.jpg');">
    <div class="counter-container">
        <div class="counter-box">
            <img src="path/to/logo1.png" alt="Logo">
            <p>Counter 1</p>
        </div>
        <div class="counter-box">
            <img src="path/to/logo2.png" alt="Logo">
            <p>Counter 2</p>
        </div>
        <div class="counter-box">
            <img src="path/to/logo3.png" alt="Logo">
            <p>Counter 3</p>
        </div>
    </div>
</div>

<div class="core-value-container" style="background-color: yellow;">
    <div class="highlight-box">
        <p class="highlight-text">Are you looking for a Construction & Industrial Experts?</p>
        <button class="highlight-button">Request</button>
    </div>
</div>

<div class="engineer-section">
    <h1>Engineer</h1>
    <div class="engineer-container">
        @foreach($enginner as $er)
        <div class="engineer-card">
            <img src="{{ url('storage/public/' . $er->path) }}" alt="{{ $er->title }}">
            <div class="engineer-name">{{ $er->name }}</div>
        </div>
        @endforeach
    </div>
</div>
@endsection
