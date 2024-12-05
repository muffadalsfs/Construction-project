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
  let currentIndex = 0;
  const toolsWrapper = document.querySelector('.tools-wrapper');
  const toolCards = document.querySelectorAll('.tool-card');
  const prevButton = document.querySelector('.prev');
  const nextButton = document.querySelector('.next');
  
  const totalCards = toolCards.length;
  
  function showNextSlide() {
    currentIndex = (currentIndex + 1) % totalCards;
    updateSliderPosition();
  }
  
  function showPrevSlide() {
    currentIndex = (currentIndex - 1 + totalCards) % totalCards;
    updateSliderPosition();
  }
  
  function updateSliderPosition() {
    const offset = -currentIndex * 320; // Adjust based on card width (300px + gap)
    toolsWrapper.style.transform = `translateX(${offset}px)`;
  }
  
  // Automatic slide every 3 seconds
  let autoSlide = setInterval(showNextSlide, 3000);
  
  // Navigation buttons
  nextButton.addEventListener('click', () => {
    clearInterval(autoSlide); // Stop auto slide when user interacts
    showNextSlide();
    autoSlide = setInterval(showNextSlide, 3000); // Restart auto slide
  });
  
  prevButton.addEventListener('click', () => {
    clearInterval(autoSlide); // Stop auto slide when user interacts
    showPrevSlide();
    autoSlide = setInterval(showNextSlide, 3000); // Restart auto slide
  });
  