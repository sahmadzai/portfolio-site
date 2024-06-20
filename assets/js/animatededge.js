/**
 * animatededge.js
 * This file contains the code for animating the glowing edge based on the scroll position.
 *
 * Author: Shamsullah Ahmadzai
 * Date: June 20th, 2024
 */

document.addEventListener("DOMContentLoaded", function () {
  // Function to update the stroke-dashoffset based on scroll
  function updateGlowLine() {
    const experienceSection = document.querySelector(".experience-section");
    if (experienceSection) {
      const sectionTop = experienceSection.offsetTop;
      const sectionHeight = experienceSection.offsetHeight;
      const scrollTop = window.scrollY || document.documentElement.scrollTop;
      const windowHeight = window.innerHeight;

      // Calculate the scroll position relative to the experience section
      const scrollPosition = Math.max(0, scrollTop + windowHeight - sectionTop);
      const buffer = windowHeight * 0.28; // Buffer to fill the stroke path by the time the section is in the bottom quarter of the screen
      const scrolled = Math.min(
        1,
        scrollPosition / (sectionHeight + windowHeight - buffer)
      );

      console.log("Scroll Top: ", scrollTop);
      console.log("Section Top: ", sectionTop);
      console.log("Section Height: ", sectionHeight);
      console.log("Scrolled Percentage: ", scrolled * 100);

      const line = document.querySelector("#animated-edge path:nth-of-type(2)");
      if (line) {
        const length = line.getTotalLength();
        line.style.strokeDasharray = length;
        line.style.strokeDashoffset = length - scrolled * length;
        console.log("Stroke Dashoffset: ", line.style.strokeDashoffset);
      } else {
        console.error("SVG path not found");
      }
    } else {
      console.error("Experience section not found");
    }
  }

  // Initial call to set the correct position on load
  updateGlowLine();

  // Listen to scroll events
  window.addEventListener("scroll", updateGlowLine);
});
