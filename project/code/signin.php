<?php

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
       
        .Signin-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }

    </style>
</head>
<body>

    <div class="signin-container">
        <h2>Signin</h2>
        <form action="upload.php" method="post">
          
  <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
  <label for="Email id">Email id:</label>
            <input type="Email" id="Emailid" name="Emailid" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <select id="usertype" name="usertype" required>
        <option value="">Select usertype</option>
        <option value="student">Student</option>
        <option value="company">Company</option>
       
    </select>

            <button type="submit">Sign in</button>
        </form>
    </div>
</body>
</html>