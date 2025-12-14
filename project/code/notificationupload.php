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

// Get data from form submission
$message = $_POST['message'];
$date = $_POST['date'];

// Validate data (you can add more validation as needed)

// Insert data into notifications table
$sql = "INSERT INTO notifications (message, date) VALUES ('$message', '$date')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Notification added successfully.');</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
?>
