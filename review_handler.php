<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $rating = $_POST["rating"];
    $review = $_POST["review"];

    // Database connection and insertion code (similar to the previous example)

    // Display a confirmation message or handle errors

    // Close the database connection
}
?>