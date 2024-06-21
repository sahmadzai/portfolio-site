/**
 * preloader.js
 * This file contains the code for the preloader animation that runs before the page is fully loaded.
 * It uses the Anime.js library for the animation effect.
 *
 * Author: Shamsullah Ahmadzai
 * Date: June 21st, 2024
 */

document.addEventListener("DOMContentLoaded", function () {
  // Anime.js preloader animation
  anime({
    targets: "#preloader .dot",
    translateY: [
      { value: -20, duration: 500 },
      { value: 0, duration: 500 },
    ],
    easing: "easeInOutQuad",
    delay: anime.stagger(100, { start: 0, from: "first" }),
    loop: true,
  });

  // Hide preloader once the page is fully loaded
  window.addEventListener("load", function () {
    const preloader = document.getElementById("preloader");

    setTimeout(() => {
      preloader.classList.add("hide");
      this.setTimeout(() => {
        preloader.style.display = "none";
      }, 1000);
    }, 2000);
  });
});
