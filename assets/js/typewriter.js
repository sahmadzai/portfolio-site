/**
 * typewriter.js
 * This file contains the code for the typewriter effect in the hero section.
 *
 * Author: Shamsullah Ahmadzai
 * Date: June 14th, 2024
 */

document.addEventListener("DOMContentLoaded", function () {
  const typewriterElement = document.querySelector(".typewriter");
  const words = JSON.parse(typewriterElement.getAttribute("data-text"));
  let wordIndex = 0;
  let letterIndex = 0;
  let currentWord = "";
  let isDeleting = false;

  function type() {
    currentWord = words[wordIndex];
    let displayText = isDeleting
      ? currentWord.substring(0, letterIndex--)
      : currentWord.substring(0, letterIndex++);

    typewriterElement.textContent = displayText;

    if (!isDeleting && letterIndex === currentWord.length) {
      setTimeout(() => (isDeleting = true), 1000);
    } else if (isDeleting && letterIndex === 0) {
      isDeleting = false;
      wordIndex = (wordIndex + 1) % words.length;
    }

    setTimeout(type, isDeleting ? 100 : 100);
  }

  type();
});
