@extends('layout.header')

@section('content')
<link rel="stylesheet" href="{{ asset('css/logoshow.css') }}">
<link rel="stylesheet" href="{{asset('css/shows/services.css')}}">
<div class="image-container">
    <img src="{{ asset('Images/c.webp') }}" alt="Service Image" class="top-image">
    <h1 class="image-title"> Archives: Services</h1>
 
</div>

<div class="service-container">
    @foreach($service as $serv)
    <div class="service-card">
        <div class="image-wrapper">
            <img src="{{ asset('storage/public/' . $serv->path) }}" alt="Service Image" class="service-image">
        </div>
        <div class="service-content">
        <a href="{{ route('detailservice', $serv->id) }}"><h3 class="service-title">{{ $serv->name }}</h3></a>

            <p class="limited-content">{{ \Illuminate\Support\Str::limit($serv->content, 100) }}</p>

        </div>
    </div>
    @endforeach
</div>
@endsection