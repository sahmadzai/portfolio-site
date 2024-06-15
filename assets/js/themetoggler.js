/**
 * themetoggler.js
 * This file contains the code for toggling between light and dark themes.
 *
 * Author: Shamsullah Ahmadzai
 * Date: June 14th, 2024
 */

const themeToggleButton = document.getElementById("theme-toggle");
const toggleText = document.querySelector(".toggle-text");
const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");

// Set local storage theme to prefers-color-scheme
if (prefersDarkScheme.matches) {
  localStorage.setItem("theme", "dark");
}

const currentTheme = localStorage.getItem("theme");

if (currentTheme == "dark") {
  document.body.classList.add("dark-theme");
  gradient.updateGradientColors(); // Update gradient colors
  themeToggleButton.innerHTML =
    '<i class="fas fa-moon shake"></i><span class="toggle-text">Dark</span>';
  themeToggleButton.classList.add("show-text");
  setTimeout(() => {
    themeToggleButton.classList.remove("show-text");
  }, 1500);
} else if (currentTheme == "light") {
  document.body.classList.add("light-theme");
  gradient.updateGradientColors(); // Update gradient colors
  themeToggleButton.innerHTML =
    '<i class="fas fa-sun spin"></i><span class="toggle-text">Light</span>';
  themeToggleButton.classList.add("show-text");
  setTimeout(() => {
    themeToggleButton.classList.remove("show-text");
  }, 1500);
} else if (prefersDarkScheme.matches) {
  document.body.classList.add("dark-theme");
  gradient.updateGradientColors(); // Update gradient colors
  themeToggleButton.innerHTML =
    '<i class="fas fa-moon shake"></i><span class="toggle-text">Dark</span>';
  themeToggleButton.classList.add("show-text");
  setTimeout(() => {
    themeToggleButton.classList.remove("show-text");
  }, 1500);
}

themeToggleButton.addEventListener("click", function () {
  themeToggleButton.classList.add("show-text");
  if (document.body.classList.contains("dark-theme")) {
    document.body.classList.remove("dark-theme");
    document.body.classList.add("light-theme");
    gradient.updateGradientColors(); // Update gradient colors
    themeToggleButton.innerHTML =
      '<i class="fas fa-sun spin"></i><span class="toggle-text">Light</span>';
    setTimeout(() => {
      themeToggleButton.classList.remove("show-text");
    }, 1500);
    localStorage.setItem("theme", "light");
  } else {
    document.body.classList.remove("light-theme");
    document.body.classList.add("dark-theme");
    gradient.updateGradientColors(); // Update gradient colors
    themeToggleButton.innerHTML =
      '<i class="fas fa-moon shake"></i><span class="toggle-text">Dark</span>';
    setTimeout(() => {
      themeToggleButton.classList.remove("show-text");
    }, 1500);
    localStorage.setItem("theme", "dark");
  }
});
