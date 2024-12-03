    // Function to filter projects based on category
    function filterProjects(category) {
        const projectCards = document.querySelectorAll('.project-card'); // Get all project cards
        
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