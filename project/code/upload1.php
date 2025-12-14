<?php
$username=$_POST['username'];
$Emailid=$_POST['Emailid'];
$password=$_POST['password'];
$conn=new mysqli('localhost','root','','project');
if($conn->connect_error){
    die('connection failed:'.$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into signin1(username,Emailid,password)values(?,?,?)");
    $stmt->bind_param("sss",$username,$Emailid,$password);
    $stmt->execute();
    echo "signin successfully";
    $stmt->close();
    $conn->close();
}
?>