/**
 * skillset-toggle.js
 * This file contains the code for toggling between carousel and list view for the skillset section.
 *
 * Author: Shamsullah Ahmadzai
 * Date: June 19th, 2024
 */

document.getElementById("carousel-view").addEventListener("click", function () {
  document.getElementById("carousel-view").classList.add("active");
  document.getElementById("list-view").classList.remove("active");
  document.querySelector(".carousel-view").classList.add("active");
  document.querySelector(".list-view").classList.remove("active");
});

document.getElementById("list-view").addEventListener("click", function () {
  document.getElementById("list-view").classList.add("active");
  document.getElementById("carousel-view").classList.remove("active");
  document.querySelector(".list-view").classList.add("active");
  document.querySelector(".carousel-view").classList.remove("active");
});
