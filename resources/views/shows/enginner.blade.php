@extends('layout.header')

@section('content')
<link rel="stylesheet" href="{{ asset('css/engineers.css') }}">

<div class="engineer-container">
    <h1>Engineers</h1>
    <a href="{{ route('enginners.create') }}" class="add-button">Add New Engineer</a>

    <div class="engineer-grid">
        @foreach ($enginner as $enginners)
            <div class="engineer-card">
            <img src="{{ url('storage/public/' . $enginners->path) }}" alt="{{ $enginners->name }}" class="engineer-image">
                <h3>{{ $enginners->name }}</h3>
           

                <div class="action-buttons">
                    <a href="{{ route('enginners.edit', $enginners->id) }}" class="edit-button">Edit</a>
                    <form action="{{ route('enginners.destroy', $enginners->id) }}" method="POST" class="delete-form">
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
<style>
    /* General body styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f9f9fc;
    margin: 0;
    padding: 0;
}

/* Container styling */
.engineer-container {
    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
    text-align: center;
}

/* Title styling */
.engineer-container h1 {
    font-size: 28px;
    margin-bottom: 20px;
    color: #333333;
}

/* Add button styling */
.add-button {
    display: inline-block;
    margin-bottom: 20px;
    padding: 10px 15px;
    background-color: #007bff;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-size: 16px;
}

.add-button:hover {
    background-color: #0056b3;
}

/* Grid layout */
.engineer-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    justify-content: center;
}

/* Engineer card styling */
.engineer-card {
    background: white;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.engineer-card:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
}

/* Engineer image */
.engineer-image {
    width: 100%;
    height: 150px;
    object-fit: cover;
    border-radius: 8px;
    margin-bottom: 10px;
}

/* Action buttons */
.action-buttons {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-top: 10px;
}

.edit-button,
.delete-button {
    padding: 8px 12px;
    border-radius: 5px;
    font-size: 14px;
    text-decoration: none;
    color: white;
    border: none;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 90px; /* Set consistent width */
    height: 36px; /* Set consistent height */
    box-sizing: border-box; /* Ensure padding is considered within dimensions */
}

.edit-button {
    background-color: #007bff;
}

.edit-button:hover {
    background-color: #0056b3;
}

.delete-button {
    background-color: #dc3545;
}

.delete-button:hover {
    background-color: #c82333;
}

</style>
