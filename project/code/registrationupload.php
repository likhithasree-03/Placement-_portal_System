<?php
// Database connection
$conn=new mysqli('localhost','root','','project');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form submission and database insertion
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rollno=$_POST['rollno'];
        $name=$_POST['name'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $Emailid = $_POST['Emailid'];
    $gender = $_POST['gender'];
    $company = isset($_POST['company']) ? $_POST['company'] : '';
    $job = isset($_POST['job']) ? $_POST['job'] : '';
    $qualifications = isset($_POST['qualifications']) ? $_POST['qualifications'] : '';
    $intern = $_POST['intern'];

    // Upload Resume
    
    $resume_name = $_FILES['resume']['name'];
    $resume_tmp = $_FILES['resume']['tmp_name'];
    move_uploaded_file($resume_tmp, "c:/xampp/htdocs/project/code/uploads/resume/$resume_name");

    // Upload ID Proof
    
    $id_proof_name = $_FILES['id_proof']['name'];
    $id_proof_tmp = $_FILES['id_proof']['tmp_name'];
    move_uploaded_file($id_proof_tmp, "c:/xampp/htdocs/project/code/uploads/idproof/$id_proof_name");

    // Insert data into the database
    $sql = "INSERT INTO registration (rollno,name, dob, phone, Emailid, gender, company, job, qualifications, intern,resume, id_proof)
            VALUES (?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssssss",$rollno, $name, $dob, $phone, $Emailid, $gender, $company, $job, $qualifications, $intern, $resume_name, $id_proof_name);

    if ($stmt->execute()) {
        echo "Registration successful.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
