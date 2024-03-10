<?php
$name = $_POST ['name'];
$password = $_POST ['password'];
$message = $_POST ['message'];
$conn = mysqli_connect("localhost","root","","food") or die("connection failed");

$sql = "INSERT INTO response (name, password, message) VALUES ('$name','$password','$message')";
$result = mysqli_query($conn,$sql)or die("query failed");

if($result==true)
{
    header("Location:thanks.html");
    exit();
}


$conn->close();

?>