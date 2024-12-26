@extends('header')

@section('content')

<link rel="stylesheet" href="{{ asset('css/logoshow.css') }}">
<link rel="stylesheet" href="{{ asset('css/detail/enginners.css') }}">
<div class="image-container">
    <img src="{{ asset('Images/banner2.jpg') }}" alt="Service Image">
    <h1 class="main-title">{{ $enginner->name }}</h1>
</div>

<div class="engineer-details">
<img src="{{ $enginner->path ? (file_exists(public_path('storage/public/' . $enginner->path)) ? url('storage/public/' . $enginner->path) : asset('Images/12.jpg')) : asset('Images/12.jpg') }}" alt="{{ $enginner->title }}"
class="engineer-image">
    <div class="engineer-info">
        <h2>{{ $enginner->name }}</h2>
        <p class="paragraph">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, 
            pulvinar dapibus leo. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
        </p>
    </div>
</div>

<div class="related-engineers">
    @foreach($engi as $name)
    <div class="cards">
    <img src="{{ $name->path ? (file_exists(public_path('storage/public/' . $name->path)) ? url('storage/public/' . $name->path) : asset('Images/12.jpg')) : asset('Images/12.jpg') }}" alt="{{ $name->title }}"
    class="cards-image">
        <h3 class="cards-title">{{ $name->name }}</h3>
        <a href="{{ route('enginners.detail', $name->id) }}">
            <button class="cards-button">View Profile</button>
        </a>
    </div>
    @endforeach
</div>

@endsection
