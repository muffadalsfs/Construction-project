function filterProjects(category) {
    const projectCards = document.querySelectorAll('.project-card'); // Get all project cards
    const filterButtons = document.querySelectorAll('.filter-button'); // Get all filter buttons

    // Remove 'active' class from all buttons
    filterButtons.forEach(button => {
        button.classList.remove('active');
    });

    // Add 'active' class to the clicked button
    const activeButton = Array.from(filterButtons).find(button => button.innerText.toLowerCase() === category || (category === 'all' && button.innerText.toLowerCase() === 'show all'));
    if (activeButton) {
        activeButton.classList.add('active');
    }

    // Filter project cards based on the category
    projectCards.forEach(card => {
        const projectCategory = card.getAttribute('data-category').toLowerCase(); // Get the data-category of the card

        // If category is 'all', or if the card's category matches the selected category, show it
        if (category === 'all' || projectCategory === category) {
            card.style.display = 'block'; // Show this card
        } else {
            card.style.display = 'none'; // Hide this card
        }
    });
}
