/**
 * observer.js
 * This file contains the code for pausing and resuming animations, sliders, carousels, and videos when elements are in view.
 * It uses the Intersection Observer API to achieve this effect in reducing resource consumption.
 *
 * Author: Shamsullah Ahmadzai
 * Date: June 19th, 2024
 */

const TAG = "OBSERVER: ";

document.addEventListener("DOMContentLoaded", function () {
  // Function to pause all animations
  function pauseAnimations(element) {
    element.style.animationPlayState = "paused";
    element.style.webkitAnimationPlayState = "paused";

    // Pause videos
    if (element.classList.contains("hero")) {
      const heroVideo = element.querySelector("video");
      if (heroVideo) heroVideo.pause();
      // console.log(TAG + "Hero video paused");
    }

    if (element.classList.contains("footer")) {
      const footerVideo = element.querySelector("video");
      if (footerVideo) footerVideo.pause();
      // console.log(TAG + "Footer video paused");
    }

    // Pause UIkit sliders
    const sliders = element.querySelectorAll(".uk-slider");
    sliders.forEach((slider) => {
      const sliderInstance = UIkit.slider(slider);
      if (sliderInstance && sliderInstance.stopAutoplay) {
        sliderInstance.stopAutoplay();
        // console.log(TAG + "Skills slider paused");
      }
    });

    // Pause custom slideshows
    if (element.classList.contains("about-section")) {
      clearInterval(window.autoSlide);
      // console.log(TAG + "About section slideshow paused");
    }
  }

  // Function to resume all animations
  function resumeAnimations(element) {
    element.style.animationPlayState = "running";
    element.style.webkitAnimationPlayState = "running";

    // Resume videos
    if (element.classList.contains("hero")) {
      const heroVideo = element.querySelector("video");
      if (heroVideo) heroVideo.play();
      // console.log(TAG + "Hero video resumed");
    }

    if (element.classList.contains("footer")) {
      const footerVideo = element.querySelector("video");
      if (footerVideo) footerVideo.play();
      // console.log(TAG + "Footer video resumed");
    }

    // Resume UIkit sliders
    const sliders = element.querySelectorAll(".uk-slider");
    sliders.forEach((slider) => {
      const sliderInstance = UIkit.slider(slider);
      if (sliderInstance && sliderInstance.startAutoplay) {
        sliderInstance.startAutoplay();
        // console.log(TAG + "Skills slider resumed");
      }
    });

    // Resume custom slideshows
    if (element.classList.contains("about-section")) {
      window.autoSlide = setInterval(window.showNextSlide, 6000);
      // console.log(TAG + "About section slideshow resumed");
    }
  }

  // Intersection Observer callback
  function handleIntersect(entries, observer) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        resumeAnimations(entry.target);
        // console.log(TAG + `Resuming animations for: ${entry.target.className}`);
      } else {
        pauseAnimations(entry.target);
        // console.log(TAG + `Pausing animations for: ${entry.target.className}`);
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
    ".hero, .about-section, .skillset-section, .experience-section, .currentproject-section, .footer"
  );
  animatedElements.forEach((el) => {
    observer.observe(el);
    // console.log(TAG + `Observing: ${el.className}`);
  });
});
