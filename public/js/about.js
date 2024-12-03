document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.counter-number');
  
    counters.forEach(counter => {
      const updateCounter = () => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;
  
        const increment = Math.ceil(target / 100); // Adjust increment speed
  
        if (count < target) {
          counter.innerText = count + increment;
          setTimeout(updateCounter, 30); // Adjust speed of update
        } else {
          counter.innerText = target;
        }
      };
  
      updateCounter();
    });
  });