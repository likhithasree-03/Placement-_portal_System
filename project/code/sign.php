<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign In</title>
<style>
    body {
        font-family: Arial, sans-serif;
        text-align: center;
        margin-top: 100px;
    }
    .btn {
        display: inline-block;
        padding: 10px 20px;
        margin: 10px;
        font-size: 16px;
        text-decoration: none;
        color: #fff;
        background-color: #007bff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .btn:hover {
        background-color: #0056b3;
    }
</style>
</head>
<body>

<h1>Choose Sign In Option</h1>

<form action="" method="post">
    <button type="submit" name="student_signin" class="btn">Student Sign In</button>
    <button type="submit" name="company_signin" class="btn">Company Sign In</button>
</form>

<?php
if(isset($_POST['student_signin'])) {
    header("Location: signin.php"); // Redirect to student login page
    exit;
}
elseif(isset($_POST['company_signin'])) {
    header("Location: signin1.php"); // Redirect to company login page
    exit;
}
?>

</body>
</html>
