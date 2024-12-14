@extends('header')

@section('content')

<link rel="stylesheet" href="{{ asset('css/logoshow.css') }}">

<div class="image-container">
    <img src="{{ asset('Images/banner2.jpg') }}" alt="Service Image">
    <h1 class="main-title">{{ $enginner->name }}</h1>
</div>

<div class="engineer-details">
    <img src="{{ url('storage/public/' . $enginner->path) }}" alt="{{ $enginner->name }}" class="engineer-image">
    <div class="engineer-info">
        <h2>{{ $enginner->name }}</h2>
        <p class="paragraph">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, 
            pulvinar dapibus leo. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
        </p>
    </div>
</div>

<div class="related-engineers">
    @foreach($engi as $name)
    <div class="cards">
        <img src="{{ url('storage/public/' . $name->path) }}" alt="{{ $name->name }}" class="cards-image">
        <h3 class="cards-title">{{ $name->name }}</h3>
        <a href="{{ route('enginners.detail', $name->id) }}">
            <button class="cards-button">View Profile</button>
        </a>
    </div>
    @endforeach
</div>

@endsection
<style>
    /* Engineer Details */
.engineer-details {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 20px auto;
    padding: 20px;
    max-width: 1200px;
 
}

/* Engineer Image */
.engineer-image {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    margin-right: 20px;
    object-fit: cover;
}

/* Engineer Info */
.engineer-info {
    display: flex;
    flex-direction: column;
    max-width: 600px;
}

.engineer-info h2 {
    font-size: 1.8rem;
    color: #333;
    margin-bottom: 10px;
    text-align: left; /* Aligns the name text to the left */
}

.paragraph {
    font-size: 1rem;
    color: #555;
    line-height: 1.6;
    margin-top: 10px;
    text-align: left; /* Aligns the paragraph text to the left */
}
.related-engineers {
    display: flex;
    flex-wrap: wrap; /* Enables wrapping to the next row for multiple cards */
    justify-content: center; /* Centers the cards */
    gap: 20px; /* Space between cards */
    padding: 20px;
    margin-top: 20px;
    background: #f1f1f1; /* Optional background color */
}

.cards {
    width: 250px;
    border: 1px solid #ddd;
    border-radius: 10px;
    text-align: center;
    padding: 15px;
    background: #fff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.cards-image {
    width: 100%;
    height: 150px;
    object-fit: cover;
    border-radius: 10px;
    margin-bottom: 10px;
}

.cards-title {
    font-size: 1.2rem;
    margin: 10px 0;
    color: #333;
}

.cards-button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.cards-button:hover {
    background-color: #0056b3;
}

</style>