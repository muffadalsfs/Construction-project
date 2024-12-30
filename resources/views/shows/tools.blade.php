@extends('header')

@section('content')
<link rel="stylesheet"  href="{{ asset('css/shows/tools.css') }}">
<h1> <a href="Tool">Add Tools</h1></a>


<div class="tools-container">
    @foreach($tools as $tool)
        <div class="tool-card">
        <img src="{{ $tool->path ? (file_exists(public_path('storage/public/' . $tool->path)) ? url('storage/public/' . $tool->path) : asset('Images/t6.jpg')) : asset('Images/t6.jpg') }}" alt="{{ $tool->title }}"
        class="tool-image">
       <a href="{{ route('tools.detail', $tool->id) }}">  <h2>{{ $tool->name }}</h2>
            <p>Price: {{ $tool->price }}</p>
</a>
                
@auth 
@if (Auth::id() === $tool->user_id)
            <div class="action-buttons">
                <a href="{{ route('tools.edit', $tool->id) }}" class="edit-button">Edit</a>
                
                <form action="{{ route('tools.delete', $tool->id) }}" method="POST" class="delete-form">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-button">Delete</button>
                </form>
            </div>
            @endif
            @endauth
        </div>
    @endforeach
</div>
@endsection

