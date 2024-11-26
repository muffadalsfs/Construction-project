@extends('layout.header')

@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<style>/* General Styling for Admin Home Page */
.home-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.text-center {
    text-align: center;
    font-size: 2rem;
    color: #333;
}

/* Admin Buttons Section */
.admin-buttons-container {
    display: flex;
    justify-content: space-around;
    margin-top: 30px;
}

.admin-section {
    width: 30%;
    padding: 20px;
    background-color: #f8f9fa;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.admin-button {
    display: inline-block;
    margin: 10px 0;
    padding: 10px 20px;
    font-size: 16px;
    color: white;
    background-color: #007bff;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s;
}

.admin-button:hover {
    background-color: #0056b3;
}

/* Responsive Design */
@media (max-width: 768px) {
    .admin-buttons-container {
        flex-direction: column;
        align-items: center;
    }

    .admin-section {
        width: 80%;
        margin-bottom: 20px;
    }
}
</style>
<div class="home-container">
    <h1 class="text-center">Welcome, SuperAdmin</h1>
    
    <div class="admin-buttons-container">
        <!-- Blog Section -->
        <div class="admin-section">
            <h2>Manage Blogs</h2>
            <a href="{{ route('blog.index') }}" class="admin-button">Show All Blogs</a>
            <a href="{{ route('blog.create') }}" class="admin-button">Create New Blog</a>
        </div>

        <!-- Engineer Section -->
        <div class="admin-section">
            <h2>Manage Engineers</h2>
            <a href="{{ route('engineer.index') }}" class="admin-button">Show All Engineers</a>
            <a href="{{ route('engineer.create') }}" class="admin-button">Add New Engineer</a>
        </div>

        <!-- Project Section -->
        <div class="admin-section">
            <h2>Manage Projects</h2>
            <a href="{{ route('project.index') }}" class="admin-button">Show All Projects</a>
            <a href="{{ route('project.create') }}" class="admin-button">Add New Project</a>
        </div>
    </div>
</div>

@endsection
