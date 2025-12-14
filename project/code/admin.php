<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION["admin_logged_in"]) || $_SESSION["admin_logged_in"] !== true) {
    // Redirect to login page
    header("Location: adminlogin.php");
    exit();
}

// Prevent caching of this page
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1
header("Pragma: no-cache"); // HTTP 1.0
header("Expires: 0"); 
?>
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            display: flex;
            height: 100vh; /* Make container full height of viewport */
        }

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


        
        .content {
    margin-left: 250px;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    margin-top: 40px;
    width:auto;
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
        <div class="sidebar">
        <h2>Admin Dashboard</h2>
            <ul>
            <li><a href="?page=home" class="sidebar-link">Home</a></li>  
            <li><a href="?page=notifications" class="sidebar-link">Notifications</a></li> 
        <li><a href="?page=companyedit" class="sidebar-link">Company Edit</a></li>
        <li><a href="?page=students" class="sidebar-link">Students</a></li>
        <li><a href="?page=companies" class="sidebar-link">Company Signin</a></li>
        <li><a href="?page=registeredstudents" class="sidebar-link">registered students</a></li>
        <li><a href="?page=logout" class="sidebar-link">logout</a></li>
    </ul>
        </div>
        <div class="content">
           
                <!-- Add dashboard content here -->
                <p>Welcome to the admin dashboard!</p>
</div>


            </div>
        </div>
    </div>
    <div class="content" id="page-content">
   <?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    switch ($page) {
        case 'home':
            include 'adminhome.php';
            break;
            case 'notifications':
                include 'adminnotications.php';
                break;    
        case 'companyedit':
            include '1.php';
            break;
        case 'students':
            include 'students.php';
            break;
        case 'companies':
            include 'companies.php';
            break;
        case 'registeredstudents':
            include 'registeredstudents.php';
            break;
            case 'logout':
                include 'adminlogout.php';
                break;
                
        default:
           include 'adminhome.php';
            break;
        }

   ?>
</body>
</html>