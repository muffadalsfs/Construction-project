document.addEventListener('DOMContentLoaded', () => {
    const slider = document.getElementById('project-slider');
    let currentIndex = 0;
  
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;
  
    function showSlide(index) {
      slider.style.transform = `translateX(-${index * 100}%)`;
    }
  
    // Auto-slide (optional)
    setInterval(() => {
      currentIndex = (currentIndex + 1) % totalSlides;
      showSlide(currentIndex);
    }, 5000); // 5 seconds
  });
  // second js
  function filterProjects(category) {
      const projects = document.querySelectorAll('.project-card');
  
      projects.forEach(project => {
          if (category === 'All' || project.dataset.category === category) {
              project.style.display = 'block';
          } else {
              project.style.display = 'none';
          }
      });
  }
  
  // third js
  document.addEventListener('DOMContentLoaded', function () {
      const slider = document.getElementById('toolsSlider');
      const wrapper = slider.querySelector('.tools-wrapper');
      const totalWidth = wrapper.scrollWidth;
      const viewportWidth = slider.offsetWidth;
      const cardWidth = wrapper.querySelector('.tool-card').offsetWidth + 20; // Width of one card + margin
  
      // Function to scroll the slider
      function autoScrollSlider() {
          let currentScroll = wrapper.scrollLeft;
          
          if (currentScroll < totalWidth - viewportWidth) {
              wrapper.scrollLeft += cardWidth;  // Scroll one card width
          } else {
              wrapper.scrollLeft = 0;  // Reset to start if at the end
          }
      }
  
      // Scroll every 2 seconds
      setInterval(autoScrollSlider, 2000);
  });