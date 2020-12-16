<?php
require '../conn.php';


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], '../'.$target_file)) {
  
$carname=$_POST['carname'];
$carbrand=$_POST['carbrand'];
$priceperhour=$_POST['priceperhour'];
$priceperweek=$_POST['priceperweek'];
$priceperday=$_POST['priceperday'];

$sql="INSERT INTO car(carname,carbrand,priceperhour,priceperweek,priceperday,carpicture) 
VALUES ('$carname', '$carbrand', '$priceperhour','$priceperday','$priceperweek', '$target_file')";
$conn->query($sql);
echo $conn->error;

header('location:index.php');
  
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>
