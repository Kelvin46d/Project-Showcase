// Validate email format
document.getElementById('signupForm').addEventListener('submit', function (event) {
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;

    // Regular expression for validating an email
    const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    let valid = true;

    // Validate email
    if (!emailRegex.test(email)) {
        document.getElementById('emailError').textContent = "Please enter a valid email.";
        valid = false;
    } else {
        document.getElementById('emailError').textContent = "";
    }

    // Validate password length
    if (password.length < 5) {
        document.getElementById('passwordError').textContent = "Password must be at least 5 characters.";
        valid = false;
    } else {
        document.getElementById('passwordError').textContent = "";
    }

    // Check if passwords match
    if (password !== confirmPassword) {
        document.getElementById('confirmPasswordError').textContent = "Passwords do not match.";
        valid = false;
    } else {
        document.getElementById('confirmPasswordError').textContent = "";
    }

    if (!valid) {
        event.preventDefault(); // Stop form submission if validation fails
    }
});

// Toggle password visibility
function togglePassword() {
    const passwordField = document.getElementById("password");
    const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
    passwordField.setAttribute("type", type);
}
