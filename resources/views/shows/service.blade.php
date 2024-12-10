@extends('header')

@section('content')
<link rel="stylesheet" href="{{asset('css/shows/services.css')}}">
<div class="service-container">
    @foreach($service as $serv)
    <div class="service-card">f
        <div class="image-wrapper">
            <img src="{{ asset('storage/public/' . $serv->path) }}" alt="Service Image" class="service-image">
        </div>
        <div class="service-content">
            <h3 class="service-title">{{ $serv->name }}</h3>
            <p class="limited-content">{{ \Illuminate\Support\Str::limit($serv->content, 100) }}</p>
            <div class="service-actions">
                <a href="{{ route('detailservice', $serv->id) }}" class="detail-button">View Details</a>
                <a href="{{ route('editservice', $serv->id) }}" class="edit-button">Edit</a>
                <form action="{{ route('deleteservice', $serv->id) }}" method="POST" class="delete-form" onsubmit="return confirm('Are you sure you want to delete this service?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-button">Delete</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
<style>
   


</style>