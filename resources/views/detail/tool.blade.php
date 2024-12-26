@extends('header')

@section('content')

<link rel="stylesheet" href="{{ asset('css/logoshow.css') }}">
<link rel="stylesheet" href="{{ asset('css/detail/tool.css') }}">
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
        <p>This is the text shown for the Add button. This paragraph may contain a longer description that will automatically adjust its container size to accommodate the content.</p>
    </div>
    <div id="newContent" class="hidden-content">
        <p>This is the text shown for the New button. This paragraph will also expand the container as needed based on its length.</p>
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
            <a href="{{ route('tools.detail', $to->id) }}"> <button class="product-button">Quick Here</button></a>
        </div>
    </div>
    @endforeach
</div>






 
@endsection

<script src="{{asset('js/detail/tool.js')}}"></script>