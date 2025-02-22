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



// sql to create table
$sql = "DROP table users";
if ($conn->query($sql) === TRUE) {
    echo "Table MySignUp1 dropped successfully";
} else {
    echo "Error dropping table: " . $conn->error;
}
$conn->close();
?>
