<link rel="stylesheet" href="{{asset('css/header.css')}}">
<header>
<button class="nav-toggle" onclick="toggleMenu()">☰</button> <!-- Hamburger icon -->
    <nav>
        @guest
    <a href="/" class="logo">
            <img src="{{ asset('Images/logo-dark.png') }}" alt="Logo" />
        </a>
        <div class="dropdown">
            <button class="dropbtn"><a href="/">Home</a></button>
            <div class="dropdown-content">

            </div>
        </div>
        
        <div class="dropdown">
            <button class="dropbtn"><a href="about">About</button></a>
            <div class="dropdown-content">
                <a href="#">About 1</a>
                <a href="#">About 2</a>
                <a href="#">About 3</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn"><a href="{{route('serviceshow')}}">Service</a></button>
            <div class="dropdown-content">
                <a href="service">Add new</a>
                <a href="{{route('singleservice')}}">Single service</a>
                
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn"><a href="{{route('sp')}}">Project</a></button>
            <div class="dropdown-content">
                <a href="project">Add new</a>
                <a href="{{route('singlepage')}}">Single Project</a>
                <a href="#">Project 3</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Element</button>
            <div class="dropdown-content">
                <a href="{{route('element')}}">Project Gallery</a>
                <a href="{{route('card')}}">Team gallery</a>
                <a href="all">Blog Gallery </a>
                <a href="{{route('elementservice')}}">Service gallery</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Pages</button>
            <div class="dropdown-content">
                <a href="#">404</a>
                <a href="#">Team</a>
                <a href="#">Shop</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn"><a href="{{route('homeblog')}}">Blog</a></button>
            <div class="dropdown-content">
                <a href="blog">Add new</a>
                <a href="{{route('singleblog')}}">Single Blog</a>
                
            </div>
        </div>
        <a href="{{ url('login') }}">Login</a>
        <a href="{{ url('register') }}">Register</a>

        <a href="/" class="icon">
            <img src="{{ asset('Images/serach.webp') }}" alt="Search Icon" />
        </a>
        <span class="separator"></span>
        <a href="/" class="icon">
            <img src="{{ asset('Images/shop.webp') }}" alt="Shop Icon" />
        </a>
        @else
        <a href="/" class="logo">
            <img src="{{ asset('Images/logo-dark.png') }}" alt="Logo" />
        </a>
        <div class="dropdown">
            <button class="dropbtn"><a href="/">Home</a></button>
            <div class="dropdown-content">

            </div>
        </div>
        
        <div class="dropdown">
            <button class="dropbtn"><a href="about">About</button></a>
            <div class="dropdown-content">
                <a href="#">About 1</a>
                <a href="#">About 2</a>
                <a href="#">About 3</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn"><a href="{{route('serviceshow')}}" class="three">service</button></a>
            <div class="dropdown-content">
                <a href="service">Add New </a>
                <a href="{{route('singleservice')}}">Single service</a>
                
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn"><a href="{{route('sp')}}">Project</a></button>
            <div class="dropdown-content">
                <a href="project">Add New </a>
                <a href="{{route('singlepage')}}">single project</a>
                <a href="#">Project 3</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Element</button>
            <div class="dropdown-content">
                <a href="{{route('element')}}">Project Gallery</a>
                <a href="{{route('card')}}">Team gallery</a>
                <a href="all">Blog  Gallery</a>
                <a href="{{route('elementservice')}}">Service gallery</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Pages</button>
            <div class="dropdown-content">
                <a href="#">404</a>
                <a href="#">Team</a>
                <a href="#">Shop</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn"><a href="{{route('homeblog')}}">Blog</a></button>
            <div class="dropdown-content">
                <a href="blog">Add new </a>
                <a href="{{route('singleblog')}}">single blog</a>
                
            </div>
            
        </div>
        <a href="{{url('logout')}}">logout</a>

        <a href="/" class="icon">
            <img src="{{ asset('Images/serach.webp') }}" alt="Search Icon" />
        </a>
        <span class="separator"></span>
        <a href="/" class="icon">
            <img src="{{ asset('Images/shop.webp') }}" alt="Shop Icon" />
        </a>
   
                @endguest
    </nav>
</header>

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
<script>
    function toggleMenu() {
        const nav = document.querySelector('nav'); // Select the navigation element
        nav.classList.toggle('active'); // Toggle the 'active' class
    }
</script>
