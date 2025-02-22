<?php
// Include necessary files (like DB connection)
// include 'db_connection.php'; // Make sure this file contains your DB connection code

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the email from the form
    $email = trim($_POST['email']);

    // Check if email is empty
    if (empty($email)) {
        echo "Please enter your email address.";
        exit;
    }

    // Validate the email format (basic validation)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // Check if the email exists in the database
    $query = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Email exists, generate a unique password reset token
        $token = bin2hex(random_bytes(16)); // Generate a 16-byte token
        $expiry_time = time() + 3600; // Token expires in 1 hour

        // Store the token in the database
        $query = "UPDATE users SET reset_token = ?, token_expiry = ? WHERE email = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sis", $token, $expiry_time, $email);
        $stmt->execute();

        // Send a password reset email to the user
        $reset_link = "https://www.yourwebsite.com/reset_password.php?token=$token";

        $subject = "Password Reset Request";
        $message = "To reset your password, click the link below:\n\n$reset_link";
        $headers = "From: no-reply@yourwebsite.com";

        if (mail($email, $subject, $message, $headers)) {
            echo "Password reset link has been sent to your email.";
        } else {
            echo "Error sending email.";
        }
    } else {
        echo "No account found with that email address.";
    }
}
?>
