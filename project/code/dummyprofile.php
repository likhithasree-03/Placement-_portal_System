<?php
// Start the session
session_start();

// Check if the email is set in the session
if (isset($_SESSION['Emailid'])) {
    // Retrieve the email from the session
    $Emailid = $_SESSION['Emailid'];

    // Perform database query to fetch user's profile information based on email
    // Replace this with your actual database query
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

    // SQL query to fetch user's profile information based on email
    $sql = "SELECT * FROM registration WHERE Emailid = '$Emailid'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output profile information
        while($row = $result->fetch_assoc()) {
          
            echo "<h3>Roll no: " . $row["rollno"]. "</h3>";
            echo "<h3>Name: " . $row["name"]. "</h3>";
            echo "<h3>Date of birth: " . $row["dob"]. "</h3>";
            echo "<h3>Email: " . $row["Emailid"]. "</h3>";
            echo "<h3>Phone: " . $row["phone"]. "</h3>";
            echo "<h3>Gender: " . $row["gender"]. "</h3>";
            echo "<h3>Company applied for: " . $row["company"]. "</h3>";
            echo "<h3>Job applied for: " . $row["job"]. "</h3>";
            echo "<h3>Qualifications: " . $row["qualifications"]. "</h3>";
            echo "<h3>Participated in any internships: " . $row["intern"]. "</h3>";
            
            // Display other profile information as needed
        }
    } else {
        echo "No profile information found.";
    }
    $conn->close();
} else {
    // If email is not set in session, display an error message or redirect to the login page
    echo "Error: Email not found in session.";
    // Or redirect to the login page
    // header("Location: login.php");
    // exit();
}
?>
