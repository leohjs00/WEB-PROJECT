<?php
require '../conn.php';
 
$idbooking=$_POST['idbooking'];
$fullname=$_POST['fullname'];
$age=$_POST['age'];
$icnum=$_POST['icnum'];
$caddress=$_POST['caddress'];
$contactnumber=$_POST['contactnumber'];
$licensetype=$_POST['licensetype'];
$carname=$_POST['carname'];
$bookingdate=$_POST['bookingdate'];
$returndate=$_POST['returndate'];
$email=$_POST['email'];


$sql="UPDATE booking SET fullname='$fullname',age='$age',icnum='$icnum', caddress='$caddress', contactnumber='$contactnumber', licensetype='$licensetype', 
carname='$carname',bookingdate='$bookingdate',returndate='$returndate',email='$email' WHERE idbooking = $idbooking";
$conn->query($sql);
echo $conn->error;

header('location:index.php');