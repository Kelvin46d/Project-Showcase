<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="forgottenPassword.css">
<link rel="stylesheet" href="./indexSheet.css">
<link rel="stylesheet" href="footer.css">


<body>


    <?php
    include './header.php';

    ?>
    <?php
    echo '<div class="account-quote"> 
    <a href="./signUp.php" class="fixed-top-right">Account</a>
    <a href="./quickQuote.php" class="top-left">Get A Quote</a>
    </div>';
    ?>
    <div class="containerPwd">
        <div class="forggetingPassword-page">
            <div class="logo-PWD">
                <img src="./image/buslogo4.JPG" alt="logo">
            </div>
            <div class="pwd">
                <h1>Forgot Password</h1>
            </div>

            <!-- The Form for Resetting Password -->
            <form class="form-class" id="forgot-password-form" action="./myAccount.php" method="post">

                <div>
                    <p>Please enter your e-mail address to reset your password</p>
                </div>
                <div>
                    <label for="email">E-mail:</label>
                    <input id="email" type="text" name="email" required>
                </div>

                <!-- Error message for invalid email -->
                <div id="error-message" style="display: none; color: red;"></div>

                <div class="cancel-reset">
                    <button type="submit"><strong>Reset Password</strong></button>
                    <button type="button" id="cancel-button"><strong>Cancel</strong></button>
                </div>

            </form>
        </div>
    </div>

    <?php
    include './footer.php';

    ?>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.getElementById("forgot-password-form");
            const emailInput = document.getElementById("email");
            const errorMessage = document.getElementById("error-message");
            const cancelButton = document.getElementById("cancel-button");

            // Handle form submission
            form.addEventListener("submit", function(event) {
                const email = emailInput.value.trim();

                // Check if email is empty or invalid
                if (email === "") {
                    errorMessage.textContent = "Please enter your email address.";
                    errorMessage.style.display = "block"; // Show the error message
                    event.preventDefault(); // Prevent form submission
                } else if (!validateEmail(email)) {
                    errorMessage.textContent = "Please enter a valid email address.";
                    errorMessage.style.display = "block"; // Show the error message
                    event.preventDefault(); // Prevent form submission
                } else {
                    // If email is valid, hide error message and allow form submission
                    errorMessage.style.display = "none";
                    console.log("Password reset email sent to:", email);
                    alert("If the email is registered, a password reset link has been sent.");
                }
            });

            // Cancel button functionality (clears the form or redirects to login)
            cancelButton.addEventListener("click", function() {
                window.location.href = "./login.php"; // Redirect to login page or clear the form
            });

            // Email validation function
            function validateEmail(email) {
                const re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                return re.test(email);
            }
        });
    </script>

</body>

</html>