<?php




// Check if the user is not logged in, redirect to login page

?>
<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Dashboard</title>
<style>
    /* Reset CSS */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
}

/* Sidebar styles */
.sidebar {
    height: 100%;
    width: 250px;
    position: fixed;
    top: 0;
    left: 0;
    background-color: #333;
    padding-top: 20px;
}

.sidebar h2 {
    color: white;
    text-align: center;
    margin-bottom: 20px;
}

.sidebar ul {
    list-style-type: none;
    padding: 0;
}

.sidebar ul li {
    padding: 8px 16px;
}

.sidebar ul li a {
    color: white;
    text-decoration: none;
    display: block;
}

.sidebar ul li a:hover {
    background-color: #555;
}

/* Content styles */
.content {
    margin-left: 250px;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    margin-top: 40px;
}

.content h2 {
    margin-bottom: 20px;
    color: #333;
}

.content p {
    color: #666;
}
</style>




</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <h2>Student Dashboard</h2>
    <ul>
        <li><a href="?page=profile" class="sidebar-link">Profile</a></li>
        <li><a href="?page=company" class="sidebar-link">Companies</a></li>
        <li><a href="?page=notifications" class="sidebar-link">Notifications</a></li>
        <li><a href="?page=logout" class="sidebar-link">Logout</a></li>
        
    </ul>
</div>

<!-- Page content -->
<div class="content" id="page-content">
<h2>Dashboard</h2>
        <p>Welcome to the admin dashboard.</p>

    
</div>   
<div class="content" id="page-content">
   <?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'profile';
    switch ($page) {
        case 'profile':
            include 'dummyprofile.php';
            break;
        case 'company':
            include 'companydisplay.php';
            break;
        case 'notifications':
            include 'notificationdisplay.php';
            break;
        case 'logout':
            include 'logout.php';
            break;
        default:
        include 'dummyprofile.php';
            break;
        }

    

    ?>

    </div>

   
    

</body>
</html>
