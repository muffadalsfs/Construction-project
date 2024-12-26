@extends('header')

@section('content')

<link rel="stylesheet" href="{{ asset('css/logoshow.css') }}">
<link rel="stylesheet" href="{{ asset('css/detail/enginners.css') }}">
<div class="image-container">
    <img src="{{ asset('Images/banner2.jpg') }}" alt="Service Image">
    <h1 class="main-title">{{ $enginner->name }}</h1>
</div>

<div class="engineer-details">
    <img src="{{ url('storage/public/' . $enginner->path) }}" alt="{{ $enginner->name }}" class="engineer-image">
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
        <img src="{{ url('storage/public/' . $name->path) }}" alt="{{ $name->name }}" class="cards-image">
        <h3 class="cards-title">{{ $name->name }}</h3>
        <a href="{{ route('enginners.detail', $name->id) }}">
            <button class="cards-button">View Profile</button>
        </a>
    </div>
    @endforeach
</div>

@endsection
