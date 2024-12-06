<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/header.css')}}">
  <title>Responsive Header</title>
</head>
<body>


@guest


  <header class="header">

    <div class="logo">
    <img src="{{ asset('Images/logo-dark.png') }}" alt="Logo" />
    </div>
    <nav class="nav">
      <ul class="nav-links">
        <li><a href="/">Home</a></li>
        <li><a href="about">About</a></li>
        <li class="dropdown">
          <a href="{{route('serviceshow')}}">Service</a>
          <ul class="dropdown-menu">
            <li> <a href="service" >Add New </a></li>
            <li><a href="{{route('singleservice')}}">Single service</a></li>
          </ul>
        </li>
        <li class="dropdown">
        <a href="{{route('sp')}}">Project</a>
          <ul class="dropdown-menu">
            <li> <a href="project">Add New </a></li>
            <li> <a href="{{route('singlepage')}}">Single Project</a></li>
          </ul>
        </li>
        <li class="dropdown">
        <a href="{{route('sp')}}">Element</a>
          <ul class="dropdown-menu">
            <li> <a href="{{route('element')}}">Project Gallery</a></li>
            <li> <a href="{{route('card')}}">Team gallery</a></li>
            <li>  <a href="all">Blog Gallery </a></li>
            <li> <a href="{{route('elementservice')}}">Service gallery</a></li>
          </ul>
        </li>
        <li class="dropdown">
        <a href="{{route('homeblog')}}">Blog</a>
          <ul class="dropdown-menu">
            <li><a href="blog">Add new</a></li>
            <li> <a href="{{route('singleblog')}}">Single Blog</a></li>
          </ul>
        </li>
        <li><a href="{{ url('login') }}">Login</a></li>
        <a href="{{ url('register') }}">Register</a>
      </ul>
    
      <div class="search">
        <input type="text" placeholder="Search..." />
      </div>
      <div class="profile-logo">
      <img src="{{ asset('Images/shop.webp') }}" alt="Shop Icon" />
      </div>
    </nav>
    <div class="hamburger">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </div>

   @else 
   <header class="header">
 
 <div class="logo">
 <img src="{{ asset('Images/logo-dark.png') }}" alt="Logo" />
 </div>
 <nav class="nav">
   <ul class="nav-links">
     <li><a href="/">Home</a></li>
     <li><a href="about">About</a></li>
     <li class="dropdown">
       <a href="{{route('serviceshow')}}">Service</a>
       <ul class="dropdown-menu">
         <li> <a href="service">Add New </a></li>
         <li><a href="{{route('singleservice')}}">Single service</a></li>
       </ul>
     </li>
     <li class="dropdown">
     <a href="{{route('sp')}}">Project</a>
       <ul class="dropdown-menu">
         <li> <a href="project">Add New </a></li>
         <li> <a href="{{route('singlepage')}}">Single Project</a></li>
       </ul>
     </li>
     <li class="dropdown">
     <a href="{{route('sp')}}">Element</a>
       <ul class="dropdown-menu">
         <li> <a href="{{route('element')}}">Project Gallery</a></li>
         <li> <a href="{{route('card')}}">Team gallery</a></li>
         <li>  <a href="all">Blog Gallery </a></li>
         <li> <a href="{{route('elementservice')}}">Service gallery</a></li>
       </ul>
     </li>
     <li class="dropdown">
     <a href="{{route('homeblog')}}">Blog</a>
       <ul class="dropdown-menu">
         <li><a href="blog">Add new</a></li>
         <li> <a href="{{route('singleblog')}}">Single Blog</a></li>
       </ul>
     </li>
     <a href="logout">logout</a>
   </ul>
 
   <div class="search">
     <input type="text" placeholder="Search..." />
   </div>
   <div class="profile-logo">
   <img src="{{ asset('Images/shop.webp') }}" alt="Shop Icon" />
   </div>
 </nav>
 
<div class="hamburger">
  <div class="line"></div>
  <div class="line"></div>
  <div class="line"></div>
</div>

  
   @endguest
  </header>
  @yield('content')
  <footer>
    <div class="footer-section">
        <div class="footer-column">
            <p>About Company</p>
            <ul>
                <li>Vestibulum ante ipsum primis in faucibus </li>
                <li>orci luctus et ultrices posuere cubilia Curae; </li>
                <li>posuere cubilia Curae ante ipsum primis in </li>
                <li>faucibus</li>
               
            </ul>
        </div>
        <div class="footer-column">
            <p>Industries</p>
            <ul>
                <li>Industrial Infrastructure</li>
                <li>Wireling Machinery</li>
                <li>Road Repair</li>
                <li>Engine Replacement</li>
                <li>Stainless Bridge Building</li>
                <li>Commercial Building</li>
            </ul>
        </div>
        <div class="footer-column">
            <p>Recent Posts</p>
            <ul>
                <li>Use of Drone in Construction - </li>
                    <li>April 17, 2019</li>
                <li>How to Use Safety Signs - </li>
                <li>April 17, 2019</li>
                <li>Biomimetics As a Tool For New - </li>
                <li>April 17, 2019</li>
            </ul>
        </div>
        <div class="footer-column">
            <p>Services</p>
            <ul>
                <li>Design and Build</li>
                <li>Road Construction</li>
                <li>Power & Energy</li>
                <li>Construction Planning</li>
                <li>Aero Space Services</li>
                <li>Site Inspection</li>
            </ul>
        </div>
        <span > © Copyright Koncrete 2020. Designed and Developed by RadiusTheme</span>
    </div>
    
</footer>
  <script src="script.js"></script>
</body>
</html>

<script src="{{asset('js/hamer.js')}}"></script>