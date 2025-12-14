<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <h2>Add Notification</h2>
    <form action="notificationupload.php" method="post">
    <label for="message">Message:</label><br>
    <textarea id="message" name="message" rows="10" required></textarea><br><br>
        <label for="date">Date:</label><br>
        <input type="date" id="date" name="date"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
