<?php
session_start(); // Start session for storing feedback messages

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ndaya_bus";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate inputs
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $event_type = $_POST['event'];
    $passengers = intval($_POST['passengers']);
    $travel_date = $_POST['travel_date'];
    $travel_time = $_POST['travel_time'];
    $depart_from = trim($_POST['depart_from']);
    $destination = trim($_POST['destination']);
    $return_date = !empty($_POST['return_date']) ? $_POST['return_date'] : null;
    $return_time = !empty($_POST['return_time']) ? $_POST['return_time'] : '00:00:00'; // Default time if not provided
    $journey_type = $_POST['journey'];  

    if (empty($fullname) || !filter_var($email, FILTER_VALIDATE_EMAIL) ||
        !preg_match('/^[0-9+()\- ]{7,15}$/', $phone) ||
        $passengers < 1 || empty($travel_date) ||
        empty($travel_time) || empty($depart_from) || empty($destination)) {
        $_SESSION['error'] = "Please fill out all required fields correctly.";
        header("Location: quickQuote.php");
        exit();
    }
    $stmt = $conn->prepare("INSERT INTO quote (fullname, email, phone, event_type, passengers, journey_type, travel_date, travel_time, depart_from, destination, return_date, return_time) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssisssssss", $fullname, $email, $phone, $event_type, $passengers, $journey_type, $travel_date, $travel_time, $depart_from, $destination, $return_date, $return_time);

    if ($stmt->execute()) {
        $_SESSION['success'] = "Thank you for submitting your quote request! We've received your inquiry and one of our 
                                team members will be in touch with you shortly to provide more details. If you have any 
                                urgent questions in the meantime,feel free to reach out to us directly. We look forward to assisting you!";
    } else {
        $_SESSION['error'] = "Database error: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();

    header("Location: quickQuote.php");
    exit();
}
?>
