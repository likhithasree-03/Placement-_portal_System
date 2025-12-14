<?php
session_start();

// Set a session variable to indicate the previous page
$_SESSION['previous_page'] = basename($_SERVER['PHP_SELF']);

// Your page content goes here
?>
