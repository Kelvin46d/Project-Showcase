// Simple client-side validation
document.getElementById('loginForm').addEventListener('submit', function (event) {
    const email = document.getElementById('email').value;
    const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

    if (!emailRegex.test(email)) {
        document.getElementById('emailError').textContent = "Please enter a valid email.";
        event.preventDefault(); // Prevent form submission if email is invalid
    } else {
        document.getElementById('emailError').textContent = "";
    }
});

// Toggle password visibility
function togglePassword() {
    const passwordField = document.getElementById("password");
    const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
    passwordField.setAttribute("type", type);
}
