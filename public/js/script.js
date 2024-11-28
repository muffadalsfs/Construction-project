document.addEventListener('DOMContentLoaded', () => {
    const slider = document.getElementById('project-slider');
    let index = 0;

    const slides = slider.children;
    const totalSlides = slides.length;

    function showNextSlide() {
        index = (index + 1) % totalSlides; // Loop back to the first slide
        slider.style.transform = `translateX(-${index * 100}%)`;
    }

    setInterval(showNextSlide, 3000); // Change slide every 3 seconds
});
var swiper = new Swiper('.swiper-container', {
    loop: true, // Loop through slides
    slidesPerView: 4, // Display 4 slides side by side
    spaceBetween: 20, // Space between slides
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        1024: {
            slidesPerView: 4, // 4 slides on large screens
        },
        768: {
            slidesPerView: 2, // 2 slides on tablets
        },
        480: {
            slidesPerView: 1, // 1 slide on small screens
        },
    },
});
function filterProjects(category) {
const cards = document.querySelectorAll('.project-card');
cards.forEach(card => {
    if (category === 'all') {
        card.classList.remove('hidden');
    } else if (card.classList.contains(category)) {
        card.classList.remove('hidden');
    } else {
        card.classList.add('hidden');
    }
});

}
