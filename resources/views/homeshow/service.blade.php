@extends('header')

@section('content')
<link rel="stylesheet" href="{{ asset('css/logoshow.css') }}">
<link rel="stylesheet" href="{{asset('css/shows/services.css')}}">
<div class="image-container">
    <img src="{{ asset('Images/banner2.jpg') }}" alt="Service Image" class="top-image">
    <h1 class="image-title"> Archives: Services</h1>
 
</div>d

<h1 class="services-heading">Our Services</h1>
    <div class="services-container">
        @foreach($service as $serv)
        <a href="{{ route('detailservice', $serv->id) }}">
        <div class="service-card">
            <div class="image-wrapper">
              <img src="{{ asset('storage/public/' . $serv->path) }}" alt="Service Image" class="service-image">
            </div>
            <div class="service-content">
              
                    <h3 class="service-title">{{ $serv->name }}</h3>
                </a>
                <p class="limited-content">{{ \Illuminate\Support\Str::limit($serv->content, 100) }}</p>
            </div>
        </div>
        @endforeach
    </div>
   
</div>
@endsection
