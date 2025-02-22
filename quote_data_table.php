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
$sql = "CREATE TABLE quote  (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100) NOT NULL,            
    email VARCHAR(150) NOT NULL,              
    phone VARCHAR(20) NOT NULL,                
    event_type VARCHAR(50) NOT NULL,           
    passengers INT NOT NULL,                   
    journey_type ENUM('return', 'one-way') NOT NULL, 
    travel_date DATE NOT NULL,                 
    travel_time TIME NOT NULL,                
    depart_from VARCHAR(150) NOT NULL,        
    destination VARCHAR(150) NOT NULL,         
    return_date DATE DEFAULT NULL, 
    return_time TIME DEFAULT NULL, 
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table  quote  created successfully";
} else {
    echo "Error creating table quote: " . $conn->error;
}
$conn->close();
?>