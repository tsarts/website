<?php
// Database connection code (similar to the previous examples)

// Retrieve reviews from the database
$sql = "SELECT name, rating, review FROM reviews";
$result = $conn->query($sql);

// Display reviews
if ($result->num_rows > 0) {
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li><strong>{$row['name']}</strong> (Rating: {$row['rating']}) - {$row['review']}</li>";
    }
    echo "</ul>";
} else {
    echo "No reviews yet.";
}

// Close the database connection
$conn->close();
?>