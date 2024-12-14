<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header with Logo and Dropdown</title>
    <style>
        /* Reset some default styles */
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        /* Header Style */
        .header {
            background-color: #333;
            padding: 10px 20px;
            display: flex;
            justify-content: center; /* Center navigation */
            align-items: center;
            color: white;
            position: relative;
            max-height: 80px; /* Set maximum height for header */
            overflow: hidden; /* Prevent overflow if logo or other elements exceed the max height */
            margin-left: 20px; /* Add spacing to the left of the header */
        }

        /* Logo Section */
        .logo {
            max-height: 60px; /* Limit logo size */
        }

        .logo img {
            height: 100%; /* Ensure the logo scales within the max height */
        }

        /* Navigation Menu */
        .nav {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .nav li {
            position: relative;
            padding: 10px 15px;
            cursor: pointer;
            display: inline-block;
        }

        .nav li:hover {
            background-color: #575757;
        }

        /* Dropdown Menu */
        .dropdown {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #333;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .dropdown li {
            padding: 10px 15px;
        }

        .dropdown li:hover {
            background-color: #444;
        }

        /* Show dropdown on hover */
        .nav li:hover .dropdown {
            display: block;
        }

        /* Hamburger Menu Styles (Initially hidden) */
        .hamburger {
            display: none;
            flex-direction: column;
            justify-content: space-around;
            width: 30px;
            height: 30px;
            background-color: transparent;
            border: none;
            cursor: pointer;
        }

        .hamburger div {
            width: 30px;
            height: 4px;
            background-color: white;
        }

        /* Responsive Design */
        @media screen and (max-width: 768px) {
            /* Stack the items vertically on small screens */
            .header {
                flex-direction: row; /* Keep items in a row */
                justify-content: space-between; /* Spread out logo and hamburger */
                max-height: none; /* Allow the header to expand vertically in mobile view */
                margin-left: 0; /* Remove margin on small screens */
            }

            .logo {
                max-height: 50px; /* Adjust logo size on smaller screens */
            }

            .nav {
                display: none; /* Hide navigation by default */
                flex-direction: column;
                width: 100%;
                padding: 0;
            }

            .nav li {
                padding: 10px;
                width: 100%;
                text-align: left;
            }

            .dropdown {
                position: static;
                width: 100%;
            }

            .dropdown li {
                text-align: left;
                width: 100%;
            }

            /* Show navigation when hamburger is clicked */
            .nav.active {
                display: flex;
            }

            /* Show hamburger menu on small screens */
            .hamburger {
                display: flex;
            }
        }

    </style>
</head>
<body>

    <!-- Header Section -->
    <div class="header">
        <!-- Logo Section -->
        <div class="logo">
            <img src="https://via.placeholder.com/150" alt="Logo"> <!-- Replace with your logo -->
        </div>
        
        <!-- Hamburger Menu -->
        <button class="hamburger" id="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </button>

        <!-- Navigation Menu -->
        <ul class="nav" id="nav">
            <li>Home</li>
            <li>About</li>
            <li>
                Services
                <!-- Dropdown Menu for Services -->
                <ul class="dropdown">
                    <li>Web Design</li>
                    <li>App Development</li>
                    <li>SEO Optimization</li>
                </ul>
            </li>
        </ul>
    </div>

    <script>
        // Toggle the navigation menu when the hamburger is clicked
        const hamburger = document.getElementById("hamburger");
        const nav = document.getElementById("nav");

        hamburger.addEventListener("click", () => {
            nav.classList.toggle("active");
        });
    </script>

</body>
</html>
