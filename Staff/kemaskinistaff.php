<?php
require '../conn.php';

$idupdate=$_POST['idupdate'];
$availability=$_POST['availability'];
$bookingstatus=$_POST['bookingstatus'];
$carcondition=$_POST['carcondition'];
$currentloc=$_POST['currentloc'];
$staffname=$_POST['staffname'];
$number=$_POST['number'];



$sql="UPDATE aprroval SET availability='$availability',bookingstatus='$bookingstatus',carcondition='$carcondition',
currentloc='$currentloc',staffname='$staffname',number='$number' WHERE idupdate ='$idupdate'";
$conn->query($sql);
echo $conn->error;

header('location:index.php');