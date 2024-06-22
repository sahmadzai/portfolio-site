/**
 * contactform.js
 * This file contains the code for handling form submission for the contact form on the home page.
 *
 * Author: Shamsullah Ahmadzai
 * Date: June 21st, 2024
 */

document
  .querySelector(".contact-form")
  .addEventListener("submit", function (e) {
    e.preventDefault();
    console.log("Button clicked");
    let formData = new FormData(this);

    fetch("php/contactform.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => {
        if (!response.ok) {
          throw new Error("Network response was not ok " + response.statusText);
        }
        return response.json();
      })
      .then((data) => {
        let formMessage = document.getElementById("form-message");
        let formMessageText = document.getElementById("form-message-text");
        let submitButton = document.getElementById("submit-button");

        if (data.status === "success") {
          // Prevent form from being submitted again
          submitButton.disabled = true;
          formMessageText.innerText = data.message;
          formMessage.style.display = "block";
          formMessage.style.color = "green";

          // Change button text and show Lottie animation
          submitButton.classList.add("success");
          submitButton.innerHTML =
            'Success, thank you! <div id="lottie-animation" style="display: inline-block;"></div>';
          playLottieAnimation();

          // Hide the success message after 2.5 seconds
          setTimeout(() => {
            submitButton.classList.remove("success");
            submitButton.innerHTML = "Submit";
          }, 2500);

          // Hide the form message after 10 seconds
          setTimeout(() => {
            formMessage.style.display = "none";
          }, 8000);
        } else {
          formMessageText.innerText = data.message;
          formMessage.style.display = "block";
          formMessage.style.color = "red";
        }
      })
      .catch((error) => {
        console.error("Error:", error);
        let formMessage = document.getElementById("form-message");
        let formMessageText = document.getElementById("form-message-text");
        formMessageText.innerText =
          "An error occurred. Please try again later.";
        formMessage.style.display = "block";
        formMessage.style.color = "red";
      });
  });

function playLottieAnimation() {
  // Load Lottie animation
  lottie.loadAnimation({
    container: document.getElementById("lottie-animation"),
    renderer: "svg",
    loop: false,
    autoplay: true,
    path: "assets/js/lottieanim/checkmark.json",
  });
}
