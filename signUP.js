// Select form inputs and the sign-up button
const fullNameInput = document.getElementById("fname");
const emailInput = document.getElementById("email");
const passwordInput = document.getElementById("pass");
const confirmPasswordInput = document.getElementById("confirm-password");
const signUpButton = document.getElementById("signUP-button");
const passwordMismatchMessage = document.getElementById("password-mismatch-message");

// Function to validate email format
function isValidEmail(email) {
  const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
  return emailPattern.test(email);
}

// Function to validate all fields and enable/disable the sign-up button
function validateForm() {
  const fullNameValid = fullNameInput.value.trim().length > 0;
  const emailValid = isValidEmail(emailInput.value);
  const passwordValid = passwordInput.value.length >= 8;
  const passwordsMatch = passwordInput.value === confirmPasswordInput.value;

  // Show or hide the password mismatch message based on password comparison
  if (confirmPasswordInput.value.length > 0 && !passwordsMatch) {
    passwordMismatchMessage.style.display = "block";
  } else {
    passwordMismatchMessage.style.display = "none";
  }

  // Enable sign-up button only if all fields are valid
  signUpButton.disabled = !(fullNameValid && emailValid && passwordValid && passwordsMatch);

  // Provide immediate feedback for email and password validity
  emailInput.style.borderColor = emailValid ? "green" : "red";
  passwordInput.style.borderColor = passwordValid ? "green" : "red";
  confirmPasswordInput.style.borderColor = passwordsMatch ? "green" : "red";
}

// Attach event listeners for input changes
fullNameInput.addEventListener("input", validateForm);
emailInput.addEventListener("input", validateForm);
passwordInput.addEventListener("input", validateForm);
confirmPasswordInput.addEventListener("input", validateForm);

// Call validateForm on initial page load to disable the button if necessary
document.addEventListener("DOMContentLoaded", validateForm);

// Final check for password match and form validation on form submission
document.querySelector(".signUp-form").addEventListener("submit", (event) => {
  if (
    fullNameInput.value.trim().length > 0 &&
    isValidEmail(emailInput.value) &&
    passwordInput.value.length >= 8 &&
    passwordInput.value === confirmPasswordInput.value
  ) {
    // Allow form submission if all checks pass
    return true;
  } else {
    event.preventDefault(); // Prevent form submission if validation fails
    alert("Please fill out the form correctly.");
  }
});
