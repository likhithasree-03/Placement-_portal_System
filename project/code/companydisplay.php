<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Display Companies</title>
<style>
    .company-box {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 20px;
        background-color: #f9f9f9;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 500px;
    }
    .company-logo {
        max-width: 200px;
        height: auto;
    }
        .register-button {
        display: block;
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    

</style>
</head>
<body>

<h2>Registered Companies</h2>
<?php
// Include database connection code
$conn = new mysqli('localhost','root','','placement');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the database
$sql = "SELECT * FROM company ";
$result = $conn->query($sql);

// Check if there are any rows returned
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        
        echo "<div class='company-box'>";
        echo "<h3>" . $row['company_name'] . "</h3>";
        echo "<p>Email: " . $row['email'] . "</p>";
        echo "<p>Roles: " . $row['roles'] . "</p>";
        echo "<p>Number of Vacancies: " . $row['vacancies'] . "</p>";
        echo "<p>Skills Required: " . $row['skills_required'] . "</p>";
        echo "<p>Package: $" . $row['package'] . "</p>";
        
            echo '<img src="' . $row['image1'] . '" alt="' . $row['company_name'] . '"  class="company-logo" >';
        
        echo "<a href='registration.php' class='register-button'>Register</a>";
        echo "</div>";
        
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();

?>

</body>
</html>
