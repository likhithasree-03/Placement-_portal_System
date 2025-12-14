<?php
// Connect to your database (replace these with your actual database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get current date
$currentDate = date("Y-m-d");

// Query to fetch notifications based on date
$sql = "SELECT * FROM notifications WHERE date = '$currentDate'";
$result = $conn->query($sql);

// Check if there are any notifications
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<p>" . $row["message"] . "</p>";
    }
} else {
    echo "No notifications for today.";
}

// Close database connection
$conn->close();
?>
