<?php
// Start a session
session_start();

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ndaya_bus";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Invalid email format.";
        header("Location: contactUs.php");
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO messages (fullname, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $fullname, $email, $message);

    if ($stmt->execute()) {
        $_SESSION['success'] ="Thank you for reaching out! Your message has been sent successfully. Our team will respond within 24-48 hours.";

;
    } else {
        $_SESSION['error'] = "Something went wrong. Please try again:" . $stmt->error;
    }

    $stmt->close();
    $conn->close();

    // Redirect back to contactUs.php
    header("Location: contactUs.php");
    exit;
}
?>
