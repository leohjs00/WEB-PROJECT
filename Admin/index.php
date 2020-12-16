<?php
require '../conn.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        
    <style>
      * {
        box-sizing: border-box;
      }

      /* Style the body */
      body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
      }

      /* Header/logo Title */
      .header {
        padding: 80px;
        background-position: center;
        background-image: url("car.png"); 
        background-size: cotain;
        background-repeat: no-repeat;
      }

      /* Increase the font size of the heading */
      .header h1 {
        font-size: 40px;
      }

      /* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
      .navbar {
        overflow: hidden;
        background-color: #333;
        position: sticky;
        position: -webkit-sticky;
        top: 0;
      }

      /* Style the navigation bar links */
      .navbar a {
        float: left;
        display: block;
        color: white;
        text-align: center;
        padding: 14px 20px;
        text-decoration: none;
      }

      /* Right-aligned link */
      .navbar a.right {
        float: right;
      }

      /* Change color on hover */
      .navbar a:hover {
        background-color: #ddd;
        color: black;
      }

      /* Active/current link */
      .navbar a.active {
        background-color: #666;
        color: white;
      }

      /* Column container */
      .row {  
        display: -ms-flexbox; /* IE10 */
        display: flex;
        -ms-flex-wrap: wrap; /* IE10 */
        flex-wrap: wrap;
      }

      /* Create two unequal columns that sits next to each other */
      /* Sidebar/left column */
      .side {
        -ms-flex: 20%; /* IE10 */
        flex: 20%;
        background-image: url("blue.jpg"); 
        padding: 20px;
      }

      /* Main column */
      .main {   
        -ms-flex: 80%; /* IE10 */
        flex: 80%;
        background-image: url("200.gif"); 
        background-repeat: no-repeat;
        background-size: cover;
        padding: 20px;
      }

      /* Fake image, just for this example */
      .fakeimg {
        background-image: url("adm.png");
        background-repeat: no-repeat;
        width: 100%;
        padding: 20px;
      }

      /* Footer */
      .footer {
        padding: 3px;
        text-align: center;
          background-image: url("clr.jpg");
      }

      /* Text */
      .text{
      text-align:left;
      }

      /* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
      @media screen and (max-width: 700px) {
        .row {   
          flex-direction: column;
        }
      }

      /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
      @media screen and (max-width: 400px) {
        .navbar a {
          float: none;
          width: 100%;
        }
      }

      /* PAGE2 */
      /* Footer2 */
      .footer2 {
        padding: 1px;
        text-align: center;
          background-image: url("clr.jpg");
      }

      .column {
        float: left;
        width: 33.3%;
        margin-bottom: 16px;
        padding: 0 8px;
      }

      @media screen and (max-width: 650px) {
        .column {
          width: 100%;
          display: block;
        }
      }

.card {
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			}

			.container {
				padding: 0 16px;
			}

			.container::after, .row2::after {
				content: "";
				clear: both;
				display: table;
			}


      .title {
        color: grey;
      }

      .button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 5px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
      }

      .button:hover {
        background-color: #555;
      }
	  
	  	.table, td, th {
		border: 1px solid black;
		}

	.table {
		width: 300%;
	border-collapse: collapse;
			}
    </style>
  </head>
  <body>
    <div data-role="page" id="page1">
      <div class="header">
        <h1></h1>
      </div>

      <div class="navbar">
        <a href="#page1">Home</a>
        <a href="#page2">Car Menu</a>
        <a href="#page3">Upgrade Menu</a>
		<a href="#page4">Customer Details</a>
		<a href="#page5">Staff & Car Availability</a>
		<a href="#page6">Statistic</a>
       <a href="#page7" class="right" onclick="logout()">LogOut</a>
      </div>

      <div class="row">
        <div class="side">
		 <div id="clockbox" style="font:12pt verdana; color:#FAF0E6;"></div>
          <h2>Administator:</h2>  
          <div class="fakeimg" style="height:500px;"></div>
		  Authorize by Admin only
        </div>
 <script type="text/javascript">
var tday=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
var tmonth=["January","February","March","April","May","June","July","August","September","October","November","December"];

function GetClock(){
var d=new Date();
var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate();
var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

if(nhour==0){ap=" AM";nhour=12;}
else if(nhour<12){ap=" AM";}
else if(nhour==12){ap=" PM";}
else if(nhour>12){ap=" PM";nhour-=12;}

if(nmin<=9) nmin="0"+nmin;
if(nsec<=9) nsec="0"+nsec;

var clocktext=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+" <br> "+nhour+":"+nmin+":"+nsec+ap+"";
document.getElementById('clockbox').innerHTML=clocktext;
}

