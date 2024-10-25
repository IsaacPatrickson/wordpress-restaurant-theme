document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.getElementById('palette-toggle');
    const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");
    let currentTheme = localStorage.getItem("theme");

    // Check if the user has previously selected a theme
    if (currentTheme === "dark") {
        document.body.classList.add("dark-mode");
        toggleButton.textContent = "Switch to Light Mode";
    } else if (prefersDarkScheme.matches && currentTheme !== "light") {
        document.body.classList.add("dark-mode");
        toggleButton.textContent = "Switch to Light Mode";
    }

    // Add event listener to toggle color mode
    toggleButton.addEventListener('click', function () {
        document.body.classList.toggle("dark-mode");
        const theme = document.body.classList.contains("dark-mode") ? "dark" : "light";
        localStorage.setItem("theme", theme);
        toggleButton.textContent = theme === "dark" ? "Switch to Light Mode" : "Switch to Dark Mode";
    });
});