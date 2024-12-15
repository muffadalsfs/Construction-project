@extends('header')

@section('content')

<link rel="stylesheet" href="{{ asset('css/logoshow.css') }}">

<div class="image-container">
    <img src="{{ asset('Images/banner2.jpg') }}" alt="Service Image">
    <h1 class="main-title">{{ $tool->name }}</h1>
</div>
<div class="engineer-details">
    <div class="engineer-image-box">
        <img src="{{ url('storage/public/' . $tool->path) }}" alt="{{ $tool->name }}" class="engineer-image">
    </div>
    <div class="engineer-info">
        <h1 class="engineer-description">Tool Details</h1>
        <h2 class="engineer-price">{{ $tool->price }}</h2>
        <p class="paragraph">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, 
            pulvinar dapibus leo. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
        </p>
        <button class="add-card-button">Add to Card</button>
    </div>
</div>
<div class="description-box">
    <h1>Descreption</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque delectus eum non iure sed tenetur, exercitationem unde sequi quia illo omnis quae adipisci ipsam est numquam harum aliquam officiis dignissimos.</p>
</div>


<h1 class="related-products-title">Related Products</h1>
<div class="related-products-container">
    @foreach($t as $to)
    <div class="product-card">
        <img src="{{ url('storage/public/' . $to->path) }}" alt="{{ $to->name }}" class="product-image">
        <div class="product-info">
            <h2 class="product-name">{{ $to->name }}</h2>
            <p class="product-price">{{ $to->price }}</p>
            <p class="product-rating">Rating: ★★★★☆</p>
            <button class="product-button">Quick Here</button>
        </div>
    </div>
    @endforeach
</div>
 
@endsection


<style>
    .engineer-details {
    display: flex;
    flex-direction: column;
    align-items: center;
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.engineer-image-box {
    text-align: center;
    margin-bottom: 20px;
}

.engineer-image {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
}

.engineer-info {
    text-align: center;
    width: 100%;
}

.engineer-description {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 10px;
}

.engineer-price {
    font-size: 20px;
    color: #2a9d8f;
    font-weight: bold;
    margin-bottom: 10px;
}

.paragraph {
    font-size: 16px;
    line-height: 1.6;
    margin-bottom: 20px;
    padding: 0 15px;
}

.add-card-button {
    background-color: #e76f51;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

.add-card-button:hover {
    background-color: #d45d42;
}

@media (min-width: 768px) {
    .engineer-details {
        flex-direction: row;
        justify-content: space-between;
        gap: 20px;
    }
    .engineer-image-box {
        flex: 1;
    }
    .engineer-info {
        flex: 2;
        text-align: left;
    }
}
/* Center the Related Products title */
/* Center the Related Products title */
.related-products-title {
    text-align: center;
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 20px;
}

/* Container for the related product cards */
.related-products-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    padding: 20px;
}

/* Individual product card styling */
.product-card {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    width: 250px;
    text-align: center;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    padding: 15px;
}

/* Product image styling with fixed size */
.product-image {
    width: 200px; /* Fixed width */
    height: 150px; /* Fixed height */
    object-fit: cover; /* Ensures the image fills the area while maintaining aspect ratio */
    margin-bottom: 10px;
    border-radius: 4px;
}

/* Product name styling */
.product-name {
    font-size: 18px;
    font-weight: bold;
    margin: 10px 0;
}

/* Product price styling */
.product-price {
    font-size: 16px;
    color: #2a9d8f;
    margin-bottom: 10px;
}

/* Product rating styling */
.product-rating {
    font-size: 14px;
    color: #555;
    margin-bottom: 15px;
}

/* Product button styling */
.product-button {
    background-color: #e76f51;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
}

.product-button:hover {
    background-color: #d45d42;
}


.description-box {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    max-width: 800px;
    margin: 20px auto; /* Center the box horizontally */
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center; /* Center text inside the box */
}

</style>