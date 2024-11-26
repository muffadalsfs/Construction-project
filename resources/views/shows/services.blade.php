@extends('layout.header')

@section('content')
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
<style>
    /* Services Section */
.services-section {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); /* Responsive grid layout */
    gap: 20px; /* Space between cards */
    padding: 20px;
    justify-items: center; /* Center the cards */
}

/* Individual Service Card */
.service-card {
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    padding: 15px;
    width: 100%;
    max-width: 350px;
    transition: transform 0.3s ease-in-out;
}

/* Service Image */
.service-image {
    width: 100%;
    height: 200px;
    object-fit: cover; /* Ensures image fits and maintains aspect ratio */
    border-radius: 4px;
}

/* Title Styling */
.title {
    font-size: 18px;
    margin: 15px 0;
    color: #333;
    font-weight: bold;
}

/* Action Buttons */
.actions {
    display: flex;
    justify-content: space-between;
    gap: 10px;
    margin-top: 10px;
}

.actions a {
    text-decoration: none;
    padding: 8px 15px;
    border-radius: 4px;
    font-size: 14px;
    transition: background-color 0.3s ease;
}

/* Button Colors */
.delete-button {
    background: #ff4d4d;
    color: #fff;
}

.delete-button:hover {
    background: #e60000;
}

.edit-button {
    background: #ffcc00;
    color: #333;
}

.edit-button:hover {
    background: #e6b800;
}

.detail-button {
    background: #007bff;
    color: #fff;
}

.detail-button:hover {
    background: #0056b3;
}

/* Responsive Design */
@media (max-width: 768px) {
    .services-section {
        grid-template-columns: 1fr; /* Stack cards on smaller screens */
    }
}

</style>