<?php
// Start the session to access session variables
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = ""; // Database password
$dbname = "ndaya_bus";

// Enable error reporting for debugging
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle the POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user input to prevent XSS and other issues
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Invalid email format. Please go back and try again.";
        header("Location: signUp.php");  // Redirect to sign-up page
        exit();
    }

    // Check if email already exists in the database
    $sql_check = "SELECT * FROM users WHERE email = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param("s", $email);
    $stmt_check->execute();
    $result = $stmt_check->get_result();

    // If email exists, show error message and redirect
    if ($result->num_rows > 0) {
        $_SESSION['error'] = "Email already exists. Please use another email.";
        header("Location: signUp.php");  // Redirect to sign-up page
        exit();
    }
    $stmt_check->close();

    // Password validation: Ensure it's at least 8 characters
    if (strlen($password) < 8) {
        $_SESSION['error'] = "Password must be at least 8 characters long.";
        header("Location: signUp.php");  // Redirect to sign-up page
        exit();
    }

    // Hash the password securely before storing it
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Prepare and execute SQL to insert new user data into the database
    $sql = "INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $fullname, $email, $hashedPassword);

    // Check if insertion was successful
    if ($stmt->execute()) {
        $_SESSION['success'] = "Signup successful! You can now log in.";
        header("Location: myAccount.php");  // Redirect to login page
        exit();
    } else {
        $_SESSION['error'] = "An error occurred during signup. Please try again.";
        header("Location: signUp.php");  // Redirect back with error message
        exit();
    }

    // Close the prepared statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
