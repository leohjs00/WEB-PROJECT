 <?php
require '../conn.php';

$idbooking=$_GET['idbooking'];
$sql="SELECT * FROM booking WHERE idbooking=$idbooking";
$row=$conn->query($sql)->fetch_object();
?>

<html lang="en">
  <head>
    <title>Edit</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <link rel="stylesheet" href="admin.css" />  

  </head>
<h1>BOOKING FORM</h1>
      
       <form  action="kemaskini.php" method="post" data-ajax="false">
	    <input type="hidden" name="idbooking" value="<?php echo $row->idbooking; ?>">
        <label>FULL Name</label><input id="fullname" type="text" name="fullname" value="<?php echo $row->fullname; ?>"/>
		 <label>AGE</label><input id="age" type="number" step="any" name="age" value="<?php echo $row->age; ?>" required/>
        <label>IDENTIFICATION NUMBER</label><input id="icnum" type="number" step="any" name="icnum" value="<?php echo $row->icnum; ?>"required/>
        <label>CURRENT ADDRESS</label><input id="caddress" type="text" step="any" name="caddress" value="<?php echo $row->caddress; ?>"required/>
		<label>CONTACT NUMBER</label><input id="contactnumber" type="number" step="any" name="contactnumber" value="<?php echo $row->contactnumber; ?>"required/>
        <label>LICENSE TYPE</label><input id="licensetype" type="text" step="any" name="licensetype" value="<?php echo $row->licensetype; ?>"required/>
		<label>CHOOSEN CAR NAME</label><input id="carname" type="text" step="any" name="carname" value="<?php echo $row->carname; ?>"required/>
		<label>BOOKING DATE</label><input id="bookingdate" type="date" step="any" name="bookingdate" value="<?php echo $row->bookingdate; ?>"required/>
        <label>RETURNING DATE</label><input id="returndate" type="date" step="any" name="returndate" value="<?php echo $row->returndate; ?>"required/>
		<label>EMAIL ADDRESS</label><input id="email" type="text" step="any" name="email" value="<?php echo $row->email; ?>"required/><br>
		
        <input type="submit" value="submit" name="submit">
      </form>