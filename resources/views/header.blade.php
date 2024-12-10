<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Header and Footer</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom styles for the navbar */
    .navbar {
      background-color: white; /* Blue background */
    }

    .navbar-brand {
      color: black; /* White text for logo */
      font-weight: bold;
      margin-left: 10px; /* Adjust the margin as needed */
    }

    .navbar-nav .nav-link {
      color: black; /* White text for nav links */
      font-size: 20px;
  font-family: Roboto;
  font-weight: 500;
  line-height: 26px;
  text-transform: uppercase;
  font-style: normal;
      transition: color 0.3s ease, background-color 0.3s ease; /* Smooth transition for hover */
    }

    .navbar-nav .nav-link:hover {
      color: gold; /* White text */
    }

    .dropdown-menu {
      background-color: white; /* Same as navbar background */
      color:black;
      font-size:23px;
      border: none; /* Remove border */
    }

    .dropdown-item {
      color: black; /* White text for dropdown items */
      transition: color 0.3s ease, background-color 0.3s ease; /* Smooth transition for hover */
    }

    .dropdown-item:hover {
      background-color: gold; /* Darker blue on hover */
      color: #ffffff; /* White text */
    }

    .navbar-nav-center {
      margin: auto; /* Center navigation links */
    }

    /* Custom styles for the footer */
    .footer {
      background-color: black; /* Blue background */
      color: white; /* White text */
      padding: 10px 0; /* Padding for footer */
      
    }

    .footer a {
      color: white; /* White text for links */
      text-decoration: none; /* Remove underline */
    
      transition: color 0.3s ease; /* Smooth transition for hover */
    }

    .footer a:hover {
      color: #ffdd57; /* Gold text on hover */
    }
    h5{
      text-decoration: underline;
      text-decoration-color: gold;
      margin:12px;
      font-size: 30px;
    }
  </style>
</head>
<body>
  <!-- Header Section -->
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
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
        </ul>
      </div>
    </div>
  </nav>
  @yield('content')

  <!-- Footer Section -->
  <footer class="footer mt-auto">
    <div class="container">
      <div class="row">
        <div class="col-md-4 text-center">
          <h5>About Us</h5>
          <ul class="list-unstyled">
            <li><a href="#">Vestibulum ante ipsum primis in faucibus </a></li>
            <li><a href="#">orci luctus et ultrices posuere cubilia Curae; </a></li>
            <li><a href="#">posuere cubilia Curae ante ipsum primis in </a></li>
   
          </ul>
        </div>
        <div class="col-md-4 text-center">
          <h5>Industries</h5>
          <ul class="list-unstyled">
            <li><a href="#">Industrial Infrastructure</a></li>
            <li><a href="#">Wireling Machinery</a></li>
            <li><a href="#">Road Repair</a></li>
            <li><a href="#">Engine Replacement</a></li>
          </ul>
        </div>
        <div class="col-md-4 text-center">
          <h5>Recent Posts</h5>
          <ul class="list-unstyled">
            <li><a href="#">Use of Drone in Construction</a></li>
            <li><a href="#">How to Use Safety Signs</a></li>
            <li><a href="#">Biomimetics As a Tool For New</a></li>
          
          </ul>
        </div>
        <div class="col-md-4 text-center">
          <h5>Services</h5>
          <ul class="list-unstyled">
            <li><a href="#">Design and Build</a></li>
            <li><a href="#">Road Construction</a></li>
          
          
          </ul>
        </div>
        
      </div>
      <div class="row mt-3">
        <div class="col text-center">
          <p>&copy; 2024 Your Company. All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
