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
  const prevButton = document.querySelector('.slider-nav button:first-child');
  const nextButton = document.querySelector('.slider-nav button:last-child');
  const toolsWrapper = document.querySelector('.tools-wrapper');
  
  let currentSlide = 0;
  const slidesToShow = 3; // Number of cards visible at a time
  const totalSlides = document.querySelectorAll('.tool-card').length;
  
  function moveSlider() {
      const offset = -(currentSlide * 320); // 320px = card width + margin
      toolsWrapper.style.transform = `translateX(${offset}px)`;
  }
  
  nextButton.addEventListener('click', () => {
      if (currentSlide < totalSlides - slidesToShow) {
          currentSlide++;
          moveSlider();
      }
  });
  
  prevButton.addEventListener('click', () => {
      if (currentSlide > 0) {
          currentSlide--;
          moveSlider();
      }
  });