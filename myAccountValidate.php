<?php
session_start(); // Start session to store user data or error messages

// Database connection
$servername = "localhost"; 
$username = "root";        
$password = "";           
$dbname = "ndaya_bus";    

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Login validation
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user input
    $fullname = trim($_POST['fullname']);
    $password = trim($_POST['password']);

    if (empty($fullname) || empty($password)) {
        $error = "Both fields are required.";
    } else {
        // Prepare and execute SQL query
        $sql = "SELECT password FROM users WHERE fullname=?";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("s", $fullname);
            $stmt->execute();
            $result = $stmt->get_result();

            // Check if the user exists
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                // Verify password
                if (password_verify($password, $row['password'])) {
                    $_SESSION['fullname'] = $fullname; // Set session variable
                    header("Location: index.php");      // Redirect to main page
                    exit();
                } else {
                    $error = "Invalid password. Please try again.";
                }
            } else {
                $error = "No account found with this name.";
            }

            $stmt->close();
        } else {
            $error = "Failed to prepare statement.";
        }
    }

    $conn->close();

    // Handle errors by redirecting back to login page with a session message
    if (isset($error)) {
        $_SESSION['error_message'] = $error;
        header("Location: ./myAccount.php"); 
        exit();
    }
}
?>
