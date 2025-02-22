<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "ndaya_bus");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch testimonials
$sql = "SELECT fullname, review, date, rating FROM testimonials ORDER BY date DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='testimonial-card'>";
        echo "<p>" . htmlspecialchars($row['review']) . "</p>";
        echo "<h4>" . htmlspecialchars($row['fullname']) . "</h4>";
        echo "<p>" . htmlspecialchars($row['date']) . "</p>";
        if (!empty($row['rating'])) {
            echo "<p>Rating: " . htmlspecialchars($row['rating']) . "/5</p>";
        }
        echo "</div>";
    }
} else {
    echo "<p>No testimonials available at the moment.</p>";
}

$conn->close();
?>
