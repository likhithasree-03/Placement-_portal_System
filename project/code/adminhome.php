<?php

?>
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <style>
    .small-box {
        width: 300px;
        height: 100px;
        background-color: burlywood;
        color:aquamarine;
        border: 1px solid black;
border-radius:10px;
        display: inline-block;
        margin: 10px;
        
    }
   

    </style>
    <body>

<?php
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to fetch counts
    $sql_company_count = "SELECT COUNT(*) AS company_count FROM company";
    $sql_user_count = "SELECT COUNT(*) AS user_count FROM signin3 WHERE usertype = 'student'";
    $sql_registered_students_count = "SELECT COUNT(*) AS registered_students_count  FROM registration";
    $result_company = $conn->query($sql_company_count);
    $result_user = $conn->query($sql_user_count);
    $result_registered_students = $conn->query($sql_registered_students_count);

    if ($result_company->num_rows > 0 && $result_user->num_rows > 0 && $result_registered_students->num_rows > 0) {
        $row_company = $result_company->fetch_assoc();
        $row_user = $result_user->fetch_assoc();
        $row_registered_students = $result_registered_students->fetch_assoc();

        // Output counts in div boxes
        echo "<div class='small-box'><h2>No of companies</h2><h2 align=center>" . $row_company["company_count"] . "</h2></div>";
        echo "<div class='small-box'><h2>No of students</h2><h2 align=center>" . $row_user["user_count"] . "</h2></div>";
        echo "<div class='small-box'><h2>Registered Students</h2><h2 align=center>" . $row_registered_students["registered_students_count"] . "</h2></div>";
    } else {
        echo "Error fetching counts.";
    }
    $conn->close();
    ?>
</body>
</html>