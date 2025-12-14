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


// Query to fetch company data

$sql = "SELECT * FROM signin3 WHERE usertype= 'student'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data as HTML table
    echo "<table border='1'>
            <tr>
                <th>username</th>
                <th>Email</th>
                <th>password</th>
                <th>usertype</th>
                
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["username"]."</td>
                <td>".$row["Emailid"]."</td>
                <td>".$row["password"]."</td>
                <td>".$row["usertype"]."</td>
                
              
              
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>


