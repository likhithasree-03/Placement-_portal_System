<?php
$username=$_POST['username'];
$Emailid=$_POST['Emailid'];
$password=$_POST['password'];
$usertype=$_POST['usertype'];
$servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "project1";
    $conn = new mysqli($servername, $db_username, $db_password, $dbname);
// $conn=new mysqli('localhost','root','','project');
// $conn=new mysqli('localhost','root','','project');
if($conn->connect_error){
    die('connection failed:'.$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into signin6 (username,Emailid,password,usertype)values(?,?,?,?)");
    $stmt->bind_param("ssss",$username,$Emailid,$password,$usertype);
    $stmt->execute();
    echo "signin successfully";
    $stmt->close();
    $conn->close();
}
?>