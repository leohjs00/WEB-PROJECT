<?php
require 'conn.php';


$username=$_POST['username'];
$password=$_POST['psw'];


$sql="INSERT INTO customer(username,password) VALUES ('$username', '$password')";
$conn->query($sql);
echo $conn->error;
header('location:index.php');
