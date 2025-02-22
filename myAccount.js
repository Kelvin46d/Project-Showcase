document.addEventListener("DOMContentLoaded", function () {
  const loginForm = document.querySelector(".login-form");
  const errorMessage = document.getElementById("error-message");

  // Listen for the form submit event
  loginForm.addEventListener("submit", function (event) {
    // Clear any previous error messages
    errorMessage.style.display = "none";

    const username = document.getElementById("name").value.trim();
    const password = document.getElementById("pwd").value.trim();

    // Check if username or password is empty
    if (username === "" || password === "") {
      // Display the error message
      errorMessage.textContent = "Both username and password are required. Please fill them out.";
      errorMessage.style.display = "block"; // Make the error message visible

      // Prevent form submission
      event.preventDefault();
      console.log("Form submission prevented due to validation failure.");
    } else {
      // The form is valid, allow submission 
      console.log("Form is valid, submitting...");
    }
  });
});