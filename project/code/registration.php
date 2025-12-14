<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Form</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
    }
    form {
        max-width: 600px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    input[type="text"], input[type="email"], input[type="date"], input[type="tel"], select, textarea {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type="file"] {
        margin-top: 10px;
    }
    label {
        font-weight: bold;
    }
    input[type="submit"] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>

<form action="registrationupload.php" method="post" enctype="multipart/form-data">
    <h2>Registration Form</h2>
    <label for="name">Roll number:</label>
    <input type="text" id="rollno" name="rollno" required>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="dob">Date of Birth:</label>
    <input type="date" id="dob" name="dob" required>

    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>
<label for="email">Email:</label>
    <input type="email" id="email" name="Emailid" required>


    
    <label>Gender:</label>
    <div>
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Male</label>
    </div>
    <div>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>
    </div>
    <div>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label>
    </div>
<label for="company">Company Applied For:</label>
    <input type="text" id="company" name="company" required>

    <label for="job">Job Applied For:</label>
    <input type="text" id="job" name="job" required>

    <label for="qualifications">Qualifications:</label>
    <textarea id="qualifications" name="qualifications" rows="4" required></textarea>

   <label>Participated in any internships:</label>
    <div>
        <input type="radio" id="yes" name="intern" value="yes" required>
        <label for="yes">yes</label>
    </div>
    <div>
        <input type="radio" id="no" name="intern" value="no">
        <label for="no">no</label>
    </div>
        <label for="resume">Upload Resume:</label>
    <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required><br>

    <label for="id_proof">Upload ID Proof:</label>
    <input type="file" id="id_proof" name="id_proof" accept=".pdf,.jpg,.jpeg,.png" required>

    <input type="submit" value="Submit">
</form>

</body>
</html>
