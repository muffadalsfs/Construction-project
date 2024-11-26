@extends('layout.header')

@section('content')
<link rel="stylesheet"  href="{{ asset('css/shows/services.css') }}">
<div class="services-section">
    @foreach($blogs as $blog)
    <div class="service-card">
        <img src="{{ url('storage/public/' . $blog->path) }}" alt="{{ $blog->title }}" class="service-image">
        <p class="title">{{ $blog->title }}</p>
        <div class="actions">
            <a href="{{ url('delete', $blog->id) }}" class="delete-button">Delete</a>
            <a href="{{ url('edit', $blog->id) }}" class="edit-button">Edit</a>
            <a href="{{ url('detail', $blog->id) }}" class="detail-button">Detail</a>
        </div>
    </div>
    @endforeach
</div>
@endsection