GetClock();
setInterval(GetClock,1000);
</script>
        <div class="main">
          <center>
            <marquee direction ="left to right" height="200" width="50%" loop="10">
              <font face="tahoma" size="30" color="darkblue" align="center" valign="center"> Welcome Mr.Admin
            </marquee>
          </center>
          
          <h3>Introduction</h3>
          
          <p>,<b>The world has become a place where<br>
          there is a lot of technological development;<br> 
          where every single thing done physically has<br>
          been transformed into computerized form.<br> 
          Nowadays, people’s activities have been transformed <br>
          into work done by computerized systems. The system <br>
          of renting cars exist back in the previous years,<br>
          were people rent cars for their personal reasons.<br>
          Car renting is essential to many peoples’ plan to <br>
          travel or move from one place to another for business<br>
          purposes, tour, and visit or holidays, for these<br>
          reasons Car renting is very helpful.</b></p>
        </div>
      </div>

      <div class="footer">
        <h2>FF_Car_Rental.com</h2>
      </div>
    </div>

    <div data-role="page" id="page2">
      <div class="header">
        <h1></h1>
      </div>

      <div class="navbar">
         <a href="#page1">Home</a>
        <a href="#page2">Car Menu</a>
        <a href="#page3">Upgrade Menu</a>
		<a href="#page4">Customer Details</a>
		<a href="#page5">Staff & Car Availability</a>
		<a href="#page6">Statistic</a>
       <a href="#page7" class="right" onclick="logout()">LogOut</a>
      </div>

      <h2>UPDATED CAR</h2>

      <center>
       	<table border="2" width="50%">
             <tr>
			 <td bgcolor="D3D3D3"><center><a href="#page3"><h4><b>CREATE</b></h4></center></a></td>
			 </tr>
			</table>
      </center>
      <br>

      <?php
      $sql="SELECT * FROM car";
      $result= $conn->query($sql);
      while($row=$result->fetch_object()){
      ?>

      <div class="row2">
        <div class="column">
          <div class="card">
            <img src="../<?php echo $row->carpicture; ?>" style="width:100%">
            <div class="container">
              <h2><?php echo $row->carname; ?></h2>
              <p class="title"><?php echo $row->carbrand; ?></p>
              <p>Rent Price:</p>
              <p>RM <?php echo $row->priceperhour; ?> per hour<br>
              RM <?php echo $row->priceperday; ?> per day<br>
              RM <?php echo $row->priceperweek; ?> per week</p>
              <td><input type="button" value="Edit" onclick="window.location='edit.php?idCar=<?php echo $row->idCar; ?>'"></td> 
              <td><input type="button" value="Delete" onclick="padam('<?php echo $row->idCar; ?>')"></button></td>
            </div>
          </div>
        </div>
      </div>
	  
	  <script>
	  function padam(idCar){
		  if (confirm('Are Sure Want To Delete?')){
			  window.location='delete.php?idCar='+idCar;
		  }
	  }
	  </script>

      <?php
      }
      ?>

      <div class="footer2">
        <h2>FF_Car_Rental.com</h2>
      </div>
    </div>

    <div data-role="page" id="page3">
      <div class="header">
        <h1></h1>
      </div>

      <div class="navbar">
       <a href="#page1">Home</a>
        <a href="#page2">Car Menu</a>
        <a href="#page3">Upgrade Menu</a>
		<a href="#page4">Customer Details</a>
		<a href="#page5">Staff & Car Availability</a>
		<a href="#page6">Statistic</a>
       <a href="#page7" class="right" onclick="logout()">LogOut</a>
      </div>

      <h1>Create</h1>
      <br>
	  
      <form enctype="multipart/form-data" action="simpan.php" method="post" data-ajax="false">
	 <table> 
      <input type="hidden" name="idCar" value="" />
		
        <label>Car Name</label>
		<input id="carname" type="text" name="carname" value="" required/>
		
		<label>Car Brand</label>
		<input id="carbrand" type="text" name="carbrand" value="" required/>
		
        <label>Price per Hour</label>
		<input id="priceperhour" type="number" name="priceperhour" value="" required/>
		
        <label>Price per Day</label>
		<input id="priceperday" type="number" name="priceperday" value="" required/>
		
        <label>Price per Week</label>
		<input id="priceperweek" type="number" name="priceperweek" value="" required/>
		
        Select car image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="submit" name="submit" width="50%" />
	 </table>
      </form>


      <div class="footer2">
        <h2>FF_Car_Rental.com</h2>
      </div>
    </div>
	
	
	<div data-role="page" id="page4">
<div class="header">
  <h1></h1>
</div>

<div class="navbar">
   <a href="#page1">Home</a>
        <a href="#page2">Car Menu</a>
        <a href="#page3">Upgrade Menu</a>
		<a href="#page4">Customer Details</a>
		<a href="#page5">Staff & Car Availability</a>
		<a href="#page6">Statistic</a>
       <a href="#page7" class="right" onclick="logout()">LogOut</a>
