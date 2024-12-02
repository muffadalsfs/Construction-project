document.addEventListener('DOMContentLoaded', function () {
    const toolsWrapper = document.getElementById('toolsSlider').querySelector('.tools-wrapper');
    let scrollInterval;

    const startAutoScroll = () => {
        scrollInterval = setInterval(() => {
            toolsWrapper.scrollBy({ left: toolsWrapper.offsetWidth, behavior: 'smooth' });
            if (toolsWrapper.scrollLeft + toolsWrapper.offsetWidth >= toolsWrapper.scrollWidth) {
                toolsWrapper.scrollTo({ left: 0, behavior: 'smooth' });
            }
        }, 3000); // Adjust timing as needed
    };

    const stopAutoScroll = () => {
        clearInterval(scrollInterval);
    };

    toolsWrapper.addEventListener('mouseenter', stopAutoScroll);
    toolsWrapper.addEventListener('mouseleave', startAutoScroll);

    startAutoScroll();
});
