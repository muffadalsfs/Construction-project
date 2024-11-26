<style> 
 header {
    position: sticky;
    top: 0;
    z-index: 10000;
    background-color: #fff; /* Ensure background covers content below */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Optional shadow */
}

header .logo img {
    width: 150px; /* Adjust width as needed */
    height: auto; /* Maintain aspect ratio */
    object-fit: contain; /* Ensure image fits within the set size */
}

nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-grow: 1;
}

nav .dropdown {
    position: relative;
    display: inline-block;
    margin: 0 10px;
    font-family: Arial, sans-serif; /* Optional font family */
}

nav .dropdown .dropbtn {
    background: none;
    border: none;
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
    color: #333;
    padding: 8px 15px;
    transition: color 0.3s ease, background-color 0.3s ease;
}

nav .dropdown .dropbtn:hover {
    color: #007BFF; /* Highlight color on hover */
    background-color: #f0f0f0; /* Optional hover background */
    border-radius: 5px; /* Rounded corners */
}

nav .dropdown-content {
    display: none;
    position: absolute;
    background-color: #ffffff;
    min-width: 200px; /* Adjust dropdown width */
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Softer shadow */
    border-radius: 5px; /* Rounded corners */
    z-index: 10; /* Ensure it's above other elements */
    overflow: hidden; /* Clean edges for rounded corners */
    animation: fadeIn 0.3s ease-in-out; /* Optional fade-in animation */
}

nav .dropdown-content a {
    display: block;
    color: #333;
    text-decoration: none;
    padding: 10px 15px;
    font-size: 14px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

nav .dropdown-content a:hover {
    background-color: #f0f0f0; /* Highlighted background */
    color: #007BFF; /* Highlighted text color */
}

nav .dropdown:hover .dropdown-content {
    display: block;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}


nav a {
    text-decoration: none;
    color: #333;
    padding: 5px 10px;
}

nav a.icon img {
    width: 20px;
    height: 20px;
}
footer {
    background-color: black;
    color: #fff;
    padding: 10px ;
   width: 100%;
   margin: auto;
   
}

.footer-section {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    margin-left: 98px;
}

.footer-column {
    flex: 1 1 22%;
    padding: 10px;
}

.footer-column p {
    font-weight: bold;
    margin-top: 0;
    border-bottom: 3px solid yellow;
    padding-bottom: 9px;
    width: 35%; /* Shortens the border length */
    margin-bottom: 10px;
}

.footer-column ul {
    list-style: none;
    padding: 0;
}

.footer-column ul li {
    margin-bottom: 5px;
    color: #ccc;
}

/* Adding button with border */
.footer-column button {
    background-color: transparent;
    border: 1px solid yellow;
    color: yellow;
    padding: 10px 20px;
    font-size: 14px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.footer-column button:hover {
    background-color: yellow;
    color: #333;
}

</style>
<header>
    <nav>
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
            <button class="dropbtn"><a href="homeservice">service</a></button>
            <div class="dropdown-content">
                <a href="service">Service cereted</a>
                <a href="singleservice">Single service</a>
                
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
                <a href="{{route('enginner.element')}}">team gallery</a>
                <a href="#">Link 3</a>
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
            <button class="dropbtn"><a href="blog">Blog</a></button>
            <div class="dropdown-content">
                <a href="blog">Blog created</a>
                <a href="#">Blog 2</a>
                <a href="#">Blog 3</a>
            </div>
        </div>
        <a href="{{ url('login') }}">Contact</a>
        <a href="/" class="icon">
            <img src="{{ asset('Images/serach.webp') }}" alt="Search Icon" />
        </a>
        <span class="separator"></span>
        <a href="/" class="icon">
            <img src="{{ asset('Images/shop.webp') }}" alt="Shop Icon" />
        </a>
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
