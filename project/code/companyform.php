<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Company Details Form</title>
<style>
    body {
        font-family: Arial, sans-serif;
        
    }
    form {
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
        
    }
    input[type="text"], input[type="email"], input[type="number"], textarea {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
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
    label {
        font-weight: bold;
    }
</style>
</head>
<body >

<form action="companyupload.php" method="post" enctype="multipart/form-data">
    <h2>Company Details Form</h2>
    <label for="company_name">Company Name:</label>
    <input type="text" id="company_name" name="company_name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="roles">Roles:</label>
    <input type="text" id="roles" name="roles" required>

    <label for="vacancies">Number of Vacancies:</label>
    <input type="number" id="vacancies" name="vacancies" required>

    <label for="skills_required">Skills Required:</label>
    <textarea id="skills_required" name="skills_required" rows="4" required></textarea>

    <label for="package">Package:</label>
    <input type="text" id="package" name="package" required>

    <label for="image">Upload Image:</label>
    <input type="file" id="image" name="image1" accept="image" required>

    <input type="submit" value="Submit">
</form>

</body>
</html>
