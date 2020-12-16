<?php
require '../conn.php';
$idbooking = $_GET['idbooking'];
$sql = "DELETE FROM booking WHERE idbooking = $idbooking";
$conn->query($sql);

echo $conn->error;
header('location: index.php');