@extends('header')

@section('content')
<link rel="stylesheet" href="{{ asset('css/engineers.css') }}">
<link rel="stylesheet" href="{{ asset('css/shows/enginner.css') }}">
<div class="engineer-container">
    <h1>Engineers</h1>
    <a href="{{ route('enginners.create') }}" class="add-button">Add New Engineer</a>

    <div class="engineer-grid">
        @foreach ($enginner as $enginners)
            <div class="engineer-card">
            <img src="{{ url('storage/public/' . $enginners->path) }}" alt="{{ $enginners->name }}" class="engineer-image">
                <h3>{{ $enginners->name }}</h3>
                <a href="{{ route('enginners.detail', $enginners->id) }}">View Details</a>

                <div class="action-buttons">
                    <a href="{{ route('engineers.edit', $enginners->id) }}" class="edit-button">Edit</a>
                    <form action="{{ route('engineers.destroy', $enginners->id) }}" method="POST" class="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-button">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection