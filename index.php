<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>

    body {
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      height: 250vh; /* 100% of the viewport height */
    }

    .partition {
      border: 1px solid #ccc; /* Optional: Add borders for clarity */
    }

    #partition1 {
      height: 13% ; /*0% of the viewport height */
background-color:black;
color:blue;
    }

    #partition2 {
      height: 70% ; /*% of the viewport height */
    }

    #partition3 {
      height: 55%;/* of the viewport height */
    }
#partition4{
      height: 40%;
background-color:black;
color:white;
}

.image-container {
        display:block;

    }
    .image-container img{
        width: 15%; /* Each image takes up 50% of the container width */
        height: 15;
 /* Maintain aspect ratio */

    }
.container {
        text-align: center; /* Center-align the text */
    }
    .container h2 {
        margin-bottom: 20px; /* Add some space between the text and images */
    }

  </style>
  <title>homepage</title>
</head>
<body>

  <div id="partition1" class="partition">
    <!-- Content for the first partition -->
   <b> <h1 align="center" style="color:azure;">LITTLE FLOWER DEGREE AND PG COLLEGE</h1></b>
<nav>
<ul>


<a style="font-size:25px; color:white; text-decoration:none;" href="">HOME&nbsp;&nbsp;&nbsp;</a>
<a style="font-size:25px; color:white; text-decoration:none;" href="photos/aboutus.php" class="link" >ABOUT US&nbsp;&nbsp;&nbsp;</a>
<a style="font-size:25px; color:white; text-decoration:none;" href="code/signin.php">SIGN IN&nbsp;&nbsp;&nbsp;</a>
<a style="font-size:25px; color:white; text-decoration:none;" href="code/login.php">LOG IN&nbsp;&nbsp;&nbsp;</a>
<a style="font-size:25px; color:white; text-decoration:none; " href="code/adminlogin.php">ADMIN</a>

</ul>
</nav>
  </div>

  <div id="partition2" class="partition">
    <!-- Content for the third partition -->
 <img src="photos/image1.webp"
width=100%
height="750"/>

    
  </div>
<div id="partition3" class="partition">
<div class="container">
    <h2>OUR TOP COMPANIES</h2>


<div class="image-container">
    <img src="photos/accenture.jpg">
    <img src="photos/deloitte1.jpg">
<img src="photos/amazon.jpg">
<img src="photos/genpact.jpg">
<img src="photos/microsoft.jpg">
<img src="photos/infosys.jpg">


<img src="photos/wipro.jpg">
<img src="photos/tcs.jpg">
<img src="photos/oracle.jpg">


</div>
</div></div>
<div id="partition4" class="partition">
<h1>Contact us</h1>
<p style="font-size:25px;">Call Us:7849276251</p>
<p style="font-size:25px;">Email id:gdfghyhd@gmail.com</p>

</div>
</body>
</html>
