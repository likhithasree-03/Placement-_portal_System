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

$sql = "SELECT * FROM registration ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data as HTML table
    echo "<table border='1'>
            <tr>
                <th>Roll no</th>
                <th>Name</th>
                <th>DOB</th>
                <th>Phone number</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Company appilied for</th>
                <th>job applied for</th>
                <th>Qualifications</th>
                <th>Any Internship</th>
                <th>Resume</th>
                <th>Id proof</th>
          

            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["rollno"]."</td>
                <td>".$row["name"]."</td>
                <td>".$row["dob"]."</td>
                <td>".$row["phone"]."</td>
                <td>".$row["Emailid"]."</td>
                <td>".$row["gender"]."</td>
                <td>".$row["company"]."</td>
                <td>".$row["job"]."</td>
                <td>".$row["qualifications"]."</td>
                <td>".$row["intern"]."</td>
                <td>".$row["resume"]."</td>
                <td>".$row["id_proof"]."</td>
                
              
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
