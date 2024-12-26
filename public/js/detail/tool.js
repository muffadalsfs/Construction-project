document.addEventListener("DOMContentLoaded", () => {
    const addButton = document.getElementById("addButton");
    const newButton = document.getElementById("newButton");
    const addContent = document.getElementById("addContent");
    const newContent = document.getElementById("newContent");

    const buttons = [addButton, newButton];
    const contents = [addContent, newContent];

    buttons.forEach((button, index) => {
        button.addEventListener("click", () => {
            // Toggle active class on buttons
            buttons.forEach((btn) => btn.classList.remove("active"));
            button.classList.add("active");

            // Show or hide content
            contents.forEach((content, i) => {
                if (i === index) {
                    content.style.display = content.style.display === "none" || !content.style.display ? "block" : "none";
                } else {
                    content.style.display = "none";
                }
            });
        });
    });
});