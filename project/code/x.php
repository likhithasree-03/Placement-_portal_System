<?php
session_start();

// Check if the session variable indicating the previous page is set
if(isset($_SESSION['previous_page']) && $_SESSION['previous_page'] === "y.php") {
    // Redirect to another page
    header("Location: y.php");
    exit();
} else {
    // Your page content goes here
}
?>
