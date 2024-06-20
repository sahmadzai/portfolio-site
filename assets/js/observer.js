/**
 * observer.js
 * This file contains the code for pausing and resuming animations when elements are in view.
 * It uses the Intersection Observer API to achieve this effect in reducing resource consumption.
 *
 * Author: Shamsullah Ahmadzai
 * Date: June 19th, 2024
 */

document.addEventListener("DOMContentLoaded", function () {
  // Function to pause all animations
  function pauseAnimations(element) {
    element.style.animationPlayState = "paused";
    element.style.webkitAnimationPlayState = "paused";
    // console.log(`Paused animations for: ${element.className}`);
  }

  // Function to resume all animations
  function resumeAnimations(element) {
    element.style.animationPlayState = "running";
    element.style.webkitAnimationPlayState = "running";
    // console.log(`Resumed animations for: ${element.className}`);
  }

  // Intersection Observer callback
  function handleIntersect(entries, observer) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        // console.log(`Element in view: ${entry.target.className}`);
        resumeAnimations(entry.target);
      } else {
        // console.log(`Element out of view: ${entry.target.className}`);
        pauseAnimations(entry.target);
      }
    });
  }

  // Intersection Observer options
  const observerOptions = {
    root: null,
    rootMargin: "0px",
    threshold: 0.1,
  };

  // Create Intersection Observer
  const observer = new IntersectionObserver(handleIntersect, observerOptions);

  // Observe elements with animations
  const animatedElements = document.querySelectorAll(
    ".hero, .about-section, .skillset-section, .experience-section"
  );
  animatedElements.forEach((el) => {
    observer.observe(el);
    // console.log(`Observing: ${el.className}`);
  });
});
