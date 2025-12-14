<?php
session_start();

// Unset session variable and destroy session
session_unset();
session_destroy();

// Redirect to login page
header("Location: adminlogin.php");
exit();
?>
