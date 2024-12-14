@extends('header')

@section('content')
<link rel="stylesheet"  href="{{ asset('css/shows/tools.css') }}">
<h1> <a href="Tool">Add Tools</h1></a>


<div class="tools-container">
    @foreach($tools as $tool)
        <div class="tool-card">
        <img src="{{ asset('storage/public/' . $tool->path) }}" alt="Project Image" class="tool-image">
            <h2>{{ $tool->name }}</h2>
            <p>Price: {{ $tool->price }}</p>
            <a href="{{ route('tools.detail', $tool->id) }}" class="edit-button">detail</a>
                
            
            <div class="action-buttons">
                <a href="{{ route('tools.edit', $tool->id) }}" class="edit-button">Edit</a>
                
                <form action="{{ route('tools.delete', $tool->id) }}" method="POST" class="delete-form">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-button">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection

