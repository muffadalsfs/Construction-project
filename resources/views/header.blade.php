<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Header</title>
  <link rel="stylesheet" href="styles.css">
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
        <span class='hellos'> © Copyright Koncrete 2020. Designed and Developed by RadiusTheme</span>
    </div>
   
</footer>
  <script src="script.js"></script>
</body>
</html>
<style>
/* General Reset */
/* General Reset */
/* General Reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
}

/* Header */
.header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 20px;
  background-color: #333;
  color: white;
  position: sticky;
  top: 0;
  z-index: 1000;
}

.header img {
  height: 40px;
}

.logo img {
  height: 40px;
  margin-left: 80px;
}

/* Center Navigation Links */
.nav {
  display: flex;
  align-items: center;
  flex: 1;
  justify-content: center;
}

.nav-links {
  display: flex;
  list-style: none;
  gap: 20px;
}

.nav-links a {
  text-decoration: none;
  color: white;
  padding: 10px 15px;
  display: block;
  position: relative;
}

/* Golden Underline Effect */
.nav-links a::after {
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  height: 2px;
  width: 0;
  background-color: gold;
  transition: width 0.3s ease-in-out;
}

.nav-links a:hover::after {
  width: 100%;
}

/* Dropdown Menu */
.dropdown {
  position: relative;
}

.dropdown-menu {
  display: none;
  position: absolute;
  top: 100%;
  right: 0;
  background-color: #444;
  list-style: none;
  padding: 0;
  margin: 0;
  border-radius: 5px;
  overflow: hidden;
}

.dropdown-menu li a {
  padding: 10px 15px;
  display: block;
  color: white;
  transition: background-color 0.3s ease;
}

.dropdown-menu li a:hover {
  background-color: gold;
  color: #333;
}

.dropdown:hover .dropdown-menu {
  display: block;
}

/* Search and Profile Logo */
.search {
  margin-right: 15px;
}

.search input {
  padding: 5px 10px;
  border-radius: 5px;
  border: none;
}

.profile-logo img {
  height: 40px;
}

/* Hamburger Menu */
.hamburger {
  display: none;
  cursor: pointer;
  flex-direction: column;
  gap: 5px;
}

.hamburger .line {
  width: 25px;
  height: 3px;
  background-color: white;
}

/* Responsive Styles for Header */
@media (max-width: 768px) {
  .nav-links,
  .search,
  .profile-logo {
    display: none;
  }

  .nav-links.active {
    display: flex;
    flex-direction: column;
    position: fixed; /* Ensures it doesn't overlap footer */
    top: 60px;
    right: 0;
    background-color: #333;
    width: 200px;
    height: calc(100vh - 60px); /* Take full viewport height below header */
    z-index: 1000; /* Ensure it stays above other elements */
    overflow-y: auto; /* Add scroll if content overflows */
  }

  .nav-links .dropdown-menu {
    position: static;
  }

  .hamburger {
    display: flex;
  }
}

/* Footer */
footer {
  background-color: #000;
  color: #fff;
  padding: 20px;
  z-index: 1;
}

.footer-section {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.footer-column {
  flex: 1;
  margin: 10px;
  min-width: 200px;
}

.footer-column p {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 10px;
  position: relative;
}

.footer-column p::after {
  content: "";
  position: absolute;
  bottom: -5px;
  left: 0;
  width: 50px;
  height: 2px;
  background-color: yellow;
}

.footer-column ul {
  list-style: none;
  padding: 0;
}

.footer-column ul li {
  margin-bottom: 10px;
  font-size: 14px;
}

footer .hellos {
  display: block;
  margin: 20px auto 0; /* Center horizontally with auto margins */
  font-size: 12px;
  text-align: center;
  color: #ccc;
  width: max-content; /* Adjust to content width */
}

/* Mobile-Responsive Styling for Footer */
@media (max-width: 768px) {
  .footer-section {
    flex-direction: column;
    align-items: center;
    text-align: center;
  }

  .footer-column {
    margin-bottom: 20px;
  }
}
footer .hellos {
  display: block;
  margin: 20px auto 0; /* Center horizontally with auto margins */
  font-size: 12px;
  text-align: center;
  color: #ccc;
  width: max-content; /* Adjust to content width */
}
++\aa
</style>
<script>
    const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');

hamburger.addEventListener('click', () => {
  navLinks.classList.toggle('active');
});

</script>