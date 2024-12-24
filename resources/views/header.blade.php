<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Header and Footer</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/header.css')}}">
</head>
<body>
  @guest
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
    
    <a  href="/"> <img src="{{ asset('Images/logo-dark.png') }}" alt="Logo" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav navbar-nav-center">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{route('serviceshow')}}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" >
              Services
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{route('serviceshow')}}">Show all service </a></li>
              <li><a class="dropdown-item" href="service">ADD NEW </a></li>
              <li><a class="dropdown-item" href="{{route('singleservice')}}">Single service</a></li>
             
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Project
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{route('sp')}}">Show all </a></li>

              <li><a class="dropdown-item" href="project">ADD new </a></li>
              <li><a class="dropdown-item" href="{{route('singlepage')}}">SINGLE PROJECT</a></li>
             
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Element
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{route('element')}}">Project Gallery </a></li>

              <li><a class="dropdown-item" href="{{route('card')}}">Team gallery</a></li>
              <li><a class="dropdown-item" href="all">Blog Gallery</a></li>
              <li><a class="dropdown-item" href="{{route('elementservice')}}">Service gallery</a></li>
             
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Blog
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{route('homeblog')}}">Show all </a></li>

              <li><a class="dropdown-item" href="blog">Add new</a></li>
              <li><a class="dropdown-item" href="{{route('singleblog')}}">Single Blog</a></li>
             
             
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('login') }}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('register') }}">Register</a>
          </li>
        
      </li>
      <div class="icon-links">
        <a class="icon-link" href="#search"><i class="fas fa-search"></i></a>
        <div class="wrap">
        <div class="vLine"></div>
    </div>
        <a class="icon-link" href="#cart"><i class="fas fa-shopping-cart"></i></a>
      </div>
    </div>
        </ul>

        
      </div>
    </div>
  </nav>
  @else 
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
    
    <img src="{{ asset('Images/logo-dark.png') }}" alt="Logo" />
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav navbar-nav-center">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{route('serviceshow')}}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" >
              Services
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{route('serviceshow')}}">Show all service </a></li>
              <li><a class="dropdown-item" href="service">ADD NEW </a></li>
              <li><a class="dropdown-item" href="{{route('singleservice')}}">Single service</a></li>
             
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Project
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{route('sp')}}">Show all </a></li>

              <li><a class="dropdown-item" href="project">ADD new </a></li>
              <li><a class="dropdown-item" href="{{route('singlepage')}}">SINGLE PROJECT</a></li>
             
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Element
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{route('element')}}">Project Gallery </a></li>

              <li><a class="dropdown-item" href="{{route('card')}}">Team gallery</a></li>
              <li><a class="dropdown-item" href="all">Blog Gallery</a></li>
              <li><a class="dropdown-item" href="{{route('elementservice')}}">Service gallery</a></li>
             
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Blog
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{route('homeblog')}}">Show all </a></li>

              <li><a class="dropdown-item" href="blog">Add new</a></li>
              <li><a class="dropdown-item" href="{{route('singleblog')}}">Single Blog</a></li>
             
             
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('logout') }}">Logout</a>
          </li>
          
        
      </li>
      <div class="icon-links">
        <a class="icon-link" href="#search"><i class="fas fa-search"></i></a>
        <a class="icon-link" href="#cart"><i class="fas fa-shopping-cart"></i></a>
      </div>
    </div>
        </ul>

        
      </div>
    </div>
  </nav>
  @endguest
  @yield('content')
 
  <footer class="footer-container">
  <div class="footer-content">
    <!-- About Company Section -->
    <div class="footer-section">
      <h1>About Company</h1>
      <ul>
        <p>Vestibulum ante ipsum primis in faucibus </p>
        <p>orci luctus et ultrices posuere cubilia Curae; </p>
        <p>posuere cubilia Curae ante ipsum primis in </p>
        <i class="fa fa-facebook circle"></i>
        <i class="fa fa-twitter circle"></i>

      </ul>
    </div>

    <!-- Industries Section -->
    <div class="footer-section">
      <h1>Industries</h1>
      <ul>
 
      <li>&#11166 Wireling Machinery</li>
        <li>&#11166 Wireling Machinery</li>
        <li>&#11166 Road Repair</li>
        <li>&#11166 Engine Replacement</li>
        <li>&#11166 Stainless Bridge Building</li>
        <li>&#11166 Commercial Building</li>
      </ul>
    </div>

    <!-- Additional Industries Section -->
    <div class="footer-section">
      <h1>Recent Posts</h1>
      <ul>
        <li>Use of Drone in Construction</li>
        <p>April 17, 2019</p>
        <div class="line-1"></div>
        <li>How to Use Safety Signs</li>
        <p>April 17, 2019</p>
        <div class="line-1"></div>

        <li>Biomimetics As a Tool For New</li>
        <p>April 17, 2019</p>
        <div class="line-1"></div>

      </ul>
    </div>
    <div class="footer-section">
      <h1>Services</h1>
      <ul>
        <li> &#11166   Design and Build Infrastructure</li>
        <li> &#11166   Road Constructionachinery</li>
        <li> &#11166   Power & Energyr</li>
        <li> &#11166   Construction Planninglacement</li>
        <li> &#11166   Aero Space ServicesBridge Building</li>
        <li> &#11166   Site Inspection Building</li>
      </ul>
    </div>
    <!-- Centered Span -->

  </div>
  <span> © Copyright Koncrete 2020. Designed and Developed by RadiusTheme</span>
</footer>
  

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
