document.addEventListener('DOMContentLoaded', () => {
    const slider = document.getElementById('project-slider');
    const slides = document.querySelectorAll('.slide');
    let index = 0;
  
    function showNextSlide() {
      index = (index + 1) % slides.length;
      slider.style.transform = `translateX(-${index * 100}%)`;
    }
  
    setInterval(showNextSlide, 5000); // Change slide every 5 seconds
  });
  //  second layer
  function filterProjects(category) {
    const projects = document.querySelectorAll('.project-card');
  
    projects.forEach(project => {
      const projectCategory = project.getAttribute('data-category');
      
      if (category === 'All' || projectCategory === category) {
        project.style.display = 'block'; // Show matching project
      } else {
        project.style.display = 'none'; // Hide non-matching project
      }
    });
  }
  // thirdlayer
  document.addEventListener("DOMContentLoaded", function () {
      const slider = document.querySelector(".feedback-wrapper");
      const slides = slider.children;
      const navButtons = document.querySelectorAll(".slider-nav button");
      let currentIndex = 0;
  
      function updateSlider() {
          slider.style.transform = `translateX(-${currentIndex * 100}%)`;
          navButtons.forEach((btn, index) => {
              btn.classList.toggle("active", index === currentIndex);
          });
      }
  
      function autoSlide() {
          currentIndex = (currentIndex + 1) % slides.length;
          updateSlider();
      }
  
      navButtons.forEach((button, index) => {
          button.addEventListener("click", () => {
              currentIndex = index;
              updateSlider();
          });
      });
  
      setInterval(autoSlide, 5000); // Change slide every 5 seconds
  });
  
  // four layer
  document.addEventListener("DOMContentLoaded", function () {
    const slider = document.getElementById("toolsSlider");
    const wrapper = slider.querySelector(".tools-wrapper");
    const sliderButtons = document.querySelectorAll(".slider-button");
    let slideIndex = 0;

    // Default auto-slide interval (slower on small screens)
    const slideIntervalDefault = 3000; // 3 seconds (for larger screens)
    const slideIntervalSmallScreen = 5000; // 5 seconds (slower for small screens)
    let slideInterval = window.innerWidth <= 768 ? slideIntervalSmallScreen : slideIntervalDefault;

    let autoSlide;

    // Function to calculate card width dynamically
    const getCardWidth = () => {
        const cards = wrapper.querySelectorAll(".tool-card");
        return cards[0].offsetWidth + 20; // Card width plus gap
    };

    // Function to slide
    const slide = (direction = "next") => {
        if (window.innerWidth > 768) { // Only slide for larger screens
            const cardWidth = getCardWidth();
            const cards = wrapper.querySelectorAll(".tool-card");
            if (direction === "next") {
                slideIndex = (slideIndex + 1) % cards.length;
            } else {
                slideIndex = (slideIndex - 1 + cards.length) % cards.length;
            }
            wrapper.style.transition = "transform 0.6s ease"; // Transition speed
            wrapper.style.transform = `translateX(-${slideIndex * cardWidth}px)`;
        }
    };

    // Start auto slider
    const startAutoSlide = () => {
        autoSlide = setInterval(() => slide("next"), slideInterval);
    };

    // Stop auto slider
    const stopAutoSlide = () => {
        clearInterval(autoSlide);
    };

    // Attach event listeners for navigation buttons
    sliderButtons.forEach(button => {
        button.addEventListener("click", (e) => {
            const direction = e.target.dataset.direction;
            stopAutoSlide();
            slide(direction);
            startAutoSlide();
        });
    });

    // Restart slider on window resize to adjust card width and interval speed
    window.addEventListener("resize", () => {
        stopAutoSlide();
        slideIndex = 0; // Reset index to avoid out-of-bound issues
        wrapper.style.transform = "translateX(0)"; // Reset position
        // Adjust auto-slide interval based on screen size
        slideInterval = window.innerWidth <= 768 ? slideIntervalSmallScreen : slideIntervalDefault;
        startAutoSlide();
    });

    // Initialize auto slider
    startAutoSlide();
});