</div>


  <h3><b>This Details only can be update by Customer</b></h3><br>


      <div class="row2">
        <div class="column">
     
            
			 <table border="5" width="300%">
			 
						 <input type="hidden" name="idbooking" value="<?php echo $row->idbooking; ?>">
						 
						
						  <th>FULL NAME</th>
						  <th>AGE</th>
						  <th>IDENTIFICATION NUMBER</th>
						  <th>CUSTOMER ADDRESS</th>
						  <th>CONTACT NUMBER</th>
						  <th>LICENSE TYPE</th>
						  <th>CHOSEN CAR NAME</th>
						  <th>BOOKING DATE</th>
						  <th>RETURNING DATE</th>
						  <th>EMAIL</th>
						 
						 
		 <?php
      $sql="SELECT * FROM booking";
      $result= $conn->query($sql);
      while($row=$result->fetch_object()){
      ?>
						  <tr>
						  <td><?php echo $row->fullname; ?></td>
						  <td><?php echo $row->age; ?></td>
						  <td><?php echo $row->icnum; ?></td>
						  <td><?php echo $row->caddress; ?></td>
						  <td><?php echo $row->contactnumber; ?></td>
						  <td><?php echo $row->licensetype; ?></td>
						  <td><?php echo $row->carname; ?></td>
						  <td> <?php echo $row->bookingdate; ?></td>
						  <td><?php echo $row->returndate; ?></td>
						  <td><?php echo $row->email; ?></td><br>
						  </tr>
						  
		

      <?php
      }
      ?>
	  	</table>	 
				  </div>
           
        </div>
		
		
      </div>

<div class="footer2">
  <h2>FF_Car_Rental.com</h2>
</div>
</div>
<div data-role="page" id="page5">
<div class="header">
  <h1></h1>
</div>
<div class="navbar">
  <a href="#page1">Home</a>
        <a href="#page2">Car Menu</a>
        <a href="#page3">Upgrade Menu</a>
		<a href="#page4">Customer Details</a>
		<a href="#page5">Staff & Car Availability</a>
		<a href="#page6">Statistic</a>
       <a href="#page7" class="right" onclick="logout()">LogOut</a>
</div>
      <br>
		<h3><b>This Details only can be update by staff</b></h3><br>
	<center>
      <?php
      $sql="SELECT * FROM aprroval";
      $result= $conn->query($sql);
      while($row=$result->fetch_object()){
      ?>
      
      <div class="row2">
        <div class="column">
		<table border="2%" width="80%">
          
          
            
			 <input type="hidden" name="idupdate" value="<?php echo $row->idupdate; ?>">
			 <tr>
              <td>AVAILABILITY</td>
			  <td><?php echo $row->availability; ?></td>
			  </tr>
			  
			  <tr>
			  <td>BOOKING STATUS</td>
			  <td><?php echo $row->bookingstatus; ?></td>
			  </tr>
			  
			  <tr>
			  <td>CAR CONDITION</td>
			  <td><?php echo $row->carcondition; ?></td>
			  </tr>
			  
			  <tr>
			  <td>CURRENT LOCATION OF CAR</td>
			  <td><?php echo $row->currentloc; ?></td>
			  </tr>
			  
			  <tr>
			 <td> AVAILABLE STAFF NAME</td>
			 <td> <?php echo $row->staffname; ?></td>
			  </tr>
			  
			  <tr>
			  <td>CONTACT NUMBER</td>
			  <td><?php echo $row->number; ?></td>
			  </tr>
          
       
		  </table>
        </div>
      </div>
	 

      <?php
      }
      ?>
</center>

<div class="footer2">
  <h2>FF_Car_Rental.com</h2>
</div>
</div>

<div data-role="page" id="page6">
<div class="header">
  <h1></h1>
</div>

<div class="navbar">
     <a href="#page1">Home</a>
        <a href="#page2">Car Menu</a>
        <a href="#page3">Upgrade Menu</a>
		<a href="#page4">Customer Details</a>
		<a href="#page5">Staff & Car Availability</a>
		<a href="#page6">Statistic</a>
       <a href="#page7" class="right" onclick="logout()">LogOut</a>
</div>



<center>
<h1>Private Details</h1>

<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Wira', 8],
  ['Exora', 2],
  ['Waja', 4],
  ['Saga', 2],
  ['Bezza', 4]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Rent Cars Average Day', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
</div>
</center>


</div>
<script>
function logout() {
 alert("HAVE A NICE DAY ! You're Logout Now");
 window.location.href = "../index.php";
}
</script>
  </body>
</html>