const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');

hamburger.addEventListener('click', () => {
  navLinks.classList.toggle('active');
});

window.onload = function() {
  // Hide the loader once the page is fully loaded
  document.getElementById('loader').style.display = 'none';
};
