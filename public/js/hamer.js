

window.onload = function() {
  // Hide the loader once the page is fully loaded
  document.getElementById('loader').style.display = 'none';
};


// Get elements
const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');

// Add event listener to hamburger to toggle 'active' class
hamburger.addEventListener('click', () => {
  navLinks.classList.toggle('active');
});
