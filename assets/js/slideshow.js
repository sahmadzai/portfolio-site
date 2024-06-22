/**
 * slideshow.js
 * This file contains the code for the slideshow in the about me section.
 *
 * Author: Shamsullah Ahmadzai
 * Date: June 14th, 2024
 */

document.addEventListener("DOMContentLoaded", function () {
  let currentIndex = 0;
  const slides = document.querySelectorAll(".card");
  const textSlides = document.querySelectorAll(".text-slide");
  const totalSlides = slides.length;

  window.showNextSlide = function () {
    // console.log("About Section - Showing next slide");
    currentIndex = (currentIndex + 1) % totalSlides;
    document.querySelector(`#slide-${currentIndex + 1}`).checked = true;
    updateTextSlide();
  };

  function updateTextSlide() {
    textSlides.forEach((slide, index) => {
      slide.classList.toggle("active", index === currentIndex);
    });
  }

  // Listen for radio button changes
  slides.forEach((slide, index) => {
    slide.addEventListener("click", function () {
      currentIndex = index;
      updateTextSlide();
    });
  });

  window.autoSlide = setInterval(window.showNextSlide, 6000);

  // Pause the slideshow on hover
  document
    .querySelector(".about-section")
    .addEventListener("mouseover", function () {
      clearInterval(window.autoSlide);
    });

  // Resume the slideshow on mouseout
  document
    .querySelector(".about-section")
    .addEventListener("mouseout", function () {
      window.autoSlide = setInterval(window.showNextSlide, 6000);
    });

  // Initialize the text for the first slide
  updateTextSlide();
});
