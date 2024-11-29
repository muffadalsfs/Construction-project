<link rel="stylesheet" href="{{asset('css/header.css')}}">
<header>
    <nav>
        @guest
    <a href="/" class="logo">
            <img src="{{ asset('Images/logo-dark.png') }}" alt="Logo" />
        </a>
        <div class="dropdown">
            <button class="dropbtn"><a href="/">Home</a></button>
            <div class="dropdown-content">
                <a href="/">Home 1</a>
                <a href="#">Home 2</a>
                <a href="#">Home 3</a>
            </div>
        </div>
        
        <div class="dropdown">
            <button class="dropbtn">About</button>
            <div class="dropdown-content">
                <a href="#">About 1</a>
                <a href="#">About 2</a>
                <a href="#">About 3</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn"><a href="{{route('serviceshow')}}">service</a></button>
            <div class="dropdown-content">
                <a href="service">Service cereted</a>
                <a href="{{route('singleservice')}}">Single service</a>
                
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn"><a href="{{route('sp')}}">Project</a></button>
            <div class="dropdown-content">
                <a href="project">Project created</a>
                <a href="{{route('singlepage')}}">single project</a>
                <a href="#">Project 3</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Element</button>
            <div class="dropdown-content">
                <a href="{{route('element')}}">Project Gallery</a>
                <a href="{{route('card')}}">team gallery</a>
                <a href="all">Blog </a>
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
                <a href="blog">Blog created</a>
                <a href="{{route('singleblog')}}">single blog</a>
                
            </div>
        </div>
        <a href="{{ url('login') }}">login</a>
        <a href="{{ url('resigeter') }}">register</a>

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
                <a href="/">Home 1</a>
                <a href="#">Home 2</a>
                <a href="#">Home 3</a>
            </div>
        </div>
        
        <div class="dropdown">
            <button class="dropbtn">About</button>
            <div class="dropdown-content">
                <a href="#">About 1</a>
                <a href="#">About 2</a>
                <a href="#">About 3</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn"><a href="{{route('serviceshow')}}">service</a></button>
            <div class="dropdown-content">
                <a href="service">Service cereted</a>
                <a href="{{route('singleservice')}}">Single service</a>
                
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn"><a href="{{route('sp')}}">Project</a></button>
            <div class="dropdown-content">
                <a href="project">Project created</a>
                <a href="{{route('singlepage')}}">single project</a>
                <a href="#">Project 3</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Element</button>
            <div class="dropdown-content">
                <a href="{{route('element')}}">Project Gallery</a>
                <a href="{{route('card')}}">team gallery</a>
                <a href="all">Blog </a>
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
                <a href="blog">Blog created</a>
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
