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

  function showNextSlide() {
    currentIndex = (currentIndex + 1) % totalSlides;
    document.querySelector(`#slide-${currentIndex + 1}`).checked = true;
    updateTextSlide();
  }

  function updateTextSlide() {
    textSlides.forEach((slide, index) => {
      slide.classList.toggle("active", index === currentIndex);
    });
  }

  let autoSlide = setInterval(showNextSlide, 6000);

  // Initialize the text for the first slide
  updateTextSlide();
});
