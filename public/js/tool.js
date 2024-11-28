document.addEventListener("DOMContentLoaded", () => {
    const toolsWrapper = document.querySelector(".tools-wrapper");
    const toolsNavButtons = document.querySelectorAll(".slider-nav button");
    const toolSlides = document.querySelectorAll(".tool-card");
    const totalSlides = toolSlides.length;
    let toolsIndex = 0;

    function showToolsSlide(i) {
        toolsWrapper.style.transform = `translateX(${-i * 300}px)`; // Adjust based on tool-card width
        toolsNavButtons.forEach((btn, idx) => btn.classList.toggle("active", idx === i));
    }

    toolsNavButtons.forEach((button, i) => {
        button.addEventListener("click", () => {
            toolsIndex = i;
            showToolsSlide(toolsIndex);
        });
    });

    setInterval(() => {
        toolsIndex = (toolsIndex + 1) % totalSlides; // Loop through slides
        showToolsSlide(toolsIndex);
    }, 5000); // Auto-slide every 5 seconds
});