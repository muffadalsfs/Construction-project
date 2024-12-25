@extends('header')

@section('content')

<link rel="stylesheet" href="{{ asset('css/logoshow.css') }}">

<div class="image-container">
    <img src="{{ asset('Images/banner2.jpg') }}" alt="Service Image">
    <h1 class="main-title">{{ $tool->name }}</h1>
</div>
<div class="tool-details">
    <!-- Left Section: Images -->
    <div class="tool-image-box">
        <!-- Main Image -->
        <img src="{{ url('storage/public/' . $tool->path) }}" alt="{{ $tool->name }}" class="engineer-image" width="300" height="300">
        <!-- Additional Images -->
        <div class="additional-images">
            <img class="images" src="https://radiustheme.com/demo/wordpress/themes/koncrete/wp-content/uploads/2019/05/product_5.jpg" alt="image">
            <img class="images" src="https://radiustheme.com/demo/wordpress/themes/koncrete/wp-content/uploads/2019/05/product_5.jpg" alt="image">
            <img class="images" src="https://radiustheme.com/demo/wordpress/themes/koncrete/wp-content/uploads/2019/05/product_5.jpg" alt="image">
        </div>
    </div>

    <!-- Right Section: Details -->
    <div class="tool-info">
        <h1 class="tool-description">{{ $tool->name }}</h1>
        <p class="product-rating"> ★★★★☆ (1 customer)</p>
        <h2 class="tool-price">{{ $tool->price }}</h2>
        <hr class="new1">
        <p class="paragraph">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, 
            pulvinar dapibus leo. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
        </p>
        <hr class="new1">
        <div class="div1">
    <button class="action-buttons">Action</button>
</div>

    </div>
</div>
<div class="button-container">
    <div class="button-wrapper">
        <button id="addButton" class="action-button">Add</button>
        <button id="newButton" class="action-button">New</button>
    </div>
    <div id="addContent" class="hidden-content">
        <p>This is the text shown for the Add button.</p>
    </div>
    <div id="newContent" class="hidden-content">
        <p>This is the text shown for the New button.</p>
    </div>
</div>


<h1 class="related-products-title">Related Products</h1>
<div class="related-products-container">
    @foreach($t as $to)
    <div class="product-card">
        <img src="{{ url('storage/public/' . $to->path) }}" alt="{{ $to->name }}" class="product-image">
        <div class="product-info">
            <h2 class="product-name">{{ $to->name }}</h2>
            <p class="product-rating"> ★★★★☆</p>
            <p class="product-price">{{ $to->price }}</p>
            <button class="product-button">Quick Here</button>
        </div>
    </div>
    @endforeach
</div>






 
@endsection


<style>
.tool-details {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 20px;
    padding: 20px;

    border-radius: 10px;
    max-width: 1200px;
    margin: 20px auto;
}

.tool-image-box {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
}

.engineer-image {
    border: 2px solid #ccc;
    border-radius: 10px;
    margin-bottom: 15px;
    display: block;
  width: 100%;
  height: auto;
  box-shadow: none;
}

.additional-images {
    display: flex;
    justify-content: space-around;
    width: 100%;
    gap: 10px;
}

.images {
    width: 100px;
    height: auto;
    border: 1px solid #ddd;
    border-radius: 5px;
    cursor: pointer;
}

.tool-info {
    width: 55%;
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.tool-description {
    font-size: 24px;
    font-weight: bold;
    margin: 0;
}

.tool-price {
    font-size: 20px;
    color: #28a745;
    margin: 0;
}

.new1 {
    border: 0;
    border-top: 1px solid #ccc;
    margin: 10px 0;
}

.paragraph {
    font-size: 16px;
    color: #555;
    line-height: 1.6;
}

.div1 {
    display: flex;
    justify-content: flex-start; 
    margin-top: 10px; 
}

.action-buttons {
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.action-button:hover {
    background-color: #0056b3;
}
.action-button {
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.action-button:hover {
    background-color: #0056b3;
}


.button-container {
    display: flex;
    flex-direction: column; 
    justify-content: center;
    align-items: center; 
    border: 3px solid black; 
    padding: 20px ;
    margin: 20px auto; 
    width: fit-content; 
    border-radius: 10px; 
    background-color: #f9f9f9; 
}

.button-wrapper {
    display: flex; 
    gap: 10px; 
}

.hidden-content {
    display: none; 
    margin-top: 10px; 
    font-size: 16px;
    color: #555;
    border: 1px solid #ddd; 
    padding: 10px;
    border-radius: 5px;
    text-align: center; 
    background-color: #fff; 
    width: 100%; 
}


.related-products-title {
    text-align: center;
 
    color: #222222;

  font-size: 30px;
  line-height: 1.4;
  margin-bottom: 0;
}

.related-products-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center; 
    padding: 20px;
}

.product-card {
    display: flex;
    flex-direction: column; 
    align-items: center; 
    border-radius: 10px;
    padding: 15px;
    width: 250px;
    background-color: #f9f9f9; 
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
    transition: transform 0.3s ease; 
}

.product-card:hover {
    transform: scale(1.05); 
}

.product-image {
    width: 100%; 
    height: 200px; 
    object-fit: cover; 
    border-radius: 5px;
    margin-bottom: 15px;
    transition: transform 0.3s ease; 
}

.product-card:hover .product-image {
    transform: scale(1.1); 
}

.product-info {
    text-align: center; 
}

.product-name {
   
    font-weight: bold;
    font-size: 22px;
    color: #000000;
    margin-bottom: 10px;
}

.product-rating {
   
    color: #ffc92b;
    margin-bottom: 10px;
    font-size: 20px;
  line-height: 1.5;
}

.product-price {
    font-size: 20px;
    line-height: 1.5;
    color: #ffc92b;
    margin-bottom: 15px;
}

.product-button {
  
    margin-top: 0;
  padding: 8px 0px;
  font-size: 28px;
    background-color: #ffc92b;
    color:#000000;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease; 
}

.product-button:hover {
    color: white;
}
.product-name:hover {
    
    color: gold; 
}


</style>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    // Add click event to buttons
    document.getElementById("addButton").addEventListener("click", function () {
        document.getElementById("addContent").style.display = "block"; // Show Add content
        document.getElementById("newContent").style.display = "none"; // Hide New content
    });

    document.getElementById("newButton").addEventListener("click", function () {
        document.getElementById("newContent").style.display = "block"; // Show New content
        document.getElementById("addContent").style.display = "none"; // Hide Add content
    });
});


</script>