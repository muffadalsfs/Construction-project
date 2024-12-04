@extends('header')

@section('content')
<link rel="stylesheet" href="{{ asset('css/logoshow.css') }}">
<link rel="stylesheet" href="{{ asset('css/element/card.css') }}">


<div class="image-container">
    <img src="{{ asset('Images/c.webp') }}" alt="Service Image" class="top-image">
    <h1 class="image-title">Team Gallery</h1>
 
</div>




<div class="engineer-container">
    <h3 class="section-title">Engineers</h3>
    <div class="engineer-grid">
        @foreach($enginner as $eg)
            <div class="engineer-card">
                <div class="engineer-img">
                    <img src="{{ url('storage/public/' . $eg->path) }}" alt="{{ $eg->name }}">
                    <div class="overlay">
                        <p class="engineer-name">{{ $eg->name }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


@endsection


