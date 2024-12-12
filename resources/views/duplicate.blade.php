<footer class="footer-container">
  <div class="footer-content">
    <!-- About Company Section -->
    <div class="footer-section">
      <h1>About Company</h1>
      <ul>
        <li>Vestibulum ante ipsum primis in faucibus </li>
        <li>orci luctus et ultrices posuere cubilia Curae; </li>
        <li>posuere cubilia Curae ante ipsum primis in </li>
      </ul>
    </div>

    <!-- Industries Section -->
    <div class="footer-section">
      <h1>Industries</h1>
      <ul>
        <li>Industrial Infrastructure</li>
        <li>Wireling Machinery</li>
        <li>Road Repair</li>
        <li>Engine Replacement</li>
        <li>Stainless Bridge Building</li>
        <li>Commercial Building</li>
      </ul>
    </div>

    <!-- Additional Industries Section -->
    <div class="footer-section">
      <h1>Recent Posts</h1>
      <ul>
        <li>Use of Drone in Construction</li>
        <li>How to Use Safety Signs</li>
        <li>Biomimetics As a Tool For New</li>
      </ul>
    </div>
    <div class="footer-section">
      <h1>Services</h1>
      <ul>
        <li>    Design and Build Infrastructure</li>
        <li>    Road Constructionachinery</li>
        <li>    Power & Energyr</li>
        <li>    Construction Planninglacement</li>
        <li>    Aero Space ServicesBridge Building</li>
        <li>    Site Inspection Building</li>
      </ul>
    </div>
    <!-- Centered Span -->

  </div>
  <span> © Copyright Koncrete 2020. Designed and Developed by RadiusTheme</span>
</footer>
<style>

.footer-container {
    text-align: center;
    display: flex
;
    flex-direction: column;
    align-items: center;
    padding: 75px 0 45px;
    background-color: #121212;
    font-size: 15px;
    color: #cccccc;
  margin:-8px;
}

/* Footer Content */
.footer-content {
  display: flex;
  flex-wrap: wrap; /* Allows wrapping for responsiveness */
  justify-content: center; /* Center all items horizontally */

  width: 75%; /* Ensure content spans the full width */
}

/* Footer Titles (h1) */
.footer-content h1 {
    font-family: Roboto, sans-serif;
  font-size: 16px;
  font-weight: 400;
  font-style: normal;
  position: relative;
  padding-bottom: 10px; /* Space below the text for the line */
  margin: 0; /* Reset margins */
  text-align: center; /* Center align text */
}

/* Yellow line below h1 */
.footer-content h1::after {
  content: "";
  display: block;
  width: 20%; /* Half-width yellow line */
  height: 3px; /* Line thickness */
  background-color: #ffb400; /* Yellow color */
  margin: 7px auto; /* Center the line */
}

/* List Styles */
.footer-content ul {
  list-style: none; /* Remove default list item dots */

  margin: 0;
  text-align: left; /* Align items to the left for a clean layout */
}

/* List Item Styles */
.footer-content ul li {
  font-size: 16px;
  line-height: 1.6; /* Increase line height for readability */
  margin-bottom: 15px; /* Equal spacing between items */
  padding: 8px 12px; /* Consistent padding around list items */
  transition: color 0.3s ease, transform 0.3s ease; /* Smooth hover transition */
}

/* Hover Effect */
.footer-content ul li:hover {
  color: gold; /* Change text color on hover */
  transform: translateY(-3px); /* Slightly elevate the item on hover */
}

/* Centered Span */
span {
  margin-top: 50px; /* Space above the span */
  font-size: 18px;
  font-weight: bold;
  color: #ffb400; /* Yellow text */
  text-align: center;
  width: 100%; /* Span takes up full width */
}
 span::before {
  content: "";
  display: block;
  width: 100%; /* Half-width yellow line */
  height: 1px; /* Line thickness */
  background-color: white; /* Yellow color */
  margin: 7px auto; /* Center the line */
}
/* Media Query for Responsiveness */
@media (max-width: 768px) {
  .footer-content {
    flex-direction: column; /* Stack items vertically on small screens */
    gap: 20px; /* Maintain spacing */
  }
  .footer-section {
    text-align: center; /* Center align sections on larger screens */
  }

  .footer-section h1 {
    margin: 0 20px; /* Add spacing between titles */
  }

  .footer-content .footer-span {
    margin-top: 0; /* Remove extra spacing for larger screens */
  }
}






/* Media Query for Larger Screens */
@media (min-width: 768px) {
  .footer-content {
    flex-wrap: nowrap; /* Prevent wrapping */
    justify-content: space-evenly; /* Center and space sections */
  }

  .footer-section {
    text-align: center; /* Center align sections on larger screens */
  }

  .footer-section h1 {
    margin: 0 20px; /* Add spacing between titles */
  }

  .footer-content .footer-span {
    margin-top: 0; /* Remove extra spacing for larger screens */
  }
}

</style>