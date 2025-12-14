<?php
// Start the session
session_start();

// Include database connection code here

// Function to authenticate user and retrieve email based on username and password
function authenticateUser($username, $password) {
    // Include your database connection code here
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "project1";

    // Create connection
    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to retrieve email based on username and password
    $sql = "SELECT Emailid, usertype FROM signin6 WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a row is returned
    if ($result->num_rows == 1) {
        // Fetch the row and return the email and usertype
        $row = $result->fetch_assoc();
        $user_info = array(
            "Emailid" => $row['Emailid'],
            "usertype" => $row['usertype']
        );
        $stmt->close();
        $conn->close();
        return $user_info;
    } else {
        // If no row is returned, authentication failed
        $stmt->close();
        $conn->close();
        return false;
    }
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the submitted username and password
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Perform login authentication
    $user_info = authenticateUser($username, $password);

    if ($user_info) {
        // Login successful, store email and usertype in session
        $_SESSION["Emailid"] = $user_info["Emailid"];
        $_SESSION["usertype"] = $user_info["usertype"];

        // Redirect to the appropriate dashboard page based on usertype
        if ($user_info["usertype"] == "student") {
            header("Location: studentdashboard.php");
        } elseif ($user_info["usertype"] == "company") {
            header("Location: companyform.php");
        }
        exit();
    } else {
        // Login failed, redirect back to the login page with an error message
        header("Location: login.php?error=1");
        exit();
    }
}
?>

    