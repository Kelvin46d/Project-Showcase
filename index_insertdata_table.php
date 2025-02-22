<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ndaya_bus";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Corrected SQL query
$sql = "INSERT INTO quote (fullname, email, phone, event_type, passengers, journey_type, travel_date, travel_time, depart_from, destination, return_date, return_time) 
VALUES (
    'John Doe', 'jdoe@example.com', '+1234567890', 'Corporate', 20, 'return', '2024-12-01', '10:00:00', 'Dublin', 'Galway', '2024-12-02', '18:00:00'
)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
