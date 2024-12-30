@extends('header')

@section('content')
<link rel="stylesheet" href="{{ asset('css/logoshow.css') }}">
<link rel="stylesheet" href="{{ asset('css/element/card.css') }}">


<div class="image-container">
    <img src="{{ asset('Images/banner2.jpg') }}" alt="Service Image" class="top-image">
    <h1 class="image-title">Team Gallery</h1>
 
</div>



@if($enginner->isNotEmpty())
<div class="engineer-container">
    <h3 class="section-title">Engineers</h3>
    <div class="engineer-grid">
        @foreach($enginner as $eg)
            <div class="engineer-card">
                <div class="engineer-img">
                <img src="{{ $eg->path ? (file_exists(public_path('storage/public/' . $eg->path)) ? url('storage/public/' . $eg->path) : asset('Images/12.jpg')) : asset('Images/12.jpg') }}" alt="{{ $eg->title }}">

                    <div class="overlay">
                    <a href="{{ route('enginners.detail', $eg->id) }}"><p class="engineer-name">{{ $eg->name }}</p></a>
                    </div>
                    
                </div>
            </div>
        @endforeach
        @endif
    </div>
</div>


@endsection


