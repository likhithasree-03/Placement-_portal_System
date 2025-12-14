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
if (isset($_POST['company_name'])) {
    $company_name = $_POST['company_name'];
    $delete_sql = "DELETE FROM company WHERE company_name = '$company_name'";
    if ($conn->query($delete_sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Query to fetch company data
$sql = "SELECT * FROM company";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data as HTML table
    echo "<table border='1'>
            <tr>
                <th>Company Name</th>
                <th>Email</th>
                <th>Roles</th>
                <th>Vacancies</th>
                <th>Skills Required</th>
                <th>Package</th>
                <th>Image</th>
                <th>Action</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        $imageData = base64_encode($row["image1"]);

        echo "<tr>
                <td>".$row["company_name"]."</td>
                <td>".$row["email"]."</td>
                <td>".$row["roles"]."</td>
                <td>".$row["vacancies"]."</td>
                <td>".$row["skills_required"]."</td>
                <td>".$row["package"]."</td>
                <td><img src='data:image1/jpeg;base64,".$imageData."' width='100' height='100'></td>
                <td>
                    <form method='post'>
                  
                    <input type='hidden' name='company_name' value='".$row["company_name"]."'>
                        <input type='submit' value='Delete'>
                    </form>
                </td>
              
              </tr>";
    }
    echo "</table>";
    

} else {
   
    echo "0 results";
}

$conn->close();
?>

