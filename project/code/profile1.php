<?php
// Simulate database connection
// Replace this section with your actual database connection code
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

// Retrieve roll number from GET parameters
$rollno = $_GET['rollno'];

// Query to retrieve student information based on roll number
$sql = "SELECT * FROM registration WHERE rollno = '$rollno'"; // Note: This is vulnerable to SQL injection. Use prepared statements for security.
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Student found, display information
    $student = $result->fetch_assoc();
    echo "<p>Roll Number: " . $student['rollno'] . "</p>";
    echo "<p>Name: " . $student['name'] . "</p>";
    echo "<p>Email: " . $student['email'] . "</p>";
    echo "<p>Phone: " . $student['phone'] . "</p>";
    // Display other student information as needed
} else {
    // Student not found
    echo "<p>No student found with the provided roll number.</p>";
}

// Close connection
$conn->close();
?>
